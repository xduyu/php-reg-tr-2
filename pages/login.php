<?php
require '../config.php';
require '../php/pattern.php';
$aerr = [];
if ($_SERVER['SERVER_METHOD'] = 'POST' && empty($arrErr)) {
    $useremail = trim($_POST['useremail']);
    $userpassword = $_POST['userpassword'];
    // проверка email
    if (empty($useremail)) {
        $arrErr[] = "Email обязательное для ввода";
    } elseif (!ValidationPatterns::isValidEmail($useremail)) {
        $arrErr[] = "Ошибка в Email";
    }
    // проверка пароль
    if (empty($userpassword)) {
        $arrErr[] = "password обязательное для ввода";
    } elseif (!ValidationPatterns::isValidStrongPassword($userpassword)) {
        $arrErr[] = "Ошибка в password";
    }
    if (empty($aerr)) {
        try {
            $q = $pdo->prepare()
        } catch (PDOException $pdoerror) {
            echo $pdoerror;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <h1>Auth</h1>
    <?php if (isset($_GET['success'])): ?>
        <div class="success">Регистрация успешна</div>
    <?php endif ?>
    <form action="" method="post">
        <div class="form-group">
            <span>Email:*</span>
            <input type="email" id="useremail" name="useremail" required placeholder="Введите вашу почту">
        </div>
        <div class="form-group">
            <span>Пароль:*</span>
            <input type="password" id="userpassword" name="userpassword" required placeholder="Введите пароль">
        </div>
        <div class="password-visit">
            <label><input type="checkbox" id="showPass"><span>Показать пароль</span></label>
        </div>

        <button>Войти</button>
    </form>
    <div class="reg__link">
        <div class="">Don't Have account? <a href="registration.php">registration</a></div>
    </div>
    <script src="../scripts/show_password.js"></script>
</body>

</html>