<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested for loop.</title>
</head>
<body>
    <h5>
    Create a script to generate the following pattern, using the nested for loop.  
 
 Expected Output: 
  
 1 1 1 1 1  
1 1 1 2 2  
1 1 3 3 3  
1 4 4 4 4  
5 5 5 5 5 
    </h5><br><br><br>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Pattern</title>
</head>
<body>
    <h5>Generated Pattern:</h5>
    <pre>
    <?php
        $rows = 5; // Number of rows
        $char = '1'; // Starting character

        for ($i = 0; $i < $rows; $i++) {
            // Print characters for each row
            for ($j = 0; $j < $rows; $j++) {
                if ($j < $rows - $i - 1) {
                    // Print 'A' for the first part
                    echo $char . ' '    ;
                } else {
                    // Print the corresponding character based on the row
                    echo chr(ord($char) + $i) . ' ';
                }
            }
            echo "<br>"; // New line after each row
        }
    ?>
    </pre>
</body>
</html>

</body>
</html>