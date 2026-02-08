<?php
require('./config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ./pages/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="" class="web_shop">Web Shop</a>
            <ul class="nav_list"></ul>
        </nav>
    </header>
</body>

</html>