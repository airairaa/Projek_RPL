<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rilis Blue Wave</title>
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
            padding: 50px 20px;
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
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .buttons button {
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #4682B4;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .buttons button:hover {
            background-color: #5A9BD6;
        }
        .footer {
            margin-top: 155px;
            margin-bottom: 0px;
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
        <a href="#">RILIS</a>
    </div>
    <div class="container">
        <div class="logo">
            <h1>BLUE WAVE</h1>
        </div>
        <div class="steps">
            <div class="active">1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
        </div>
        <div class="buttons">
            <a href="pembelian.php"><button>Release Song</button></a>
           
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
