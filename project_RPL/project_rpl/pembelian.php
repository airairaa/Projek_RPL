<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian1 Blue Wave</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .header, .footer {
            background-color: #e0e0e0;
            padding: 10px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
        .header a {
            text-decoration: none;
            color: #4682B4;
            font-weight: bold;
        }
        .container {
            text-align: center;
            padding: 30px 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 8px;
        }
        .logo h1 {
            color: #4682B4;
        }
        .steps {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .steps div {
            width: 30px;
            height: 30px;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 10px;
            font-weight: bold;
        }
        .steps div.active {
            background-color: #87CEEB;
        }
        .steps div:not(:last-child)::after {
            content: '';
            width: 40px;
            height: 2px;
            background-color: #000;
            position: relative;
            top: 14px;
            left: 15px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #4682B4;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .buttons button:hover {
            background-color: #5A9BD6;
        }
        .contact {
            text-align: center;
            padding: 20px 0;
        }
        .contact img {
            width: 40px;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="#">BLUE WAVE</a>
        <a href="#">PEMBELIAN</a>
    </div>
    <div class="container">
        <div class="logo">
            <h1>BLUE WAVE</h1>
        </div>
        <div class="steps">
            <div>1</div>
            <div class="active">2</div>
            <div>3</div>
        </div>
        <form>
            <div class="form-group">
                <label for="title">Judul Lagu</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="singer">Nama Penyanyi</label>
                <input type="text" id="singer" name="singer">
            </div>
            <div class="form-group">
                <label for="songwriter">Penulis Lagu</label>
                <input type="text" id="songwriter" name="songwriter">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre">
            </div>
            <div class="form-group">
                <label for="country">Negara Tujuan untuk Perilisan Lagu</label>
                <input type="text" id="country" name="country">
            </div>
            <div class="form-group">
                <label for="language">Bahasa Lagu</label>
                <input type="text" id="language" name="language">
            </div>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="lyrics">Lirik</label>
                <textarea id="lyrics" name="lyrics"></textarea>
            </div>
            <div class="form-group">
                <label for="platforms">Disebarkan di</label>
                <select id="platforms" name="platforms">
                    <option value="spotify">Spotify</option>
                    <option value="youtube">YouTube</option>
                    <option value="tiktok">TikTok</option>
                </select>
            </div>
            <div class="form-group">
                <label for="release_date">Tanggal Release</label>
                <input type="date" id="release_date" name="release_date">
            </div>
            <div class="form-group">
                <label for="term_privacy">Term & Privacy</label>
                <input type="checkbox" id="term_privacy" name="term_privacy">
                <label for="term_privacy">Saya setuju dengan syarat dan ketentuan yang berlaku.</label>
            </div>
            <div class="buttons">
                <a href="release.php"><button type="button">Back</button></a>
                <a href="pembayaran.php"><button type="button">Next</button></a>
            </div>
        </form>
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
