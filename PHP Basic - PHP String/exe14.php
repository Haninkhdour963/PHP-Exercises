<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$originalString = 'The quick brown fox jumps over the lazy dog';
$wordToRemove = 'fox';

// Remove the word
$modifiedString = str_replace($wordToRemove, '', $originalString);

// Clean up extra spaces
$modifiedString = preg_replace('/\s+/', ' ', trim($modifiedString));

echo $modifiedString; // Output: 'The quick brown jumps over the lazy dog'
?>

</body>
</html>