<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $file_name = $_FILES['file']['name'];
  $tmp_name = $_FILES['file']['tmp_name'];
  $file_up_name = time() . $file_name;
  move_uploaded_file($tmp_name, "uploads/" . $file_up_name);
  
  // Faylni qayta ko'rish uchun URL
  $file_url = "uploads/" . $file_up_name;

  // Fayl yuklandi, u yuklandi manzilini chiqaring
  echo $file_url;
}
?>
