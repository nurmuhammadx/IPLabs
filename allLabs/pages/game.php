<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Игра</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/game.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacific&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../scripts/main.js"></script>
    <script type="text/javascript" src="../scripts/game.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <?php include_once "../templates/header.php";
        if (isset($_SESSION['auth'])) {
        ?>
        <div class="content-container">
            <div class="game-container">
                <h1 class="game-title">Игра определить цвета шаров</h1>
                <div id='game-background'></div>
                <div class="user-interface">
                    <?php
                    if (isset($_SESSION["error-message"]) && $_SESSION["error-message"]) {
                        echo "<div class='error-box'><p class='error-message'>" . $_SESSION["error-message"] . "</p></div>";
                    }
                    unset($_SESSION["error-message"]);
                    ?>
                    <?php
                    if (isset($_SESSION["score"]) && $_SESSION["score"] > 60) {
                        echo "
                                <div class='popup-bg'>
                                    <div class='popup'>
                                        <div class='score-box'>
                                            <p class='score-message'>У вас: " . $_SESSION["score"] . " очков!</p>
                                        </div>
                                        <div class='btn-box'>
                                            <div class='btn-bi'>
                                                <a href='/allLabs/pages/game.php' class='btn-a'>Начать игру заново</a>
                                            </div>
                                            <div class='btn-bi'>
                                                <a href='/allLabs/templates/level2.php' class='btn-a'>Продолжить игру</a>
                                            </div>
                                            <div class='btn-bi'>
                                                <a href='../index.php' class='btn-a'>Выйти из игры</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                    }
                    unset($_SESSION["score"]);
                    ?>
                    <h1 class="user-title">Сколько шаров</h1>
                    <form action="../server/game-result.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="level" value="1">
                        <div class="user">
                            <div class="ball-block">
                                <h4 class="red">красного цвета</h4>
                                <input type="text" name="red_ball" class="field">
                            </div>
                            <div class="ball-block">
                                <h4 class="green">Зеленого цвета</h4>
                                <input type="text"  name="green_ball" class="field">
                            </div>
                            <div class="ball-block">
                                <h4 class="blue">Синего цвета</h4>
                                <input type="text"   name="blue_ball" class="field">
                            </div>
                            <div class="ball-block">
                                <h4 class="yellow">Желтого цвета</h4>
                                <input type="text"    name="yellow_ball" class="field">
                            </div>
                            <div class="ball-block">
                                <h4 class="orange">Оранживого цвета</h4>
                                <input type="text"    name="orange_ball" class="field">
                            </div>
                        </div>
                        <div class="btn-b">
                            <input type="submit" value="Сохранить результат" name="submit" class="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once "../templates/footer.php" ?>
    </div>
</header>
</body>
</html><?php } else {
            echo "<h2 class='access'>Игра доступна только для <a href='/allLabs/pages/registration.php'>Зарегистрированных</a><br> или для<a href='/allLabs/pages/authorization.php'> Авторизованных </a> пользователей</h2>";
        } ?>




















