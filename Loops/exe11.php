<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floyd's Triangle</title>
</head>
<body>
    <h5>Floyd's Triangle:</h5>

    <?php
        $n = 5; // Set the number of lines for the triangle
        $number = 1; // Initialize the starting number

        // Generate Floyd's triangle
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $number . " "; // Print the current number
                $number++; // Increment the number
            }
            echo "<br>"; // Move to the next line after each row
        }
    ?>
</body>
</html>
