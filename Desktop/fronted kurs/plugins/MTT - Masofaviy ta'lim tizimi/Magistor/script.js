// script.js
document.getElementById('studentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    var studentData = {};
    formData.forEach(function(value, key) {
        studentData[key] = value;
    });
    console.log(studentData);
    // Ma'lumotlar serverga yuborilishi mumkin
});

document.getElementById('materialForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    var materialData = {};
    formData.forEach(function(value, key) {
        materialData[key] = value;
    });
    console.log(materialData);
    // Materiallar serverga yuborilishi mumkin
});// Amaliy ishlar va baho tizimini qo'shamiz
var gradesData = [];

function addGrade(studentName, work, grade) {
    gradesData.push({ studentName: studentName, work: work, grade: grade });
    renderGrades();
}

function renderGrades() {
    var tableBody = document.querySelector('#gradesTable tbody');
    tableBody.innerHTML = '';
    gradesData.forEach(function(item) {
        var row = document.createElement('tr');
        row.innerHTML = '<td>' + item.studentName + '</td><td>' + item.work + '</td><td>' + item.grade + '</td>';
        tableBody.appendChild(row);
    });
}

// Talabalarning baho kiritish uchun
document.getElementById('studentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    var studentData = {};
    formData.forEach(function(value, key) {
        studentData[key] = value;
    });
    addGrade(studentData.firstName + ' ' + studentData.lastName, ' ', '-'); // Ma'lumotlarni baho kiritish bo'limiga o'tkazamiz
    this.reset(); // Formani tozalash
});
document.addEventListener('DOMContentLoaded', function() {
    var studentForm = document.getElementById('studentForm');

    studentForm.addEventListener('submit', function(event) {
        event.preventDefault();

        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var birthDate = document.getElementById('birthDate').value;

        // Ro'yxatdan o'tkanlar bo'limiga kiritish
        var activityData = document.querySelector('.activity-data');
        var newRow = document.createElement('div');
        newRow.classList.add('data');
        newRow.innerHTML = `
            <div class="data names">
                <span class="data-title">Ismi </span>
                <span class="data-list">${firstName} ${lastName}</span>
            </div>
            <div class="data email">
                <span class="data-title">Email</span>
                <span class="data-list">${username}</span>
            </div>
            <div class="data joined">
                <span class="data-title">Tug'ilgan kun</span>
                <span class="data-list">${birthDate}</span>
            </div>
            <div class="data type">
                <span class="data-title">Type</span>
                <span class="data-list">New</span>
            </div>
            <div class="data status">
                <span class="data-title">Status</span>
                <span class="data-list">Liked</span>
            </div>
        `;
        activityData.appendChild(newRow);

        // Formani tozalash
        studentForm.reset();
    });
});
