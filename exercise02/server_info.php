<?php
// Display some PHP configuration values before phpinfo()
$uploadMax = ini_get("upload_max_filesize");
$postMax = ini_get("post_max_size");
$phpVersion = PHP_VERSION;
$serverApi = PHP_SAPI;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP server information</title>
</head>
<body>

<h1>PHP server information</h1>

<p>upload_max_filesize: <?= $uploadMax ?></p>
<p>post_max_size: <?= $postMax ?></p>
<p>PHP version: <?= $phpVersion ?></p>
<p>Server API: <?= $serverApi ?></p>

<p><a href="../index.php">Back to exercises</a></p>

<hr>

<?php
// Display the complete PHP configuration
phpinfo();
?>

</body>
</html>
