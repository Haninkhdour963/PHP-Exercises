<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$email = 'info@orange.com';

// Use explode to split the email by the '@' character
list($username, $domain) = explode('@', $email);

// Output the username
echo $username;
?>

</body>
</html>