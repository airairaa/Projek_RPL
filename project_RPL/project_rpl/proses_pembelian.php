<?php
// Ambil data dari form
$title = $_POST['title'];
$singer = $_POST['singer'];
$writer = $_POST['writer'];
$genre = $_POST['genre'];
$country = $_POST['country'];
$language = $_POST['language'];
$name = $_POST['name'];
$lyrics = $_POST['lyrics'];

// Lakukan sesuatu dengan data, misalnya menyimpannya di database
// (contoh koneksi dan query database menggunakan MySQLi)

// Koneksi ke database
$conn = new mysqli('localhost', 'username', 'password', 'database');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menyimpan data
$sql = "INSERT INTO songs (title, singer, writer, genre, country, language, name, lyrics) 
        VALUES ('$title', '$singer', '$writer', '$genre', '$country', '$language', '$name', '$lyrics')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
    // Redirect ke halaman berikutnya
    header("Location: pembelian2.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
