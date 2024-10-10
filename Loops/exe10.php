<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <h5>FizzBuzz Output:</h5>
    <pre>
    <?php
        // Loop through numbers from 1 to 50
        for ($i = 1; $i <= 50; $i++) {
            // Check for multiples of both 3 and 5
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            }
            // Check for multiples of 3
            elseif ($i % 3 == 0) {
                echo "Fizz ";
            }
            // Check for multiples of 5
            elseif ($i % 5 == 0) {
                echo "Buzz ";
            }
            // Print the number if it's neither
            else {
                echo "$i ";
            }
        }
    ?>
    </pre>
</body>
</html>
