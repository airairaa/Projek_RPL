<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: #F5F5F5;
        }
        .store-container {
            width: 1302px;
            height: 1439px;
            position: relative;
            background: #F5F5F5;
        }
        .header, .nav-links, .merchandise-section {
            position: absolute;
        }
        .header {
            top: 39px;
            left: 116px;
            font-size: 41px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 700;
            color: #4682B4;
        }
        .nav-links {
            top: 133px;
            left: 953px;
        }
        .nav-links div {
            font-size: 22px;
            font-family: 'Khula', sans-serif;
            font-weight: 400;
            color: black;
        }
        .merchandise-section {
            top: 168px;
            left: 34px;
        }
        .merchandise-item {
            position: relative;
            font-size: 16px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 500;
            color: black;
        }
        .title {
            font-size: 32px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 500;
            color: black;
        }
        .divider {
            width: 1239.42px;
            height: 1.51px;
            top: 110px;
            left: 19px;
            position: absolute;
            border: 1px black solid;
        }
        .circle {
            background: #4682B4;
            border-radius: 9999px;
        }
    </style>
</head>
<body>
<div class="store-container">
    <div class="header">BLUE WAVE</div>
    <div class="nav-links d-flex justify-content-between">
        <div> Home </div> 
        <div> Information </div>
        <div> Store </div>
    </div>
    <div class="divider"></div>
    <div class="merchandise-section">
        <div class="title">Voucher Rilis Single</div>
        <div class="d-flex">
            <div class="merchandise-item">
                <img src="assets/Rectangle 4.png" alt="Voucher 50K" style="width: 205px; height: 210px;">
                <div>Blue Wave Voucher Rp. 50.000</div>
            </div>
            <div class="merchandise-item">
                <img src="assets/Rectangle 4.png" alt="Voucher 75K" style="width: 205px; height: 210px;">
                <div>Blue Wave Voucher Rp. 75.000</div>
            </div>
        </div>
        <div class="title" style="top: 317px;">Voucher Rilis Album</div>
        <div class="d-flex">
            <div class="merchandise-item">
                <img src="assets/Rectangle 4 (1).png" alt="Album Voucher 199K" style="width: 205px; height: 210px;">
                <div>Blue Wave Album Voucher<br>Rp. 199.000</div>
            </div>
            <div class="merchandise-item">
                <img src="Rectangle 4 (1).png" alt="Album Voucher 199K" style="width: 205px; height: 210px;">
                <div>Blue Wave Album Voucher<br>Rp. 199.000</div>
            </div>
        </div>
        <div class="title" style="top: 915px;">Merchandise</div>
        <div class="d-flex flex-wrap">
            <div class="merchandise-item">
                <img src="https://via.placeholder.com/210x210" alt="T-shirt Light" style="width: 210px; height: 210px;">
                <div>T-shirt Blue Wave Light<br>Rp. 160.000</div>
            </div>
            <div class="merchandise-item">
                <img src="https://via.placeholder.com/210x210" alt="T-shirt x Tiktok" style="width: 210px; height: 210px;">
                <div>T-shirt Blue Wave x Tiktok<br>Rp. 200.000</div>
            </div>
            <div class="merchandise-item">
                <img src="https://via.placeholder.com/210x210" alt="T-shirt Dark" style="width: 210px; height: 210px;">
                <div>T-shirt Blue Wave Dark<br>Rp. 170.000</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
