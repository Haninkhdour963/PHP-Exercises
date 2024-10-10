<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate and print the factorial of a number</title>
</head>
<body>
    <h5>. Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
a number is the product of all integers up to and including that number. 
 
Sample Input: 5 
Expected Output: 120 </h5>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h5>Factorial Calculation:</h5>

    <?php
        // Sample input
        $number = 5; // You can change this value to calculate the factorial of a different number
        $factorial = 1; // Initialize factorial variable

        // Calculate factorial using a for loop
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i; // Multiply current factorial by the current number
        }

        // Display the result
        echo "<p>Factorial of $number is: $factorial</p>";
    ?>
</body>
</html>

    
</body>
</html>