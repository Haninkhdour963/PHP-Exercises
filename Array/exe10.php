<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function convertToLowerCase($colors) {
    return array_map('strtolower', $colors);
}

// Sample Input
$colors = array("RED", "BLUE", "WHITE", "YELLOW");

// Convert to lowercase
$lowerCaseColors = convertToLowerCase($colors);

// Displaying the output
echo "Orange Restricted\n";
echo "Orange Restricted\n";
print_r($lowerCaseColors);
?>

</body>
</html>