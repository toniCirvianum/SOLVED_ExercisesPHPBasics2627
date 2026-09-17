<?php
session_start();

// Remove the user variable from the session
unset($_SESSION["user"]);

header("Location: session_show.php");
exit;
