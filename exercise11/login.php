<?php
session_start();

// Create a predefined user the first time the exercise is opened
if (!isset($_SESSION["predefined_user"])) {
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

<?php
if (isset($_SESSION["error"])) {
    echo "<p>" . $_SESSION["error"] . "</p>";

    // Remove the temporary error message after displaying it
    unset($_SESSION["error"]);
}
?>

<form action="login_controller.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <br><br>

    <button type="submit">Login</button>
</form>

<p>Test user: annas / Password1!</p>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
