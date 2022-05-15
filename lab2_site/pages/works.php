<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мои работы</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/my-work.css">
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
        <div class="header-content-gallery">
            <h1 class="text-title-work">Мои Работы</h1>
           <div class="bloc-jfc">
               <div class="bloc-lab">
                   <h4>Лабораторнаые работы по МЛиДМ</h4>
                   <div class="button-first-colum">
                       <div class="button">
                           <a href="../mldm_pages/mldmlab1.php" target="_blank">Lab #1</a>
                       </div>
                       <div class="button">
                           <a href="#" target="_blank">Lab #2</a>
                       </div>
                       <div class="button">
                           <a href="#" target="_blank">Lab #3</a>
                       </div>
                   </div>
                   <div class="button-second-colum">
                       <div class="button">
                           <a href="#" target="_blank">Lab #4</a>
                       </div>
                       <div class="button">
                           <a href="#" target="_blank">Lab #5</a>
                       </div>
                   </div>
               </div>
               <div class="bloc-lab">
                   <h4>Лабораторнаые работы по ИП</h4>
                   <div class="button-first-colum">
                       <div class="button">
                           <a href="https://github.com/nurmuhammadx/IPLabs/tree/master/lab1_prototype" target="_blank">Lab #1</a>
                       </div>
                       <div class="button">
                           <a href="https://github.com/nurmuhammadx/IPLabs/tree/master/lab2_site" target="_blank">Lab #2</a>
                       </div>
                       <div class="button">
                           <a href="#" target="_blank">Lab #3</a>
                       </div>
                   </div>
                   <div class="button-first-colum">
                       <div class="button">
                           <a href="#" target="_blank">Lab #4</a>
                       </div>
                       <div class="button">
                           <a href="#" target="_blank">Lab #5</a>
                       </div>
                       <div class="button">
                           <a href="#" target="_blank">Lab #6</a>
                       </div>
                   </div>

               </div>
           </div>
            <?php include_once "../templates/footer.php" ?>
        </div>
</header>
</body>
</html>