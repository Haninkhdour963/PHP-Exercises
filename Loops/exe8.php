<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count 'c' Characters</title>
</head>
<body>
    <h5>Counting 'c' Characters:</h5>

    <?php
        $text = "Orange Coding Academy"; // Sample input text
        $count = substr_count(strtolower($text), 'c'); // Count 'c' characters, case-insensitive

        // Display the result
        echo "<p>Number of 'c' characters: $count</p>";
    ?>
</body>
</html>

</body>
</html>