<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обо мне</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/about.css">
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
        <div class="header-content-about">
            <img src="../images/main/foto.jpg" alt="MyFoto" class="about-image">
            <div class="text-about">
                <h1 class="text-title-about">Обо мне</h1>
                <p>
                    Меня зовут Нурмухаммад, и мне 19 лет. Я родился 21 февраля<br>
                    2003 года в городе Худжанд в Таджикистане. В 2010 году пошел в<br>
                    превый класс в частную школу НОУ «Гимназия имени И. В. Гёте».<br>
                    Там я отучился 2 года и потом перешел в обчычную школу СОУ №19.<br>
                    В 2021 году закончив школу я поступил в УлГТУ на Факультет<br>
                    информационных систем и технологии. Во время внеучебной<br>
                    деятельности я люблю общаться с друзьями, смотреть фильмы<br>
                    и развивать свой кругозор.
                </p>
            </div>
        </div>
        <?php include_once "../templates/footer.php" ?>
    </div>
</header>
</body>
</html>