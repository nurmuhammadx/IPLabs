<?php
session_start();
include_once "./db.class.php";
DB::getInstance();
$id = htmlspecialchars($_POST['id']);
$username = htmlspecialchars($_POST['username']);
$login = htmlspecialchars($_POST['login']);
$type = htmlspecialchars($_POST['type']);
$password = htmlspecialchars($_POST['password']);
$pass = "";
if (!empty($password)) {
    $pass = ",`password` =  MD5('$password')";
}

$query =  "UPDATE `users` SET `username` = '$username', `login` = '$login', `user_type` = '$type'" . $pass . "WHERE id='$id'";
DB::query($query);
header("location: ../pages/listuser.php");
