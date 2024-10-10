<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h5>Fibonacci Sequence:</h5>

    <?php
        $n = 10; // Number of terms to display
        $fibonacci = []; // Initialize an array to hold the Fibonacci numbers

        // Initialize the first two Fibonacci numbers
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        // Calculate Fibonacci numbers using a for loop
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; // Sum of the two previous numbers
        }

        // Display the Fibonacci sequence
        echo implode(', ', $fibonacci); // Join the array elements into a string and print
    ?>
</body>
</html>
