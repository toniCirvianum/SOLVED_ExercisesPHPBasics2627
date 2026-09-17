<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("Invalid request.");
}

$requiredFields = [
    "name",
    "username",
    "email",
    "password",
    "repeat_password"
];

// Check that all required fields exist and are not empty
foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || $_POST[$field] == "") {
        exit("Missing required field: " . $field);
    }
}

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeat_password"];

if ($password != $repeatPassword) {
    exit("Passwords are different.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration result</title>
</head>
<body>

<h1>Registration successful</h1>

<p>Name: <?= $name ?></p>
<p>Username: <?= $username ?></p>
<p>Email: <?= $email ?></p>

<h2>POST data - development only</h2>

<p>
    Warning: this is only shown because the exercise asks to inspect $_POST.
    Passwords should not normally be displayed.
</p>

<pre><?php print_r($_POST); ?></pre>

<p><a href="register.php">Back to form</a></p>
<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
