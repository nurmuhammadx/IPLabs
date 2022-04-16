<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/mainStyle.css">
    <link rel="stylesheet" href="styles/galleryStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacific&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="nav">
            <a href="#">
                <img src="images/NX.png" alt="Logo" class="logo">
            </a>
            <ul class="menu">
                <li>
                    <a href="#">Главная</a>
                </li>
                <li>
                    <a href="#">Мои работы</a>
                </li>
                <li>
                    <a href="index.php" style="border-bottom: 3px solid red;">Галерея</a>
                </li>
                <li>
                    <a href="#">О себе</a>
                </li>
                <li>
                    <a href="#">Контакты</a>
                </li>
            </ul>
            <ul class="sign-up">
                <li>
                    <a href="#">Регистрация</a>
                </li>
                <li><span>|</span></li>
                <li>
                    <a href="#">Войти</a>
                </li>
                <li>
                    <button class="menu-open">
                        <img src="images/menu.svg" alt="open-menu">
                    </button>
                </li>
            </ul>
        </div>
        <div class="header-content-gallery">
            <h1 class="text-title-gallery">Галерея</h1>
            <div class="flex-wrapper">
                <div class="slider-wrapper">
                    <div class="slide fade active">
                        <img src="images/gallery/1.jpg" alt="">
                    </div>
                    <div class="slide fade">
                        <img src="images/gallery/2.jpg" alt="">
                    </div>
                    <div class="slide fade">
                        <img src="images/gallery/3.jpg" alt="">
                    </div>
                    <div class="slide fade">
                        <img src="images/gallery/4.jpg" alt="">
                    </div>
                    <div class="slide fade">
                        <img src="images/gallery/5.jpg" alt="">
                    </div>
                    <div id="btn-prev"></div>
                    <div id="btn-next"></div>
                </div>
            </div>
            <div class="dots-wrapper">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="copyright">
                Этот сайт разработан в рамках выполнения лабораторной работы в 2022 г.
            </div>
        </div>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>
<script type="text/javascript" src="scripts/galleryScript.js"></script>
</body>
</html>