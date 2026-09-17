<?php
$name = "Toni";
$course = "Web Development";
$year = 2026;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first PHP page</title>
</head>
<body>

<?php
// Display a title using echo
echo "<h1>My first PHP page</h1>";

// Display HTML elements generated from PHP
echo "<p>This page has been created using PHP.</p>";
echo "<hr>";
?>

<h2>Student information</h2>

<p>Name: <?= $name ?></p>
<p>Course: <?= $course ?></p>
<p>Year: <?= $year ?></p>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
