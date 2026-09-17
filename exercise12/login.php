<?php
session_start();

if (!isset($_SESSION["website_user"])) {
    $_SESSION["website_user"] = [
        "username" => "annas",
        "password" => "Password1!"
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["username"]) &&
        isset($_POST["password"]) &&
        $_POST["username"] == $_SESSION["website_user"]["username"] &&
        $_POST["password"] == $_SESSION["website_user"]["password"]
    ) {
        $_SESSION["website_logged"] = true;

        header("Location: products_page.php");
        exit;
    }

    $error = "Incorrect username or password.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php if (isset($error)): ?>
    <p><?= $error ?></p>
<?php endif; ?>

<form method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <br><br>

    <button type="submit">Login</button>
</form>

<p>Test user: annas / Password1!</p>
<p><a href="index.php">Back to website</a></p>

</body>
</html>
