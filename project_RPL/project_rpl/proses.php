<?php
// Pastikan hanya data yang dikirimkan melalui metode POST yang diproses
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $title = $_POST['title'];
    $singer = $_POST['singer'];
    $songwriter = $_POST['songwriter'];
    $genre = $_POST['genre'];
    $country = $_POST['country'];
    $language = $_POST['language'];
    $platforms = $_POST['platforms'];
    $release_date = $_POST['release_date'];
    $term_privacy = $_POST['term_privacy'];

    // Lakukan operasi lainnya, seperti menyimpan data ke database atau melakukan tindakan lainnya sesuai kebutuhan Anda
    // ...

    // Setelah selesai memproses data, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan sukses
    // Contoh: mengarahkan pengguna kembali ke halaman sebelumnya
    header('Location: pembelian1.php');
    exit;
}
?>
