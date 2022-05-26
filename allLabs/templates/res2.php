<?php
session_start();
include_once "../server/db.class.php";
DB::getInstance();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $level = htmlspecialchars($_POST["level"]);
    $red_ball = htmlspecialchars($_POST["red_ball"]);
    $green_ball = htmlspecialchars($_POST["green_ball"]);
    $blue_ball = htmlspecialchars($_POST["blue_ball"]);
    $yellow_ball = htmlspecialchars($_POST["yellow_ball"]);
    $orange_ball = htmlspecialchars($_POST["orange_ball"]);
    $username = $_SESSION["username"];
    $_SESSION["error-message"] = "";
    $_SESSION['score'] = "";
    $red_score = 0; $green_score =0; $blue_score = 0; $yellow_score = 0; $orange_score = 0;

//    проверка и очки
    if((int)$red_ball === 1) {
        $red_score = 20;
    }
    if((int)$green_ball === 3) {
        $green_score = 20;
    }
    if((int)$blue_ball === 2) {
        $blue_score = 20;
    }
    if((int)$yellow_ball === 2) {
        $yellow_score = 20;
    }
    if((int)$orange_ball === 4) {
        $orange_score = 20;
    }
    $res = $red_score + $green_score + $blue_score + $yellow_score + $orange_score;
    $_SESSION['score'] = $res;

//проверка ввода
    if(empty($red_ball)){
        $_SESSION["error-message"] = "Поля ввода не могут быть пустыми";
    }
    if(empty($green_ball)){
        $_SESSION["error-message"] = "Поля ввода не могут быть пустыми";
    }
    if(empty($yellow_ball)){
        $_SESSION["error-message"] = "Поля ввода не могут быть пустыми";
    }
    if(empty($blue_ball)){
        $_SESSION["error-message"] = "Поля ввода не могут быть пустыми";
    }
    if(empty($orange_ball)){
        $_SESSION["error-message"] = "Поля ввода не могут быть пустыми";
    }


    if (!$_SESSION["error-message"]) {
        $query = "INSERT INTO `game_score` (`player_name`, `level`, `red_ball`, `green_ball`, `blue_ball`, `yellow_ball`, `orange_ball`, `score`) VALUES ('$username', '$level', '$red_ball', '$green_ball', '$blue_ball', '$yellow_ball', '$orange_ball', '$res')";
        DB::query($query);
    }
}


if (isset($_SESSION["error-message"])) {
    include_once "level2.php";
}