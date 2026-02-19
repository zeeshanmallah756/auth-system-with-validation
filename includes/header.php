<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($is_admin) && $is_admin == true) {
    ?>
        <link rel="stylesheet" href="../assets/css/style.css">
    <?php
    } else {
    ?>
        <link rel="stylesheet" href="assets/css/style.css">
    <?php
    }
    $file = basename($_SERVER['PHP_SELF']) ?? NULL;

    if ($file === "register.php") {
    ?>
        <link rel="stylesheet" href="assets/css/register.css">
    <?php
    } elseif($file === "login.php") {
    ?>
        <link rel="stylesheet" href="assets/css/login.css">
    <?php
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
                    <a href="register.php">register</a>
                <?php
                } elseif ($file === "register.php") {
                ?>
                    <p><a href="login.php">Login</a></p>
                <?php
                }
                ?>
            </div>
        </div>
    </header>