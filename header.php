<?php require_once ('./config.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="./scripts/script.js"></script>
    <link rel="icon" type="image/x-icon" href="./assets/favicon-32x32.png">
    <link rel="stylesheet" href="./css/<?php echo $stylesheet; ?>">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/footer.css">

    <title><?php echo $title; ?></title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
    }
</style>
<body>
<nav id="navbar">
    <div class="nav-container">
        <a href="index.php"> <img src="./assets/logo.webp" alt=""></a>
        <ul>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="lessons.php">Lessons</a></li>
            <li><a href="team.php">Meet The Team</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<nav id="mobile-nav">
    <div class="nav-container">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="logo">
            <img src="./assets/logo.webp" alt="">
        </div>
    </div>
</nav>
<div class="menu">
    <div class="menu-items">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="lessons.php">Lessons</a></li>
            <li><a href="team.php">Meet The Team</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>