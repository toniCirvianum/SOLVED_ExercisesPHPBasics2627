<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search form with GET</title>
</head>
<body>

<h1>Product search</h1>

<form action="search_server.php" method="get">
    <label for="name">Product name</label>
    <input type="text" id="name" name="name">

    <br><br>

    <label for="price">Maximum price</label>
    <input type="number" id="price" name="price" step="0.01">

    <br><br>

    <label for="rating">Minimum rating</label>
    <input type="number" id="rating" name="rating" min="1" max="10">

    <br><br>

    <button type="submit">Search</button>
</form>

<p><a href="../index.php">Enrere</a></p>

</body>
</html>
