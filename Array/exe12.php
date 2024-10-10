<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Initialize variables to store the shortest and longest lengths
$shortestLength = PHP_INT_MAX;
$longestLength = 0;

// Loop through each word in the array
foreach ($words as $word) {
    $length = strlen($word); // Get the length of the current word

    // Update shortest length if the current length is shorter
    if ($length < $shortestLength) {
        $shortestLength = $length;
    }

    // Update longest length if the current length is longer
    if ($length > $longestLength) {
        $longestLength = $length;
    }
}

// Output the results
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";
?>

</body>
</html>