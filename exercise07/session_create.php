<?php
session_start();

$_SESSION["user"] = [
    "name" => "Anna",
    "username" => "anna",
    "email" => "anna@email.com"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>

<body>

    <h1>$_SESSION['user'] creada</h1>

    <p><a href="session_show.php">Mostrar contungut</a></p>
    <p><a href="../index.php">Enrere</a></p>

</body>

</html>