<?php
// File tempat menyimpan data
$file = "contact_data.txt";

// Ambil data dari form
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

// Format data yang disimpan
$saveText  = "=============================\n";
$saveText .= "Name: $name\n";
$saveText .= "Email: $email\n";
$saveText .= "Message: $message\n";
$saveText .= "Date: " . date("Y-m-d H:i:s") . "\n";
$saveText .= "=============================\n\n";

// Simpan ke file .txt
file_put_contents($file, $saveText, FILE_APPEND);

// Setelah selesai, kembali ke halaman utama
echo "<h2>Thank you! Your message has been recorded.</h2>";
echo "<a href='index.html'>Back to Website</a>";
?>