<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> calculate the sum</title>
</head>
<body>
    <h4>Write a PHP script to calculate the sum of the two integers. If the two values are the same, then 
    calculate the triple of their sum. </h4>
    <br><br><br>
    <?php
    function calculateSum($firstInteger, $secondInteger) {
        if ($firstInteger === $secondInteger) {

            $sum = ($firstInteger + $secondInteger) * 3;
            return "($firstInteger + $secondInteger) * 3 = $sum";
        } else {
            // Otherwise, just calculate the sum
            $sum = $firstInteger + $secondInteger;
            return "$firstInteger + $secondInteger = $sum";
        }
    }
    
    // Example usage
    $input = ['firstInteger' => 2, 'secondInteger' => 2];
    $result = calculateSum($input['firstInteger'], $input['secondInteger']);
    echo $result;
    
    ?>
</body>
</html>