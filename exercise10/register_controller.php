<?php
session_start();
function checkIsset_POST()
{
    $requiredFields = [
        "name",
        "username",
        "email",
        "password",
        "repeat_password"
    ];
    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field])) {
            return false;
        }
        return true;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!checkIsset_POST()) {
        header('Location : ./register.php?error=1');
        exit;
    }

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeat_password"];

    if ($password != $repeatPassword) {
        header('Location: ./register.php?error=2');
        exit;
    }

    $regexUSername = '/^[a-z]{5,8}$/';
    if (!preg_match($regexUSername, $username)) {
        header('Location: ./register.php?error=3');
        exit;
    }

    $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/';
    if (!preg_match($regexPassword, $username)) {
        header('Location: ./register.php?error=3');
        exit;
    }

    $_SESSION['user'] = [
        'name' => $name,
        'username' => $username,
        'password' => $password,
        'email' => $email
    ];

    //Choose where you redirect user
    header('Location: ./login.php');
    exit;

}

?>
