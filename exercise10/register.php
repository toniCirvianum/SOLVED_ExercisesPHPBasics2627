<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registre</title>
</head>

<body>

    <h1>Registre</h1>

    <form action="register_controller.php" method="post">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name">

        <br><br>

        <label for="username">usuari</label>
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

        <button type="submit">Registrar</button>
    </form>

    <?php
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case '1':
                echo "<p> Hi ha camp buits </p>";
                break;
            case '2':
                echo "<p> LEs contrasenyes no coincideixen </p>";
                break;
            case '3':
                echo "<p> El nom d'usuari o la contrasenya no satisfà les condicions </p>";
                break;
            default:
                # code...
                break;
        }
    }

    ?>

    <p><a href="../index.php">Enrere</a></p>

</body>

</html>