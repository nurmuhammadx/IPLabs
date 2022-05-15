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
    if (strlen($password) < 6) {
        $_SESSION["error-message"] = "*Пароль должен содержать не менее 8 символов";
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
        $checkUsername = "SELECT * FROM `users` WHERE `username` = '$username'";
        $resultU = DB::query($checkUsername);
        $checkLogin = "SELECT * FROM `users` WHERE `login` = '$login'";
        $resultL = DB::query($checkLogin);

        if (!(($itemU = DB::fetch_array($resultU)) != false)) {
            $query = "INSERT INTO `users` (`username`, `login`, `password`) VALUES ('$username', '$login', MD5('$password'))";
            DB::query($query);
//            $checkType = "SELECT `type` FROM `users` WHERE `login` = '$login'";
//            $typeCheckResult  = DB::query(($checkType));
//            $_SESSION['type'] = DB::fetch_array($typeCheckResult)['type'];
            $_SESSION["auth"] = true;
            $_SESSION["username"] = $username;
        } else {
            $_SESSION["error-message"] = "Это имя уже занято, попробуйте другой!";
        }

        if (!(($itemL = DB::fetch_array($resultL)) != false)) {
            $query = "INSERT INTO `users` (`username`, `login`, `password`) VALUES ('$username', '$login', MD5('$password'))";
            DB::query($query);
//            $checkType = "SELECT `type` FROM `users` WHERE `login` = '$login'";
//            $typeCheckResult  = DB::query(($checkType));
//            $_SESSION['type'] = DB::fetch_array($typeCheckResult)['type'];
            $_SESSION["auth"] = true;
            $_SESSION["username"] = $username;
        } else {
            $_SESSION["error-message"] = "*Этот логин уже занят, попробуйте другой!";
        }
    }
}


if (isset($_SESSION["auth"])) {
    header("location: ../index.php");
} else {
    include_once "../pages/registration.php";
}