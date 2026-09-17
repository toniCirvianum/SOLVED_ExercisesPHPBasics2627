<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $errors[] = "Invalid request.";
} else {
    $requiredFields = [
        "name",
        "username",
        "email",
        "password",
        "repeat_password"
    ];

    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || $_POST[$field] == "") {
            $errors[] = "Missing required field: " . $field;
        }
    }

    if (isset($_POST["username"])) {
        $usernamePattern = "/^[a-z]{5,8}$/";

        if (!preg_match($usernamePattern, $_POST["username"])) {
            $errors[] = "Username must contain only lowercase letters and have between 5 and 8 characters.";
        }
    }

    if (isset($_POST["password"])) {
        // Minimum 8 characters, at least one letter, one number and one symbol
        $passwordPattern = "/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/";

        if (!preg_match($passwordPattern, $_POST["password"])) {
            $errors[] = "Password must have at least 8 characters, one letter, one number and one symbol.";
        }
    }

    if (
        isset($_POST["password"]) &&
        isset($_POST["repeat_password"]) &&
        $_POST["password"] != $_POST["repeat_password"]
    ) {
        $errors[] = "Passwords do not match.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure registration result</title>
</head>
<body>

<h1>Registration result</h1>

<?php if (count($errors) > 0): ?>

    <?php foreach ($errors as $error): ?>
        <p><?= $error ?></p>
    <?php endforeach; ?>

<?php else: ?>

    <p>Registration successful.</p>
    <p>Name: <?= $_POST["name"] ?></p>
    <p>Username: <?= $_POST["username"] ?></p>
    <p>Email: <?= $_POST["email"] ?></p>

<?php endif; ?>

<p><a href="register.php">Back to form</a></p>
<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
