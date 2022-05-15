<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
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
        <div class="form-box2">
            <div class="form-content">
                <?php
                if (isset($_SESSION["error-message2"]) && $_SESSION["error-message2"]) {
                    echo "<p class='error-message'>" . $_SESSION["error-message2"] . "</p>";
                }
                unset($_SESSION["error-message2"]);
                ?>
                <h2 class="form-title">Авторизация</h2>
                <form action="../server/signin.php" method="post" enctype="multipart/form-data" class="signup">
                    <input type="text" placeholder="Введите логин" name="login" class="field">
                    <input type="password" placeholder="Введите пароль" name="password" class="field">
                    <input type="submit" value="Войти" name="submit" class="submit">
                </form>
                <p class="account">У вас нет аккаутна? <a href="registration.php" class="already">Зарегистрируйтесь</a></p>

            </div>
        </div>
        <?php include_once "../templates/footer.php" ?>
    </div>
</header>
</body>
</html>