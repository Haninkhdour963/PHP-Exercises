<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Integers Between 0 and 30</title>
</head>
<body>
    <h5>Sum of all integers between 0 and 30:</h5>

    <?php 
        $sum = 0; // Initialize sum variable

        // Use a for loop to add integers from 0 to 30
        for ($i = 0; $i <= 30; $i++) {
            $sum += $i; // Add current number to the sum
        }

        // Display the total
        echo "<p>Total: $sum</p>";
    ?>
</body>
</html>
