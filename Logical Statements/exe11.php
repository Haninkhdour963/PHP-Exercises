<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Check</title>
</head>
<body>
    <h5>Check if a Number is Positive, Negative, or Zero</h5>
    
    <?php
        function checkNumber($number) {
            if ($number > 0) {
                return 'Positive';
            } elseif ($number < 0) {
                return 'Negative';
            } else {
                return 'Zero';
            }
        }

        // Sample input
        $inputNumber = -60; // Change this value to test other numbers

        // Output result
        $result = checkNumber($inputNumber);
        echo "The number is: $result"; // Output the result
    ?>
</body>
</html>
