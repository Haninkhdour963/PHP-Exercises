<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Sample URL
$url = 'http://www.orange.com/index.php';

// Parse the URL to get the path
$parsedUrl = parse_url($url);
$path = $parsedUrl['path'];

// Extract the file name
$fileName = basename($path);

// Output the result
echo $fileName; // Output: index.php
?>

</body>
</html>