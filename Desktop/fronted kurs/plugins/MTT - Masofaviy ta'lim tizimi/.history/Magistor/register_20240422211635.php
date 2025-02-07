<?php
// MySQL ga ulanish
$servername = "localhost"; // server nomi (masalan: localhost)
$username = "username"; // MySQL foydalanuvchi nomi
$password = "password"; // MySQL paroli
$dbname = "dbname"; // ishlatilayotgan ma'lumotlar bazasi nomi

// MySQL ga ulanishni ochildik
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulashishni tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik yuz berdi: " . $conn->connect_error);
}

// Ma'lumotlarni olish
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// SQL so'rovni yaratish va ijro etish
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Ma'lumotlar bazasiga muvaffaqiyatli kiritildi";
} else {
    echo "Xatolik: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
