<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function findFirstDifference($str1, $str2) {
    // Get the length of the shortest string
    $length = min(strlen($str1), strlen($str2));

    // Loop through each character of both strings
    for ($i = 0; $i < $length; $i++) {
        // Compare characters at the same position
        if ($str1[$i] !== $str2[$i]) {
            // Return the position and the differing characters
            return "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
        }
    }

    // If no differences found and lengths are the same
    if (strlen($str1) === strlen($str2)) {
        return "No differences found, strings are identical.";
    }

    // If strings are of different lengths, return the position of the first extra character
    if (strlen($str1) !== strlen($str2)) {
        return "First difference at position " . ($length + 1) . ": \"" . ($length < strlen($str1) ? $str1[$length] : 'N/A') . "\" vs \"" . ($length < strlen($str2) ? $str2[$length] : 'N/A') . "\"";
    }
}

// Example usage
$string1 = 'dragonball';
$string2 = 'dragonboll';
$result = findFirstDifference($string1, $string2);
echo $result;
?>

</body>
</html>