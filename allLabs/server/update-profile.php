<?php
session_start();
include_once "./db.class.php";
DB::getInstance();
$_SESSION["error-message"] = "";
$username = htmlspecialchars($_POST['username']);
$login = htmlspecialchars($_POST['login']);
$currentLogin = $_GET['login'];
$password = htmlspecialchars($_POST['password']);
$password_conf = htmlspecialchars($_POST['password_conf']);
$query = "SELECT * FROM `users` WHERE `login` = '$currentLogin'";
$avaCheckResult  = DB::query($query);
$_SESSION['avatar'] = DB::fetch_array($avaCheckResult)['avatar_name'];

if ($password !== $password_conf) {
    $_SESSION["error-message"] = "*Пароли не совпадают!";
}

if (strlen($password) < 5 && !empty($password)) {
    $_SESSION["error-message"] = "*Пароль должен содержать не менее 6 символов";
}

if(empty($username)) {
    $_SESSION["error-message"] = "*Поле имя не может быть пустым!";
}

if (empty($login)) {
    $_SESSION["error-message"] = "*Поле логин не может быть пустым!";
}

if (!$_SESSION["error-message"]) {
    $strPass = "";
    $strQueryAvatar = "";
    if (!empty($password)) {
        $strPass = ",`password` =  MD5('$password')";
    }
    if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
        $typeFile = "";
        if ($_FILES['avatar']['type'] = 'image/jpeg') {
            $typeFile = ".jpg";
        }

        $uploadNameFile = md5(time() . $_FILES['avatar']['name']);
        $uploadDirFile = $_SERVER["DOCUMENT_ROOT"] . "/allLabs/uploads/";
        $uploadAvatar = $uploadDirFile . $uploadNameFile . $typeFile;
        $truePathAvatar = "/allLabs/uploads/" . $uploadNameFile . $typeFile;
        move_uploaded_file($_FILES['avatar']['tmp_name'],  $uploadAvatar);
        $strQueryAvatar = ", `avatar_name` = '$truePathAvatar'";
    }

    $query =  "UPDATE `users` SET `username` = '$username', `login` = '$login'" . $strPass . $strQueryAvatar . "WHERE `login` = '$currentLogin'";
    $_SESSION['username'] = $username;
    $_SESSION['login'] = $login;
    DB::query($query);
    $query = "SELECT * FROM `users` WHERE `login` = '$currentLogin'";
    $avaCheckResult  = DB::query($query);
    $_SESSION['avatar'] = DB::fetch_array($avaCheckResult)['avatar_name'];
}

header("location: ../pages/profile.php");
