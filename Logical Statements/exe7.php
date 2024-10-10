<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>largest number</title>
</head>
<body>
  <h5>Write PHP script to find the largest number between the three integers 
Sample Input: [ 1, 5, 9 ] 
Sample Output: 9</h5>
<br><br><br>
<?php 
 function isLargest($a,$b, $c) {
  return max($a, $b, $c);
 }

   // Sample input
   $numbers = [1, 5, 9];
   $largest = isLargest($numbers[0], $numbers[1], $numbers[2]);
   echo "The largest number is: $largest"; // Output the largest number

?>
</body>
</html>