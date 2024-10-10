<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, 
the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. 
Nixon" 
The words 'red', 'green' and 'white' should come from $colors array</h5>

<?php
// Define the colors array
$colors = ['red', 'green', 'white'];

// Generate the paragraph
$paragraph = sprintf(
    '             "The memory of that scene for me is like a frame of film forever frozen at that moment: the %s carpet, the %s lawn, the %s house, the leaden sky. The new president and his first lady. - Richard M. Nixon"',
    $colors[0], // red
    $colors[1], // green
    $colors[2]  // white
);

// Output the paragraph
echo $paragraph;
?>


</body>
</html>




