<?php
session_start();

if (!isset($_SESSION["logged"]) || $_SESSION["logged"] != true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application</title>
</head>
<body>

<h1>Welcome, <?= $_SESSION["predefined_user"]["username"] ?></h1>

<p><a href="logout.php">Logout</a></p>
<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
