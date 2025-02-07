def process_txt_file(file_path):
    with open(file_path, 'r', encoding='utf-8') as file:
        lines = file.readlines()
    question_taken = False
    questions = []
    answers = []
    current_question = ""
    current_answer = ""

    for line in lines:
        line = line.strip()

        if line.startswith("+++++"):
            question_taken = False
            if current_question and current_answer:
                questions.append(current_question)
                answers.append(current_answer)

            current_question = ""
            current_answer = ""
        elif line.startswith("#"):
            current_answer = line.replace("#", "").strip()
        elif line and not question_taken:
            current_question += line
            question_taken = True

    # Append the last question and answer
    if current_question and current_answer:
        questions.append(current_question)
        answers.append(current_answer)

    return questions, answers


def process_docx_file(file_path):
    from docx import Document

    doc = Document(file_path)
    questions = []
    answers = []
    current_question = ""
    current_answer = ""

    for para in doc.paragraphs:
        text = para.text.strip()
        question_taken = False
        if text.startswith("++++"):
           pass
        elif text.startswith("===="):
            pass
        elif text.startswith("#"):
            current_answer = text.replace("#", "").strip()
        elif text and question_taken==False:
            current_question += text
            question_taken = True

    # Append the last question and answer
    if current_question and current_answer:
        questions.append(current_question)
        answers.append(current_answer)

    return questions, answers


def process_xlsx_file(file_path):
    import openpyxl

    workbook = openpyxl.load_workbook(file_path)
    sheet = workbook.active

    questions = []
    answers = []
    for row in sheet.iter_rows(values_only=True):
        if row:
            question, answer = row[0], row[1]
            if question and answer:
                questions.append(question)
                answers.append(answer)

    return questions, answers