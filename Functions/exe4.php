<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a PHP function to swap to variables? </title>
</head>
<body>
    <h1>Write a PHP function to swap to variables? </h1>
    <?php
function swap(&$a, &$b) {
    $temp = $a; 
    $a = $b;   
    $b = $temp; 
}

// Example usage
$x = 5;
$y = 10;

echo "Before swapping: x = $x, y = $y<br>";
swap($x, $y);
echo "After swapping: x = $x, y = $y";
?>

</body>
</html>