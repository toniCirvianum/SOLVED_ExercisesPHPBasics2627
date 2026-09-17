<?php
session_start();

unset($_SESSION["website_logged"]);

header("Location: index.php");
exit;
