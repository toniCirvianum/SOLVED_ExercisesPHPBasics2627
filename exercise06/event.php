<?php
session_start();
date_default_timezone_set("Europe/Madrid"); //set zone time

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Event countdown</title>
</head>

<body>

    <h1>Event countdown</h1>

    <p>Today's date:
        <?php $todayTimestamp = time();
        $today = date("d-m-Y", $todayTimestamp);
        echo $today;
        ?>
    </p>
    <p>Current time:
        <?= $currentTime = date("H:i:s", $todayTimestamp); ?></p>

    <form action="./event_controller.php" method="get">
        <label for="event">Event date</label>
        <input type="date" id="event" name="event" required>
        <button type="submit">Send</button>
    </form>

    <?php if (isset($_SESSION['eventTimestamp'])): ?>
        <h2>Event information</h2>

        <p>Event date: <?= date("d/m/Y", $_SESSION['eventTimestamp'])  ?></p>
        <p><?= $_SESSION['eventHappen'] ?></p>
        <p>Difference: <?= $_SESSION['days'] ?> days</p>

    <?php
    unset($_SESSION);
    endif;
    ?>

    <p><a href="../index.php">Enrere</a></p>

</body>

</html>