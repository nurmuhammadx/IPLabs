<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/game.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Pacific&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Игра</title>
</head>
<body>
<div class="container">
    <div class="game-container">
        <div id="game-back"></div>

        <div class="user-interface">
            <h1 class="user-title">Сколько шаров</h1>
            <form action="../server/signup.php" method="post" enctype="multipart/form-data">
                <div class="user">
                    <div class="ball-block">
                        <h4 class="red">красного цвета</h4>
                        <input type="number" min="1" max="5" name="username" class="field">
                    </div>
                    <div class="ball-block">
                        <h4 class="green">Зеленого цвета</h4>
                        <input type="number" min="1" max="5"  name="login" class="field">
                    </div>
                    <div class="ball-block">
                        <h4 class="blue">Синего цвета</h4>
                        <input type="number" min="1" max="5"  name="username" class="field">
                    </div>
                    <div class="ball-block">
                        <h4 class="yellow">Желтого цвета</h4>
                        <input type="number" min="1" max="5"   name="login" class="field">
                    </div>
                    <div class="ball-block">
                        <h4 class="orange">Оранживого цвета</h4>
                        <input type="number" min="1" max="5"   name="login" class="field">
                    </div>
                </div>
                <input type="submit" value="Проверить" name="submit" class="submit">
            </form>

        </div>
    </div>
</div>
<div class="copyright">
    Этот сайт разработан в рамках выполнения лабораторной работы в 2022 г.
</div>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/game.js"></script>
</body>
</html>