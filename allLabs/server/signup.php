<?php
session_start();
include_once "./db.class.php";
DB::getInstance();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);
    $password_conf = htmlspecialchars($_POST["password_conf"]);
    $_SESSION["error-message"] = "";
    $_SESSION["login"] = $login;

    if ($password !== $password_conf) {
        $_SESSION["error-message"] = "*Пароли не совпадают!";
    }
    if (empty($password_conf)) {
        $_SESSION["error-message"] = "*Пажалуйста потдвердите пароль!";
    }
    if (strlen($password) < 5) {
        $_SESSION["error-message"] = "*Пароль должен содержать не менее 6 символов";
    }
    if (empty($password)) {
        $_SESSION["error-message"] = "*Поле пароль не может быть пустым!";
    }
    if (empty($login)) {
        $_SESSION["error-message"] = "*Поле логин не может быть пустым!";
    }
    if(empty($username)) {
        $_SESSION["error-message"] = "*Поле имя не может быть пустым!";
    }

    if (!$_SESSION["error-message"]) {
        $checkLogin = "SELECT * FROM `users` WHERE `login` = '$login'";
        $res = DB::query($checkLogin);

        if (!(($itemL = DB::fetch_array($res)) != false)) {
            $query = "INSERT INTO `users` (`username`, `login`, `password`) VALUES ('$username', '$login', MD5('$password'))";
            DB::query($query);
            $checkType = "SELECT `user_type` FROM `users` WHERE `login` = '$login'";
            $typeCheckResult  = DB::query(($checkType));
            $_SESSION['user_type'] = DB::fetch_array($typeCheckResult)['user_type'];
            $_SESSION["auth"] = true;
            $_SESSION["username"] = $username;
        } else {
            $_SESSION["error-message"] = "*Этот логин уже занят, попробуйте другой!";
        }
    }
}


if (isset($_SESSION["auth"])) {
    header("location: ../pages/profile.php");
} else {
    include_once "../pages/registration.php";
}