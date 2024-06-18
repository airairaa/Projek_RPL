<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rilisan Blue Wave</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tambahkan link ke file CSS eksternal -->
</head>
<body>
    <div class="header">
        <a href="#">BLUE WAVE</a>
        <a href="#">RILISAN</a> <!-- Ubah link ke halaman rilisan -->
    </div>
    <div class="container">
        <div class="logo">
            <h1>BLUE WAVE</h1>
        </div>
        <div class="rilisan">
            <?php foreach ($rilisan as $data): ?>
            <div class="rilisan-item">
                <h2><?php echo $data['judul']; ?></h2>
                <p><?php echo $data['artis']; ?></p>
                <p><?php echo $data['genre']; ?></p>
                <p><?php echo $data['tanggal_rilis']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="footer">
        <div class="contact">
            <span>Hubungi Kami :</span>
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png" alt="Gmail">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        </div>
    </div>
</body>
</html>
