<?php
// Admin panelidan talabalar uchun login va parolni qabul qilish
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["student_username"]) && isset($_POST["student_password"])) {
    $student_username = $_POST["student_username"]; // Talaba login
    $student_password = $_POST["student_password"]; // Talaba parol

    // Ma'lumotlar bazasiga ulanish
    include 'db_connection.php';

    // Talaba login va parolini ma'lumotlar bazasiga saqlash
    $hashed_password = password_hash($student_password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO students (username, password) VALUES ('$student_username', '$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Talaba uchun login va parol saqlandi.";
    } else {
        echo "Xatolik: " . $conn->error;
    }

    $conn->close();
}
?>
