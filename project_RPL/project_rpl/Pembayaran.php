<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian1 Blue Wave</title>
    <link rel="stylesheet" href="pembayaran.css">
   
       
  
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
            <div>2</div>
            <div class="active">3</div>
            </div>
        <form action="process_payment.php" method="POST">
            <div class="form-group">
                <label for="card_number">Nomor Kartu</label>
                <input type="text" id="card_number" name="card_number">
            </div>
            <div class="form-group">
                <label for="card_name">Nama Pemegang Kartu</label>
                <input type="text" id="card_name" name="card_name">
            </div>
            <div class="form-group">
                <label for="expiry_date">Tanggal Kadaluarsa</label>
                <input type="text" id="expiry_date" name="expiry_date">
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
            </div>
            <div class="form-group">
                <label for="billing_address">Alamat Penagihan</label>
                <textarea id="billing_address" name="billing_address"></textarea>
            </div>
            <div class="buttons">
                <a href="pembelian.php" class="button-link"><button type="button">Kembali</button></a>
                <button type="submit">Bayar</button>
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="contact">
            <span>Hubungi Kami :</span>
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png" alt="Gmail">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        </div>
    </footer>
</body>
</html>
