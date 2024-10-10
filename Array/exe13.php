<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function generateUniqueRandomNumbers($min, $max, $count = 10) {
    // Ensure the range has enough unique numbers
    if ($max - $min + 1 < $count) {
        return "Not enough unique numbers in the range.";
    }

    // Create an array of numbers within the range
    $numbers = range($min, $max);

    // Shuffle the array to randomize order
    shuffle($numbers);

    // Slice the first $count numbers from the shuffled array
    $uniqueRandomNumbers = array_slice($numbers, 0, $count);

    // Return the result as a space-separated string
    return implode(' ', $uniqueRandomNumbers);
}

// Sample input
$min = 11;
$max = 20;

// Generate and display the unique random numbers
$output = generateUniqueRandomNumbers($min, $max);
echo $output;
?>

    
</body>
</html>