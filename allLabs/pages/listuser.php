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
        <title>Панель Администратора</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/listuser.css">
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
            <div class="table-box">
                <div class="table">
                    <div class="table-column">
                        <div class="table-str">id</div>
                        <div class="table-str">username</div>
                        <div class="table-str">login</div>
                        <div class="table-str">type</div>
                        <div class="table-str">avatar</div>
                        <div class="table-str">avatar_name</div>
                        <div class="table-str"></div>

                    </div>
                    <?php
                    $query = "SELECT * FROM `users`";
                    $res  = DB::query($query);
                    while (($item = DB::fetch_array($res)) != false) { ?>
                        <div class="table-column">
                            <div class="table-str"><?= $item['id'] ?></div>
                            <div class="table-str"><?= $item['username'] ?></div>
                            <div class="table-str"><?= $item['login'] ?></div>
                            <div class="table-str"><?= $item['user_type'] ?></div>
                            <div class="table-str"><img class="user-avatar" src="<?php
                                if (!empty($item['avatar_name'])) {
                                    echo $item['avatar_name'];
                                } else {
                                    echo "../images/icons/profile.jpg";
                                }
                                ?>" alt="avatar"></div>
                            <div class="table-str"><?= $item['avatar_name'] ?></div>
                            <div class="table-str">
                                <a href="../pages/edite-user.php?id=<?= $item['id'] ?>" class="manage-user" title="Edit"></a>
                                <?php if ($item['user_type'] != 0) { ?>
                                    <a href="../server/delete-user.php?id=<?= $item['id'] ?>" class="delete-user" title="Delete"></a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
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