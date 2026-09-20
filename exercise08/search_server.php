<?php
if ($_SERVER["REQUEST_METHOD"] != "GET") {
    exit("Invalid request method.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search results</title>
</head>
<body>

<h1>Informació de cerca:</h1>

<?php if (isset($_GET["name"])): ?>
    <p>Product: <?= $_GET["name"] ?></p>
<?php endif; ?>

<?php if (isset($_GET["price"])): ?>
    <p>Maximum price: <?= $_GET["price"] ?></p>
<?php endif; ?>

<?php if (isset($_GET["rating"])): ?>
    <p>Minimum rating: <?= $_GET["rating"] ?></p>
<?php endif; ?>

<h2>Mostrant $_GET com un array</h2>

<pre><?php print_r($_GET); ?></pre>

<p><a href="../index.php">Enrere</a></p>

</body>
</html>
