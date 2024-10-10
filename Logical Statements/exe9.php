<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h6>Write a PHP script to make a calculator, which includes the four main operations:</h6>
    <ul>
        <li>Addition</li>
        <li>Subtraction</li>
        <li>Multiplication</li>
        <li>Division</li>
    </ul>
    
    <?php
        function isAddition($a, $b) {
            return $a + $b;
        }

        function isSubtraction($a, $b) {
            return $a - $b;
        }

        function isMultiplication($a, $b) {
            return $a * $b;
        }

        function isDivision($a, $b) {
            return $b != 0 ? $a / $b : 'Division by zero error!';
        }

        // Sample input numbers
        $num1 = 4;
        $num2 = 4;

        // Output results
        echo "Addition: " . isAddition($num1, $num2) . "<br>";
        echo "Subtraction: " . isSubtraction($num1, $num2) . "<br>";
        echo "Multiplication: " . isMultiplication($num1, $num2) . "<br>";
        echo "Division: " . isDivision($num1, $num2) . "<br>";
    ?>
</body>
</html>
