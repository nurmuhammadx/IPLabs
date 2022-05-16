<?php
session_start();
include_once "../server/db.class.php";
DB::getInstance();

if (isset($_SESSION['auth'])) {
    ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Профиль <?= $_SESSION['username'] ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/profile.css">
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
            <div class="form-box">
                <div class="form-container">
                    <div class="form-content">
                        <form action="../server/update-profile.php?login=<?= $_SESSION['login'] ?>" class="sign-up-form" method="POST" enctype="multipart/form-data">
                            <div class="profile-left">
                                <h3 class="pic-title">Profile picture</h3>
                                <img class="right-img" src="<?php if (isset($_SESSION['avatar']) && !empty($_SESSION['avatar'])) {
                                    echo   $_SESSION['avatar'];
                                } else {
                                    echo "../images/icons/profile.jpg";
                                }          ?>" alt="ava">
                                <input id="file-chooser" type="file" name="avatar" class="file-chooser">
                                <label for="file-chooser" class="file-chooser-label">
                                    <span class="file-wrapper"><img class="file-img" src="../images/icons/file-upload.svg" alt="Выбрать файл" width="25"></span>
                                    <span class="file-text">Изменить</span>
                                </label>
                            </div>
                            <div class="profile-right">
                                <h3 class="form-title">Профиль: <?= $_SESSION['username'] ?></h3>
                                <input type="text" placeholder="Введите имя" name="username" class="field" value="<?= $_SESSION['username'] ?>">
                                <input type="text" placeholder="Введите логин" name="login" class="field" value="<?= $_SESSION['login'] ?>">
                                <input type="password" placeholder="Введите новый пароль" name="password" class="field">
                                <input type="password" placeholder="Введите пароль повтороно" name="password_conf" class="field">
                                <input type="submit" value="Изменить" name="submit" class="subSave">
                                <?php
                                if (isset($_SESSION["error-message"]) && $_SESSION["error-message"]) {
                                    echo "<p class='error-message'>" . $_SESSION["error-message"] . "</p>";
                                }
                                unset($_SESSION["error-message"]);
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once "../templates/footer.php" ?>
        </div>
    </header>
    </body>
    </html>
<?php } else {
    echo "Доступ запрещен!";
} ?>