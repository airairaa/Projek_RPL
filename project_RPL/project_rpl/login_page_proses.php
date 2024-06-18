<?php
session_start();

// Establish database connection
$query = new mysqli('localhost', 'root', '', 'projectrpl');

// Check for connection error
if ($query->connect_error) {
    die("Connection failed: " . $query->connect_error);
}

// Retrieve email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check if the credentials are correct
$data = mysqli_query($query, "SELECT * FROM account WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: login_page.php?pesan=gagal");
    exit();
}
?>
