<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h5>Multiplication Table:</h5>

    <table cellpadding="3px" cellspacing="0px" border="1">
        <?php
            // Loop through rows (1 to 6)
            for ($i = 1; $i <= 6; $i++) {
                echo "<tr>"; // Start a new row
                // Loop through columns (1 to 5)
                for ($j = 1; $j <= 5; $j++) {
                    $result = $i * $j; // Calculate the multiplication
                    echo "<td>$i * $j = $result</td>"; // Output the result in a table cell
                }
                echo "</tr>"; // End the row
            }
        ?>
    </table>
</body>
</html>
