<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function replaceFirstWord($sentence, $newWord) {
    // Split the sentence into words
    $words = explode(' ', $sentence);
    
    // Replace the first word
    $words[0] = $newWord;
    
    // Join the words back into a sentence
    return implode(' ', $words);
}

// Sample input
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';

// Get the result
$result = replaceFirstWord($sentence, $newWord);

// Output the result
echo $result; // Output: Our new trainee is so genius.
?>

</body>
</html>