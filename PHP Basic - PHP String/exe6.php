<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Sample email string
$email = 'info@orange.com';

// Get the last three characters
$lastThreeChars = substr($email, -3);

// Output the result
echo $lastThreeChars;
?>

</body>
</html>