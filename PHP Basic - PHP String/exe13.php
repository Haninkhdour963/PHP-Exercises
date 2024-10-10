<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function removeLeadingZeroes($numberString) {
    // Remove leading zeroes and ensure proper formatting for decimals
    $numberString = ltrim($numberString, '0');
    
    // Handle case where the number is just '0'
    if ($numberString === '') {
        return '0';
    }

    return $numberString;
}

$originalString = '0000657022.24';
$result = removeLeadingZeroes($originalString);
echo $result; // Output: 65722.24
?>

</body>
</html>