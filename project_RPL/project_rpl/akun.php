<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setting Blue Wave</title>
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
        .footer {
            background-color: #e0e0e0;
            padding: 10px;
            text-align: center;
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
        <a href="#">PROFILE SETTING</a>
    </div>
    <div class="container">
        <div class="logo">
            <h1>BLUE WAVE</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password">
            </div>
            <div class="buttons">
                <button type="submit">Save Changes</button>
                <button type="reset">Reset</button>
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
