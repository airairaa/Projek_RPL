<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="signup_page.css">

</head>

<body>
    <!-- Container untuk layout grid -->
    <div class="grid-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Logo dan judul -->
            <div class="grupLogo">
                <div class="logo">
                    <img src="./assets/Logo.png" alt="Logo">
                    <div class="titleLogo">BLUE WAVE</div>
                </div>
                <div class="titleLogin">SIGN UP</div>
            </div>
            <hr>
            <!-- Navbar -->
            <nav class="grupNavbar">
                <ul>
                    <li><a href="beranda_home.php">Home</a></li>
                    <li><a href="#">Information</a></li>
                    <li><a href="#">Store</a></li>
                </ul>
            </nav>
        </div>

        <!-- Konten utama -->
        <div class="main-content">
            <div class="container">
                <div class="imageContainer">
                    <img class="albumImage" src="assets/GambarPageSignUp.png" alt="Center">
                </div>
                <div class="formContainer">
                    <form method="POST" action="backendsignup.php">
                        <div class="formGroup">
                            <input type="email" id="email" name="email" class="inputField" placeholder="Email Address"
                                required>
                        </div>

                        <div class="formGroup">
                            <input type="text" id="firstName" name="firstName" class="inputField"
                                placeholder="First Name" required>
                        </div>

                        <div class="formGroup">
                            <input type="text" id="lastName" name="lastName" class="inputField" placeholder="Last Name"
                                required>
                        </div>

                        <div class="formGroup">
                            <input type="text" id="country" name="country" class="inputField" placeholder="Country"
                                required>
                        </div>

                        <div class="formGroup">
                            <input type="password" id="password" name="password" class="inputField"
                                placeholder="Password" required>
                        </div>

                        <div class="formGroup">
                            <input type="password" id="confirmPassword" name="confirmPassword" class="inputField"
                                placeholder="Confirm Password" required>
                        </div>

                        <div class="termsPrivacyPolicy">
                            <input type="checkbox" id="terms" name="terms" class="checkbox" required>
                            <label for="terms" class="termsLabel">Terms & Privacy Policy</label>
                        </div>
                        <button type="submit" class="submitButton">Sign Up</button>
                    </form>
                </div>
                <br>
                <div class="loginRedirect">
                    <span>Sudah memiliki akun? Silakan klik </span><a href="login_page.php">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>