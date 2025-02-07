<?php
// Ma'lumotlarni olish
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Ma'lumotlar bazasiga ulanish
$servername = "localhost";
$username = "username"; // O'zgartiring
$password = "password"; // O'zgartiring
$dbname = "dbname"; // O'zgartiring

// MySQL ga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulashishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik yuz berdi: " . $conn->connect_error);
}

// Ma'lumotlarni bazaga saqlash
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Ma'lumotlar bazasiga muvaffaqiyatli kiritildi";
} else {
    echo "Xatolik: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
