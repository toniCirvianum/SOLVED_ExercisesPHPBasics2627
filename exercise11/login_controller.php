<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit;
}

if (
    !isset($_POST["username"]) ||
    !isset($_POST["password"]) ||
    $_POST["username"] == "" ||
    $_POST["password"] == ""
) {
    $_SESSION["error"] = "Missing login information.";
    header("Location: login.php");
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];

$usernamePattern = "/^[a-z]{5,8}$/";
$passwordPattern = "/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/";

if (!preg_match($usernamePattern, $username)) {
    $_SESSION["error"] = "Invalid username format.";
    header("Location: login.php");
    exit;
}

if (!preg_match($passwordPattern, $password)) {
    $_SESSION["error"] = "Invalid password format.";
    header("Location: login.php");
    exit;
}

if (
    isset($_SESSION["predefined_user"]) &&
    $username == $_SESSION["predefined_user"]["username"] &&
    $password == $_SESSION["predefined_user"]["password"]
) {
    $_SESSION["logged"] = true;
    header("Location: app.php");
    exit;
}

$_SESSION["error"] = "Incorrect username or password.";
header("Location: login.php");
exit;
