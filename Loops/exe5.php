<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pattern</title>
</head>
<body>
    <h5>Generated Pattern:</h5>
    <pre>
    <?php
        $rows = 5; // Number of rows

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $rows; $j++) {
                // Print the current row number at the correct position
                if ($i == $j) {
                    echo ($i + 1) . ' '; // Output numbers starting from 1
                } else {
                    echo '0 '; // Output 0s for other positions
                }
            }
            echo "<br>"; // New line after each row
        }
    ?>
    </pre>
</body>
</html>
