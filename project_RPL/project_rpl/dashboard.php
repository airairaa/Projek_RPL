<?php
session_start();
if (empty($_SESSION['email'])) {
    header("Location: login_page.php?pesan=belum_login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <!-- Logo Section -->
    <div class="grupLogo">
        <div class="logo">
            <img src="./assets/Logo.png" alt="Logo">
            <div class="titleLogo">BLUE WAVE</div>
        </div>
        <div class="titleDashboard">DASHBOARD</div>
    </div>
    <hr>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="menu">
                <li><a href="akun.php">Account</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="beranda_home.php">Site home</a></li>
                <li><a href="release.php">Release</a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="store.php">Store</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="Frame49" style="display: flex; flex-direction: column; align-items: center;">
                <div class="Frame48">
                    <div class="Group50">
                        <div class="Rectangle18"></div>
                        <div class="Group49">
                            <div class="Rectangle34"></div>
                            <form action="search.php" method="GET" class="Group48">
                                <input type="text" name="query" class="FindYourSongs" placeholder="Find Your Songs" />
                                <button type="submit">Search</button>
                            </form>
                        </div>
                        <div class="WhatSongDoYouWantToReleaseToday">
                            What song do you want to release today?
                        </div>
                    </div>
                    <div class="BitcoinIconsSearchOutline"></div>
                    <div class="YourSong">Your Song</div>
                    <img class="Rectangle21" src="Rectangle 21.png" />
                    <img class="Rectangle35" src="Rectangle 35.png" />
                    <div class="Rectangle36"></div>
                    <div class="SimpleLineIconsPlus">
                        <div class="Vector"></div>
                    </div>
                    <div class="BlueDayRelease">Blue Day - Release</div>
                    <div class="FreedomPreRelease">Freedom - Pre Release</div>
                    <div class="TambahLagu">Tambah Lagu</div>
                    <div class="Rectangle30"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
