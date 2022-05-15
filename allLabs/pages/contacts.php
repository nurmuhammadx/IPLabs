<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/contact.css">
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
        <div class="header-content-contacts">
            <h1 class="text-title-about">Контактная информация</h1>
            <div class="contact-block">
                <div class="contact-dec">
                    <img src="../images/icons/gicon.png" alt="gnail" class="logo-g">
                    <h2 class="title-gm">Gmail</h2>
                    <div class="button">
                        <a href="mailto:nurmuhammad77708@gmail.com" target="_blank">Перейти</a>
                    </div>
                </div>
                <div class="contact-dec">
                    <img src="../images/icons/vk.png" alt="vk" class="logo-g">
                    <h2 class="title-vk">Vkantacte</h2>
                    <div class="button">
                        <a href="https://vk.com/n.khudoydotov" target="_blank">Перейти</a>
                    </div>
                </div>
                <div class="contact-dec">
                    <img src="../images/icons/github.png" alt="github" class="logo-g">
                    <h2 class="title-gt">Github</h2>
                    <div class="button">
                        <a href="https://github.com/nurmuhammadx" target="_blank">Перейти</a>
                    </div>
                </div>
                <div class="contact-dec">
                    <img src="../images/icons/tg.png" alt="telegram" class="logo-g">
                    <h2 class="title-tg">Telegram</h2>
                    <div class="button">
                        <a href="https://t.me/nx2102" target="_blank">Перейти</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../templates/footer.php" ?>
    </div>
</header>
</body>
</html>