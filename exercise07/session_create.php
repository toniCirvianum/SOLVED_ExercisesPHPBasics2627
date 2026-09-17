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
    <title>Create session</title>
</head>
<body>

<h1>Session created</h1>

<p><a href="session_show.php">Show session information</a></p>
<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
