<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h6>
    Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
start and end position.  
Expected Output: 1-2-3-4-5-6-7-8-9-10
    </h6> <br><br><br>

    <?php
// Create an array of numbers from 1 to 10
$numbers = range(1, 10);

// Join the numbers with a dash and display the result
$output = implode('-', $numbers);
echo $output;
?>

    
</body>
</html>