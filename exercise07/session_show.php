<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show session</title>
</head>
<body>

<h1>Welcome</h1>

<?php if (isset($_SESSION["user"])): ?>
    <p>Name: <?= $_SESSION["user"]["name"] ?></p>
    <p>Username: <?= $_SESSION["user"]["username"] ?></p>
    <p>Email: <?= $_SESSION["user"]["email"] ?></p>
    <p><a href="logout.php">Logout</a></p>
<?php else: ?>
    <p>No user session found.</p>
    <p><a href="session_create.php">Create session</a></p>
<?php endif; ?>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
