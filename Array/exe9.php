<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function convertToUpperCase($colors) {
    return array_map('strtoupper', $colors);
}

// Sample Input
$colors = array("red", "blue", "white", "yellow");

// Convert to uppercase
$upperCaseColors = convertToUpperCase($colors);

// Displaying the output
print_r($upperCaseColors);
?>

</body>
</html>