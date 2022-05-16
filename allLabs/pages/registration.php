<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/sign.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacific&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../scripts/main.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <?php include_once "../templates/header.php" ?>
        <div class="form-box">
            <div class="form-content">
                <?php
                if (isset($_SESSION["error-message"]) && $_SESSION["error-message"]) {
                    echo "<p class='error-message'>" . $_SESSION["error-message"] . "</p>";
                }
                unset($_SESSION["error-message"]);
                ?>
                <h2 class="form-title">Регистрация</h2>
                <form action="../server/signup.php" method="post" enctype="multipart/form-data" class="signup">
                    <input type="text" placeholder="Введите имя" name="username" class="field" value="<?php if (isset($username)) {
                                                                                                       echo $username;} ?>">
                    <input type="text" placeholder="Введите логин" name="login" class="field" value="<?php if (isset($login)) {
                                                                                                       echo $login;} ?>">
                    <input type="password" placeholder="Введите пароль" name="password" class="field">
                    <input type="password" placeholder="Введите пароль повторно" name="password_conf" class="field">
                    <input type="submit" value="Зарегистрироваться" name="submit" class="submit">
                </form>
                <p class="account">Есть аккаутн? <a href="authorization.php" class="already">Войти</a></p>
            </div>
        </div>
        <?php include_once "../templates/footer.php" ?>
    </div>
</header>
</body>
</html>