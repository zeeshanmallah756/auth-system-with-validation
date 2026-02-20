<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    if (function_exists('print_style')) {
        print_style();
    }
    ?>
    <title>Document</title>
</head>

<body>
    <header id="header">
        <div id="navbar">
            <div id="logo">
                <p>Auth System</p>
            </div>
            <div id="navlinks">
                <?php
                if ($file === "login.php") {
                ?>
                    <a href="register.php">Register</a>
                <?php
                } else{
                ?>
                    <a href="login.php">Login</a>
                <?php
                }
                ?>
            </div>
        </div>
    </header>