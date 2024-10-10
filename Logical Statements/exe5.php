<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check if value is in the range of [20-50] inclusive</title>
</head>
<body>
    <h5>Write a PHP script to check if the integer value is in the range of [20-50] inclusive.</h5>
    <br><br><br>
    <?php
      function isRange($number) {
        // Check if the number is between 20 and 50 inclusive
        if ($number >= 20 && $number <= 50) {
            return 'true'; // Return true if in range
        } else {
            return 'false'; // Return false if not in range
        }
      }

      $number = 10; // Sample input number
      echo isRange($number); // Output the result
    ?>
</body>
</html>
