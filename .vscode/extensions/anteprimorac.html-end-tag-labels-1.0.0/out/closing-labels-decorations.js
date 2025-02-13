"use strict";
var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __setModuleDefault = (this && this.__setModuleDefault) || (Object.create ? (function(o, v) {
    Object.defineProperty(o, "default", { enumerable: true, value: v });
}) : function(o, v) {
    o["default"] = v;
});
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (k !== "default" && Object.prototype.hasOwnProperty.call(mod, k)) __createBinding(result, mod, k);
    __setModuleDefault(result, mod);
    return result;
};
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
const vscode = __importStar(require("vscode"));
const vscode_html_languageservice_1 = require("vscode-html-languageservice");
const babelParser = __importStar(require("@babel/parser"));
const traverse_1 = __importDefault(require("@babel/traverse"));
function getJSXAttributeStringValue(attr) {
    if (attr?.value) {
        if (attr.value.type === 'StringLiteral' && typeof attr.value.value === 'string') {
            return attr.value.value;
        }
        if (attr.value.type === 'JSXExpressionContainer' &&
            attr.value.expression.type === 'StringLiteral' &&
            typeof attr.value.expression.value === 'string') {
            return attr.value.expression.value;
        }
    }
    return undefined;
}
class ClosingLabelsDecorations {
    getHTMLLanguageService() {
        if (!this.htmlLanguageService) {
            this.htmlLanguageService = (0, vscode_html_languageservice_1.getLanguageService)();
        }
        return this.htmlLanguageService;
    }
    constructor() {
        this.subscriptions = [];
        this.decorationType = this.createTextEditorDecoration();
        this.update = this.update.bind(this);
        this.subscriptions.push(vscode.workspace.onDidChangeConfiguration((event) => {
            if (!event.affectsConfiguration('htmlEndTagLabels')) {
                return;
            }
            this.decorationType = this.createTextEditorDecoration();
            if (this.activeEditor && event.affectsConfiguration('htmlEndTagLabels', this.activeEditor.document)) {
                this.triggerUpdate();
            }
        }));
        // Listen to active editor change
        this.subscriptions.push(vscode.window.onDidChangeActiveTextEditor((event) => this.setActiveEditor(event)));
        // Listen to text change
        this.subscriptions.push(vscode.workspace.onDidChangeTextDocument((event) => {
            if (this.activeEditor && event.document === this.activeEditor.document) {
                this.triggerUpdate();
            }
        }));
        // Set current editor as active if it's available
        if (vscode.window.activeTextEditor) {
            this.setActiveEditor(vscode.window.activeTextEditor);
        }
    }
    createTextEditorDecoration() {
        const themeLabelColor = new vscode.ThemeColor('htmlEndTagLabels.labelColor');
        const settingsLabelColor = vscode.workspace.getConfiguration('htmlEndTagLabels').labelColor;
        let labelColor = themeLabelColor;
        // Use settings color if it's not empty
        if (typeof settingsLabelColor === 'string' && settingsLabelColor.startsWith('#')) {
            labelColor = settingsLabelColor;
        }
        return vscode.window.createTextEditorDecorationType({
            after: {
                color: labelColor,
                margin: '2px',
            },
            rangeBehavior: vscode.DecorationRangeBehavior.ClosedOpen,
        });
    }
    setActiveEditor(editor) {
        if (editor) {
            this.activeEditor = editor;
            this.triggerUpdate();
        }
        else {
            this.activeEditor = undefined;
        }
    }
    triggerUpdate() {
        if (this.updateTimeout) {
            clearTimeout(this.updateTimeout);
            this.updateTimeout = undefined;
        }
        this.updateTimeout = setTimeout(this.update, 500);
    }
    getHTMLDocumentDecorations(input) {
        const htmlLanguageService = this.getHTMLLanguageService();
        const document = { ...input, uri: input.uri.toString() };
        const symbols = htmlLanguageService.findDocumentSymbols(document, htmlLanguageService.parseHTMLDocument(document));
        const decorations = symbols
            .filter((symbol) => {
            // field symbol
            return (symbol.kind === vscode_html_languageservice_1.SymbolKind.Field &&
                // isn't html document
                !symbol.name.startsWith('html') &&
                // isn't child of html
                symbol.containerName !== 'html' &&
                // isn't child of head
                symbol.containerName !== 'head' &&
                // end tag and start tag are on different lines
                symbol.location.range.start.line !== symbol.location.range.end.line &&
                // symbol can be labeled
                (symbol.name.indexOf('#') !== -1 || symbol.name.indexOf('.') !== -1));
        })
            .map((symbol) => {
            const hashCharIndex = symbol.name.indexOf('#');
            const dotCharIndex = symbol.name.indexOf('.');
            const hasIdAttr = hashCharIndex !== -1;
            const hasClassAttr = dotCharIndex !== -1;
            const separatorCharIndex = hasIdAttr ? hashCharIndex : dotCharIndex;
            const tagName = symbol.name.substring(0, separatorCharIndex);
            let id = '';
            let classes = '';
            if (hasIdAttr) {
                let idAttr;
                if (hasClassAttr) {
                    idAttr = symbol.name.substring(hashCharIndex + 1, dotCharIndex);
                }
                else {
                    idAttr = symbol.name.substring(hashCharIndex + 1);
                }
                idAttr = idAttr.trim();
                if (idAttr.length) {
                    id = `#${idAttr}`;
                }
            }
            if (hasClassAttr) {
                const classAttr = symbol.name
                    .substring(dotCharIndex + 1)
                    .trim()
                    .split('.')
                    .map((item) => item.trim())
                    .filter((item) => Boolean(item.length))
                    .join('.');
                if (classAttr.length) {
                    classes = `.${classAttr}`;
                }
            }
            const label = `${id}${classes}`;
            const endTagLength = tagName.length + 3; // 3 chars for `</>`
            const endTagLine = symbol.location.range.end.line;
            const endTagEndChar = symbol.location.range.end.character;
            const endTagStartChar = endTagEndChar >= endTagLength ? endTagEndChar - endTagLength : endTagEndChar;
            const labelPrefix = vscode.workspace.getConfiguration('htmlEndTagLabels').labelPrefix || '/';
            return {
                range: new vscode.Range(new vscode.Position(endTagLine, endTagStartChar), new vscode.Position(endTagLine, endTagEndChar)),
                renderOptions: { after: { contentText: `${labelPrefix}${label}` } },
            };
        })
            // Filter out decorations with empty label.
            .filter((item) => item.renderOptions.after.contentText.length > 1);
        return decorations;
    }
    getJSXDocumentDecorations(input, options) {
        const decorations = [];
        const plugins = ['jsx'];
        if (options?.typescript) {
            plugins.push('typescript');
        }
        const ast = babelParser.parse(input.getText(), {
            allowAwaitOutsideFunction: true,
            allowImportExportEverywhere: true,
            allowReturnOutsideFunction: true,
            allowSuperOutsideMethod: true,
            allowUndeclaredExports: true,
            attachComment: false,
            createParenthesizedExpressions: false,
            errorRecovery: true,
            ranges: true,
            strictMode: false,
            tokens: true,
            plugins,
        });
        (0, traverse_1.default)(ast, {
            JSXElement({ node }) {
                if (!node.selfClosing &&
                    node.closingElement &&
                    node.closingElement.loc &&
                    node.openingElement.loc &&
                    node.openingElement.name.type === 'JSXIdentifier' &&
                    node.openingElement.loc.end.line !== node.closingElement.loc.start.line) {
                    let id;
                    let className = [];
                    const idAttr = node.openingElement.attributes.find((attribute) => attribute.type === 'JSXAttribute' && attribute.name.name === 'id');
                    const classNameAttr = node.openingElement.attributes.find((attribute) => attribute.type === 'JSXAttribute' && attribute.name.name === 'className');
                    const idAttrVal = getJSXAttributeStringValue(idAttr);
                    const classNameAttrVal = getJSXAttributeStringValue(classNameAttr);
                    if (idAttrVal) {
                        id = idAttrVal.trim();
                        if (id.length < 1) {
                            id = undefined;
                        }
                    }
                    if (classNameAttrVal) {
                        className = classNameAttrVal
                            .trim()
                            .split(' ')
                            .map((item) => item.trim())
                            .filter((item) => item.length);
                    }
                    if (id || className.length) {
                        const labelPrefix = vscode.workspace.getConfiguration('htmlEndTagLabels').labelPrefix || '/';
                        decorations.push({
                            range: new vscode.Range(new vscode.Position(node.closingElement.loc.start.line - 1, node.closingElement.loc.start.column), new vscode.Position(node.closingElement.loc.end.line - 1, node.closingElement.loc.end.column)),
                            renderOptions: {
                                after: {
                                    contentText: labelPrefix + (id ? `#${id}` : '') + (className.length > 0 ? `.${className.join('.')}` : ''),
                                },
                            },
                        });
                    }
                }
            },
        });
        return decorations;
    }
    update() {
        if (!this.activeEditor) {
            return;
        }
        const languageId = this.activeEditor.document.languageId.toLowerCase();
        if (['javascript', 'javascriptreact'].includes(languageId)) {
            this.activeEditor.setDecorations(this.decorationType, this.getJSXDocumentDecorations(this.activeEditor.document));
        }
        else if (languageId === 'typescriptreact') {
            this.activeEditor.setDecorations(this.decorationType, this.getJSXDocumentDecorations(this.activeEditor.document, { typescript: true }));
        }
        else {
            this.activeEditor.setDecorations(this.decorationType, this.getHTMLDocumentDecorations(this.activeEditor.document));
        }
    }
    dispose() {
        this.activeEditor = undefined;
        this.subscriptions.forEach((s) => s.dispose());
    }
}
exports.default = ClosingLabelsDecorations;
//# sourceMappingURL=closing-labels-decorations.js.map