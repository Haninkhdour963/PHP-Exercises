<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function getNextLetter($letter) {
    // Ensure the input is a single character
    if (strlen($letter) !== 1 || !ctype_alpha($letter)) {
        return "Please input a single letter.";
    }
    
    // Convert the letter to lowercase for uniformity
    $lowerLetter = strtolower($letter);
    
    // Check if the letter is 'z' and wrap around to 'a'
    if ($lowerLetter === 'z') {
        return 'a';
    }

    // Get the ASCII value of the letter and add one
    $nextLetter = chr(ord($lowerLetter) + 1);
    
    // Return the next letter
    return $nextLetter;
}

// Example usage
$input = 'a'; // Change this input to test other letters
$output = getNextLetter($input);
echo "The next letter of '{$input}' is '{$output}'.\n";
?>

</body>
</html>