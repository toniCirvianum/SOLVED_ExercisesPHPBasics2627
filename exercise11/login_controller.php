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
    $_SESSION["error"] = "Falta informació!!!";
    header("Location: login.php");
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];

$usernameRegex = "/^[a-z]{5,8}$/";
$passwordRegex = "/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/";

if (!preg_match($usernameRegex, $username)) {
    $_SESSION["error"] = "Nom d'usuari no satisfà el format.";
    header("Location: login.php");
    exit;
}

if (!preg_match($passwordRegex, $password)) {
    $_SESSION["error"] ="Lacontrasenya no satisfà el format.";
    header("Location: login.php");
    exit;
}

if (
    $username == $_SESSION["user"]["username"] &&
    $password == $_SESSION["user"]["password"]
) {
    $_SESSION["logged"] = true;
    header("Location: app.php");
    exit;
}

$_SESSION["error"] = "Credencials incorrectes";
header("Location: login.php");
exit;
