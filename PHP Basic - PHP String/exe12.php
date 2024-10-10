<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$originalString = 'The brown fox';
$insertString = 'quick';
$position = 4; // Position to insert 'quick' (after 'The')

$resultString = substr($originalString, 0, $position) . ' ' . $insertString . ' ' . substr($originalString, $position);
echo $resultString; // Output: 'The quick brown fox'
?>
<?php
$sentence = 'The quick brown fox';
$firstWord = strtok($sentence, ' '); // Get the first word

echo $firstWord; // Output: 'The'
?>

</body>
</html>