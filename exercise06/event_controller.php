<?php
session_start();

$eventDate = null;
$eventDateTime = null;
$message = "";
$days = null;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET["event"]) && $_GET["event"] != "") {
        $eventDate = $_GET["event"];
        $todayTimestamp = time();
        $today = date("Y-m-d", $todayTimestamp);
        // Convert the textual date into a timestamp
        $eventTimestamp = strtotime($eventDate);
        $_SESSION['eventTimestamp'] = $eventTimestamp;

        // Create DateTime objects
        $todayDateTime = new DateTime($today);
        $eventDateTime = new DateTime($eventDate);

        // Calculate the difference between the two dates
        $difference = $todayDateTime->diff($eventDateTime);
        $days = $difference->days;
        $_SESSION['days'] = $days;

        if ($eventDate == $today) $_SESSION['eventHappen'] = "The event is today!";
        if ($eventTimestamp > strtotime($today)) {
            $_SESSION['eventHappen'] = "The event is in the future.";
        }
        if ($eventTimestamp < strtotime($today)) {
            $_SESSION['eventHappen'] = "The event is in the past.";
        }
        header( 'Location: ./event.php');
        exit;
    }
}
