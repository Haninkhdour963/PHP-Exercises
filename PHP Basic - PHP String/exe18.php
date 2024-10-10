<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Sample numeric string
$numericString = '2,543.12';

// Remove commas
$cleanedString = str_replace(',', '', $numericString);

// Display the expected output
echo $cleanedString; // Output: 2543.12
?>

</body>
</html>