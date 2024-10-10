<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> remove duplicates from an array</title>
</head>
<body>
  <h1>Write a PHP function to remove duplicates from an array ? 
Sample Input:   
$array1 = array(2, 4, 7, 4, 8, 4); 
Expected Output: 
$array1 = array(2, 4, 7, 8);</h1>


<?php
    function removeDuplicates($array) {
      
      return array_values(array_unique($array));
  }
  
  // Example usage
  $array1 = array(2, 4, 7, 4, 8, 4);
  $array1 = removeDuplicates($array1);
  
  print_r($array1); 
  

?>
</body>
</html>