<?php
// Load the product array from an external file
include("products.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computer shop catalogue</title>
</head>
<body>

<h1>Computer Shop</h1>

<h2>1. All products</h2>

<?php foreach ($products as $product): ?>
    <h3><?= $product["name"] ?></h3>
    <p><?= $product["description"] ?></p>
    <p>Price: <?= $product["price"] ?> €</p>
    <p>Rating: <?= $product["rating"] ?>/10</p>
    <hr>
<?php endforeach; ?>

<h2>2. Products with rating higher than 7</h2>

<?php foreach ($products as $product): ?>
    <?php if ($product["rating"] > 7): ?>
        <p><?= $product["name"] ?> - <?= $product["rating"] ?>/10</p>
    <?php endif; ?>
<?php endforeach; ?>

<h2>3. Products cheaper than 50 €</h2>

<?php foreach ($products as $product): ?>
    <?php if ($product["price"] < 50): ?>
        <p><?= $product["name"] ?> - <?= $product["price"] ?> €</p>
    <?php endif; ?>
<?php endforeach; ?>

<h2>4. Products that cost more than 100 €</h2>

<?php foreach ($products as $product): ?>
    <?php if ($product["price"] > 100): ?>
        <p><?= $product["name"] ?> - <?= $product["price"] ?> €</p>
    <?php endif; ?>
<?php endforeach; ?>

<h2>5. Number of products available</h2>

<p><?= count($products) ?></p>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
