<?php
session_start();

// Create a predefined user the first time the exercise is opened
if (!isset($_SESSION["user"])) {
    $_SESSION["predefined_user"] = [
        "name" => "Anna Serra",
        "username" => "annas",
        "password" => "Password1!",
        "email" => "anna@email.com"
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login system</title>
</head>
<body>

<h1>Login</h1>



<form action="login_controller.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <br><br>

    <button type="submit">Login</button>
</form>

<?php
if (isset($_SESSION["error"])) {
    echo "<p>" . $_SESSION["error"] . "</p>";

    // Remove the temporary error message after displaying it
    unset($_SESSION["error"]);
}
?>

<p><a href="../index.php">Enrere</a></p>

</body>
</html>
