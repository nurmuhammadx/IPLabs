<?php
session_start();
include_once "../server/db.class.php";
DB::getInstance();

if (isset($_SESSION['auth']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
    ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Редактировать</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/edituser.css">
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
            <div class="fixed-container">
                <?php
                $query = "SELECT * FROM `users` WHERE `id`=" . $_GET['id'];
                $res  = DB::query($query);
                if (($item = DB::fetch_array($res))) { ?>
                    <div class="form-box">
                        <div class="form-content">
                            <h3 class="form-title">Редоктировать: <?= $item['username'] ?></h3>
                            <form action="../server/update-user.php " class="sign-up-form" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <input type="text" placeholder="Введите имя" name="username" class="field" value="<?= $item['username'] ?>">
                                <input type="text" placeholder="Введите логин" name="login" class="field" value="<?= $item['login'] ?>">
                                <input type="text" placeholder="Type" name="type" class="field" value="<?= $item['user_type'] ?>">
                                <input type="password" placeholder="Введите пароль" name="password" class="field">
                                <input type="submit" value="Изменить" name="submit" class="subSave">
                            </form>
                        </div>
                    </div>
                <?php }

                ?>
            </div>
            <?php include_once "../templates/footer.php" ?>
        </div>
    </header>
    </body>
    </html>
<?php } else {
    echo "Доступ запрещен!";
} ?>