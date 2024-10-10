<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Sample input string
$input = '\"\1+2/3*2:2-3/4*3';

// Remove special characters using regex
$output = preg_replace('/[^0-9]/', ' ', $input);

// Trim any extra spaces
$output = trim($output);

// Display the expected output
echo $output;
?>

</body>
</html>