<?php
session_start();
include_once "../server/db.class.php";
DB::getInstance();
$query = "DELETE  FROM `users` WHERE `id`=" . $_GET['id'];
DB::query($query);
header("location: ../pages/listuser.php");