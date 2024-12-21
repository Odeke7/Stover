<?php
// header.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce Website</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/main.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"><a href="index.php">E-Shop</a></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="profile.php">Profile</a></li>
                <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') : ?>
                    <li><a href="admin.php">Admin</a></li>
                <?php endif; ?>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
