<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login_page_proses.php" method="POST">
    <div class="formGroup">
        <label for="email" class="formLabel">Your Email</label>
        <input type="email" id="email" name="email" class="inputField" placeholder="Email Address" required>
    </div>

    <div class="formGroup">
        <label for="password" class="formLabel">Password</label>
        <input type="password" id="password" name="password" class="inputField" placeholder="Password" required>
    </div>

    <div class="forgotPassword">
        <a href="#">Forgot Password?</a>
    </div>

    <button type="submit" class="LoginButton">Login</button>
</form>

</body>
</html>