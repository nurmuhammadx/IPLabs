<?php
session_start();
include_once "./db.class.php";
DB::getInstance();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);
    $_SESSION["error-message2"] = "";
    $_SESSION["login"] = $login;

    if (empty($password) || empty($login)) {
        $_SESSION["error-message2"] = "*Ошибка авторизации!";
    }

    if (!$_SESSION["error-message2"]) {
        $query = "SELECT * FROM `users` WHERE `login` = '$login' and `password` = MD5('$password')";
        $reqResult = DB::query($query);
        if (($item = DB::fetch_array($reqResult))) {
            $checkType = "SELECT `user_type` FROM `users` WHERE `login` = '$login'";
            $typeCheckResult  = DB::query(($checkType));
            $_SESSION['user_type'] = DB::fetch_array($typeCheckResult)['user_type'];
            $_SESSION["auth"] = true;
            $_SESSION["username"] = $item['username'];
            $query = "SELECT * FROM `users` WHERE `login` = '$login'";
            $avaCheckResult  = DB::query($query);
            $_SESSION['avatar'] = DB::fetch_array($avaCheckResult)['avatar_name'];
        } else {
            $_SESSION['error-message2'] = "*Неправильный пароль или логин!";
        }
    } else {
        $_SESSION['error-message2'] = "*Неправильный логин или пароль!";
    }


    if (isset($_SESSION["auth"])) {
        header("location: ../pages/profile.php");
    } else {
        include_once "../pages/authorization.php";
    }

}