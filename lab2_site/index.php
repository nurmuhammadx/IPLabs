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
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacific&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <?php include_once "templates/header.php" ?>
        <div class="header-content">
            <div class="text">
                <h1 class="text-title">Добро пажаловать</h1>
                <p>
                    Вы попали на домашнюю страницу персонального сайта <br>студента
                    Ульяновского государственного технического<br> университета
                    группы ИВТАСбд-12 Худойдотова Нурмухаммада.
                </p>
            </div>
            <img src="images/main/foto.jpg" alt="MyFoto" class="my-image">
        </div>
        <?php include_once "templates/footer.php" ?>
    </div>
</header>
</body>
</html>