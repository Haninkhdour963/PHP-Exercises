<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Pattern</title>
</head>
<body>
    <h5>Character Pattern:</h5>

    <pre>
    <?php
        $rows = 5; // Set the number of rows for the pattern

        // Print the upper part of the pattern
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 0; $j < $i; $j++) {
                // Print letters from A to the current letter
                echo chr(65 + $j) . " "; // 65 is the ASCII value for 'A'
            }
            echo "<br>"; // Move to the next line
        }

        // Print the lower part of the pattern
        for ($i = $rows - 1; $i >= 1; $i--) {
            for ($j = 0; $j < $i; $j++) {
                // Print letters from A to the current letter
                echo chr(65 + $j) . " "; // 65 is the ASCII value for 'A'
            }
            echo "<br>"; // Move to the next line
        }
    ?>
    </pre>
</body>
</html>
