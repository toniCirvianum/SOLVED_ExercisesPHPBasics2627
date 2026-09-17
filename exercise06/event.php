<?php
date_default_timezone_set("Europe/Madrid");

$todayTimestamp = time();
$today = date("Y-m-d", $todayTimestamp);
$currentTime = date("H:i:s", $todayTimestamp);

$eventDate = null;
$eventDateTime = null;
$message = "";
$days = null;

if (isset($_GET["event"]) && $_GET["event"] != "") {
    $eventDate = $_GET["event"];

    // Convert the textual date into a timestamp
    $eventTimestamp = strtotime($eventDate);

    // Create DateTime objects
    $todayDateTime = new DateTime($today);
    $eventDateTime = new DateTime($eventDate);

    // Calculate the difference between the two dates
    $difference = $todayDateTime->diff($eventDateTime);
    $days = $difference->days;

    if ($eventDate == $today) {
        $message = "The event is today!";
    } elseif ($eventTimestamp > strtotime($today)) {
        $message = "The event is in the future.";
    } else {
        $message = "The event is in the past.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event countdown</title>
</head>
<body>

<h1>Event countdown</h1>

<p>Today's date: <?= $today ?></p>
<p>Current time: <?= $currentTime ?></p>

<form method="get">
    <label for="event">Event date</label>
    <input type="date" id="event" name="event" required>
    <button type="submit">Calculate</button>
</form>

<?php if ($eventDateTime != null): ?>
    <h2>Event information</h2>
    <p>Event date: <?= $eventDateTime->format("d/m/Y") ?></p>
    <p><?= $message ?></p>
    <p>Difference: <?= $days ?> days</p>
<?php endif; ?>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
