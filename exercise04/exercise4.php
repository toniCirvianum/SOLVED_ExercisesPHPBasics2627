<?php
// Create one associative array
$student = [
    "name" => "Anna",
    "surname" => "Serra",
    "age" => 20,
    "mark" => 8
];

// Display keys and values before changing the array
$keys = array_keys($student);
$values = array_values($student);

// Add an email field
$student["email"] = "anna@email.com";

// Delete the age field
unset($student["age"]);

// Create a multidimensional array with five students
$students = [
    [
        "name" => "Anna",
        "surname" => "Serra",
        "email" => "anna@email.com",
        "age" => 20,
        "mark" => 8
    ],
    [
        "name" => "Marc",
        "surname" => "Puig",
        "email" => "marc@email.com",
        "age" => 19,
        "mark" => 7
    ],
    [
        "name" => "Laura",
        "surname" => "Soler",
        "email" => "laura@email.com",
        "age" => 21,
        "mark" => 9
    ],
    [
        "name" => "Pau",
        "surname" => "Roca",
        "email" => "pau@email.com",
        "age" => 20,
        "mark" => 6
    ],
    [
        "name" => "Marta",
        "surname" => "Vila",
        "email" => "marta@email.com",
        "age" => 22,
        "mark" => 8
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student list with arrays</title>
</head>
<body>

<h1>Student list with arrays</h1>

<h2>Array keys</h2>
<pre><?php print_r($keys); ?></pre>

<h2>Array values</h2>
<pre><?php print_r($values); ?></pre>

<h2>Modified student</h2>
<pre><?php print_r($student); ?></pre>

<h2>All students</h2>

<?php foreach ($students as $currentStudent): ?>
    <p>
        <?= $currentStudent["name"] ?>
        <?= $currentStudent["surname"] ?> -
        <?= $currentStudent["email"] ?> -
        Age: <?= $currentStudent["age"] ?> -
        Mark: <?= $currentStudent["mark"] ?>
    </p>
<?php endforeach; ?>

<p><a href="../index.php">Back to exercises</a></p>

</body>
</html>
