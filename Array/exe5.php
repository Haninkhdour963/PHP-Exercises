<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the initial array
$array = array(1, 2, 3, 4, 5);

// Define the location and the new item
$location = 3; // Position to insert (0-based index)
$newItem = '$';

// Insert the new item at the specified location
array_splice($array, $location, 0, $newItem);

// Display the updated array
echo implode(' ', $array);
?>

</body>
</html>