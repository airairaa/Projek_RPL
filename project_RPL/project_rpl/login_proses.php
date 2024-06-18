<?php
// Ambil informasi koneksi dari file konfigurasi
include 'config.php';

// Ambil data dari formulir login
$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk mencari pengguna berdasarkan email
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) == 1) {
    // Ambil data pengguna dari hasil query
    $user = mysqli_fetch_assoc($result);
    // Verifikasi kata sandi
    if(password_verify($password, $user['password'])) {
        // Autentikasi sukses, redirect ke dashboard atau halaman lain
        header("Location: dashboard.php");
        exit;
    } else {
        // Kata sandi salah
        echo "Password salah";
    }
} else {
    // Pengguna tidak ditemukan
    echo "Email tidak ditemukan";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
