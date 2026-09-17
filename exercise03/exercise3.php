<?php
$computerName = "Office PC";
$brand = "Lenovo";
$price = 799.99;
$stock = true;

$operatingSystems = [
    "Windows 11",
    "Ubuntu",
    "Debian"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables and dynamic HTML</title>
</head>
<body>

<h1>Computer information</h1>

<?php
echo "<p>Computer name: $computerName</p>";
echo "<p>Brand: $brand</p>";
?>

<p>Price: <?= $price ?> €</p>
<p>Available stock: <?= $stock ? "Yes" : "No" ?></p>

<h2>Operating systems with print_r()</h2>

<pre><?php print_r($operatingSystems); ?></pre>

<h2>Operating systems with var_dump()</h2>

<pre><?php var_dump($operatingSystems); ?></pre>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
