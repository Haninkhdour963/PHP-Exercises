<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function findLowestNonZero($array) {
    // Filter out zeros and non-integer values
    $nonZeroArray = array_filter($array, function($value) {
        return $value !== 0;
    });

    // Return null if no non-zero integers are found
    if (empty($nonZeroArray)) {
        return null;
    }

    // Find and return the minimum value
    return min($nonZeroArray);
}

// Sample input
$array1 = array(2, 0, 10, 12, 6);

// Get the result
$result = findLowestNonZero($array1);

// Display the result
echo $result !== null ? $result : "No non-zero integers found.";
?>

</body>
</html>