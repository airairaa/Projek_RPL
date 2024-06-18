<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_page.css">
</head>
<body>
    <!-- Logo Section -->
    <div class="grupLogo">
        <div class="logo">
            <img src="./assets/Logo.png" alt="Logo">
            <div class="titleLogo">BLUE WAVE</div>
        </div>
        <div class="titleLogin">LOGIN</div>
    </div>
    <hr>
    
    <!-- Navbar -->
    <nav class="grupNavbar">
        <ul>
            <li><a href="beranda_home.php">Home</a></li>
            <li><a href="information.php">Information</a></li>
            <li><a href="store.php">Store</a></li>
        </ul>
    </nav>
    
    <!-- Login Form -->
    <div class="container">
        <img class="albumImage" src="assets/GambarPageLogin.png" alt="center">
        <div class="formContainer">
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
        </div>
    </div>
</body>
</html>
