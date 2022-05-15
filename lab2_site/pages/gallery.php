<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/gallery.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacific&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../scripts/main.js"></script>
    <script type="text/javascript" src="../scripts/gallery.js"></script>
    <title>Галерея</title>
</head>
<body>
<header class="header">
    <div class="container">
        <?php include_once "../templates/header.php" ?>
        <div class="header-content-gallery">
            <h1 class="text-title-gallery">Галерея</h1>
            <div class="gallery-box">
                <div class="btn-left" onclick="leftClickImage()">
                    <img src="../images/gallery/arr-left.png" alt="">
                </div>
                <div id="mainImage"></div>
                <div class="btn-right" onclick="rightClickImage()">
                    <img src="../images/gallery/arr-right.png" alt="">
                </div>
            </div>
        </div>
        <?php include_once "../templates/footer.php" ?>
    </div>
</header>
</body>
</html>