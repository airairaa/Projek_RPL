<?php
// Pemrosesan pembayaran berhasil

// Validasi apakah data pembayaran ada dan lengkap
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["card_number"]) && isset($_POST["card_name"]) && isset($_POST["expiry_date"]) && isset($_POST["cvv"]) && isset($_POST["billing_address"])) {
    // Lakukan validasi tambahan jika diperlukan

    // Proses pembayaran berhasil
    echo "Pembayaran berhasil! Terima kasih telah melakukan pembelian.";
} else {
    // Data pembayaran tidak lengkap
    echo "Gagal memproses pembayaran. Mohon pastikan semua informasi pembayaran diisi dengan benar.";
}
?>

<?php
// Pemrosesan pembayaran gagal

// Proses pembayaran gagal
echo "Gagal memproses pembayaran. Silakan coba lagi atau hubungi layanan pelanggan kami untuk bantuan lebih lanjut.";
?>
