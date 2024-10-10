<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Original string
$string = "Twinkle, twinkle, little star.";

// Split the string into an array using spaces and punctuation as delimiters
$array = preg_split('/(\s+|(?<=,)|(?=\.)|(?<=\.))/', $string, -1, PREG_SPLIT_NO_EMPTY);

// Display the array using var_dump
var_dump($array);
?>

</body>
</html>