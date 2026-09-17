<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form with POST</title>
</head>
<body>

<h1>Register</h1>

<form action="register_controller.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <br><br>

    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <br><br>

    <label for="repeat_password">Repeat password</label>
    <input type="password" id="repeat_password" name="repeat_password">

    <br><br>

    <button type="submit">Register</button>
</form>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
