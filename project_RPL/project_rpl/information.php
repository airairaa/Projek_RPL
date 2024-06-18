<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLUE WAVE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>BLUE WAVE</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="information.php">Information</a></li>
                    <li><a href="store.php">Store</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?php
                $infos = [
                    [
                        "title" => "Cara Membuat Akun dalam BLUE WAVE",
                        "content" => "Halo Kawan Blue Wave, jika kamu ingin merilis lagu buatanmu, kamu harus membuat akun Blue Wave terlebih dahulu supaya memudahkanmu dalam memantau beranda artis-mu sendiri. Berikut langkah-langkahnya:"
                    ],
                    [
                        "title" => "Cara Membayar di Aplikasi BLUE WAVE",
                        "content" => "Untuk membeli sebuah produk, pasti akan ada proses transaksi yang terjadi. Nah, bagaimana caranya sih membayar dalam aplikasi Blue Wave??? Berikut tata caranya ya Kawan!!!"
                    ],
                    [
                        "title" => "Anda Bingung Cara Mengupload Lagu? Begini Caranya",
                        "content" => "Begini nih tata cara mengupload sebuah lagu :D"
                    ]
                ];

                foreach ($infos as $info) {
                    echo '<section>
                            <div class="info-box">
                                <h2>' . $info["title"] . '</h2>
                                <p>' . $info["content"] . '</p>
                            </div>
                          </section>';
                }
            ?>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">&raquo;</a>
            </div>
        </main>

        <footer>
            <div class="contact">
                <p>Hubungi Kami:</p>
                <a href="#"><img src="whatsapp.png" alt="WhatsApp"></a>
                <a href="#"><img src="instagram.png" alt="Instagram"></a>
                <a href="#"><img src="gmail.png" alt="Gmail"></a>
                <a href="#"><img src="facebook.png" alt="Facebook"></a>
            </div>
        </footer>
    </div>
</body>
</html>
