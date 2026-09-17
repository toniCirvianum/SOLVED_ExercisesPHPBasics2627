<?php
session_start();

// Protect the Products page
if (!isset($_SESSION["website_logged"]) || $_SESSION["website_logged"] != true) {
    header("Location: login.php");
    exit;
}

include("products.php");
include("header.php");
?>

<h2>Products</h2>

<?php foreach ($products as $product): ?>
    <h3><?= $product["name"] ?></h3>
    <p><?= $product["description"] ?></p>
    <p>Price: <?= $product["price"] ?> €</p>
    <p>Rating: <?= $product["rating"] ?>/10</p>
    <hr>
<?php endforeach; ?>

<?php
include("footer.php");
?>
