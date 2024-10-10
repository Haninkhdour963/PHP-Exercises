<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> sum of the two given numbers equals 30</title>
</head>
<body>
    <h4>Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the 
return their sum otherwise return false 
Sample Input: [ firstInteger  =>  10 , secondInteger => 10] 
Sample Output: ‘false’</h4>
<br><br><br>
<?php
   function checkSumEqualsThirty($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    
    if ($sum === 30) {
        return $sum; 
    } else {
        return false; 
    }
}

// Example usage
$input = ['firstInteger' => 20, 'secondInteger' => 10];
$result = checkSumEqualsThirty($input['firstInteger'], $input['secondInteger']);
echo $result ? $result : 'false'; // Output 'false' if the result is false

   
?>
</body>
</html>