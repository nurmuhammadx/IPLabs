<?php
session_start();
unset($_SESSION["auth"]);
unset($_SESSION["username"]);
header("location: ../index.php");
