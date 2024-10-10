<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function generateRandomPassword($length = 12, $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz') {
    $charactersLength = strlen($characters);
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        // Get a random index from the characters string
        $randomIndex = random_int(0, $charactersLength - 1);
        // Append the character at that index to the password
        $randomPassword .= $characters[$randomIndex];
    }

    return $randomPassword;
}

// Example usage
$passwordLength = 12; // Change this value to set the length of the password
$randomPassword = generateRandomPassword($passwordLength);
echo $randomPassword;
?>

</body>
</html>