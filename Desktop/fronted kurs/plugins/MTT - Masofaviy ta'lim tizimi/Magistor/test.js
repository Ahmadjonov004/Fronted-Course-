"use strict";

const quizData = [
    {
        question: "9+1_____ = ?",
        a: "The <head> section",
        b: "The <body> section",
        c: "10",
        d: "none of the above",
        correct: "c"
    },
    {
        question: "2+3 = ?",
        a: "Java",
        b: "C",
        c: "Python",
        d: "5",
        correct: "d"
    },
    {
        question: "12+8 = ?",
        a: "Central Style Sheets",
        b: "20",
        c: "Cascading Simple Sheets",
        d: "Cars SUVs Sailboats",
        correct: "b"
    },
    {
        question: "2+8 = ?",
        a: "10",
        b: "Hypertext Markdown Language",
        c: "Hyperloop Machine Language",
        d: "Helicopters Terminals Motorboats Lamborginis",
        correct: "a"
    },
    {
        question: "12-8 = ?",
        a: "1996",
        b: "4",
        c: "1994",
        d: "none of the above",
        correct: "b"
    }
];

const quiz = document.querySelector(".quiz-body");
const answerEl = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const footerEl = document.querySelector(".quiz-footer");
const quizDetailEl = document.querySelector(".quiz-details");
const btnSubmit = document.getElementById("btn");

let currentQuiz = 0;
let score = 0;
const passPercentage = 67;

loadQuiz();

function loadQuiz() {
    deselectAnswers();
    const currentQuizData = quizData[currentQuiz];
    questionEl.innerText = currentQuizData.question;
    Object.keys(currentQuizData).forEach(key => {
        if (key !== 'question' && key !== 'correct') {
            document.getElementById(`${key}_text`).innerText = currentQuizData[key];
        }
    });
    quizDetailEl.innerHTML = `<p>${currentQuiz + 1} of ${quizData.length}</p>`;
}

function deselectAnswers() {
    answerEl.forEach(answer => {
        answer.checked = false;
    });
}

function getSelected() {
    let answer;
    answerEl.forEach(answerEls => {
        if (answerEls.checked) {
            answer = answerEls.id;
        }
    });
    return answer;
}

btnSubmit.addEventListener("click", function () {
    const answers = getSelected();

    if (answers) {
        if (answers === quizData[currentQuiz].correct) {
            score++;
        }
        nextQuestion();
    }
});

function nextQuestion() {
    currentQuiz++;

    if (currentQuiz < quizData.length) {
        loadQuiz();
    } else {
        const percentage = (score / quizData.length) * 100;
        let resultMessage = `<h2>Siz ${score}/${quizData.length} savoldan to'g'ri javob berdingiz</h2>`;
        if (percentage >= passPercentage) {
            resultMessage += `<button type="button" onclick="window.location.href = 'kurs1.html'">Yangi o'yin ochilsin</button>`;
        } else {
            resultMessage += `<p>Siz sinovdan o'tmadingiz. Iltimos, yana bir bor urinib ko'ring.</p>`;
            resultMessage += `<button type="button" onclick="location.reload()"   ">Qayta urinib ko'ring</button>`;
        }
        quiz.innerHTML = resultMessage;
        footerEl.style.display = "none";
    }
}

function restartQuiz() {
    currentQuiz = 0;
    score = 0;
    loadQuiz();
}
