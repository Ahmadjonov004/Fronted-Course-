<?php
$servername = "localhost";
$username = "username"; // MySQL foydalanuvchi nomi
$password = "password"; // MySQL foydalanuvchi paroli
$dbname = "university";

// Ulashish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulashishni tekshirish
if ($conn->connect_error) {
    die("Xatolik: Ulashish muvaffaqiyatsiz: " . $conn->connect_error);
}

// Ma'lumotlar bazasiga so'rov yuborish
$sql = "SELECT id, name, email FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ma'lumotlar bazasidan har bir qatorni olish
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Ism: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Ma'lumot topilmadi";
}
$conn->close();
?>
