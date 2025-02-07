<?php
// Admin panelidan fayl yuklash
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "Fayl muvaffaqiyatli yuklandi.";
    } else {
        echo "Xatolik faylni yuklashda.";
    }
}

// Talabalar ro'yxatini olish
$sql = "SELECT id, name, email FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Ism: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Ma'lumot topilmadi";
}
?>
