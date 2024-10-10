<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Initialize an array to hold the results
$divisibleBy4 = [];

// Loop through the numbers from 200 to 250
for ($i = 200; $i <= 250; $i++) {
    // Check if the number is divisible by 4
    if ($i % 4 == 0) {
        // Add the number to the results array
        $divisibleBy4[] = $i;
    }
}

// Display the results as a comma-separated string
echo implode(',', $divisibleBy4);
?>

</body>
</html>