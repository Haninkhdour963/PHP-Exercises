<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$string = 'The quick brown fox jumps over the lazy dog';

// Split the string into an array of words
$words = explode(' ', $string);

// Get the first 5 words
$firstFiveWords = array_slice($words, 0, 5);

// Join the array back into a string
$result = implode(' ', $firstFiveWords);

// Output the result
echo $result;
?>
 
</body>
</html>