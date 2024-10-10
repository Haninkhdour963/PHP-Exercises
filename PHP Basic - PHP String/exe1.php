<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered string
    $inputString = $_POST['inputString'];

    // Convert to uppercase
    $uppercase = strtoupper($inputString);

    // Convert to lowercase
    $lowercase = strtolower($inputString);

    // Make the first letter of the string uppercase
    $firstUppercase = ucfirst($inputString);

    // Make the first letter of each word capitalized
    $titleCase = ucwords($inputString);

    // Display the results
    echo "<h3>Results:</h3>";
    echo "<p>Uppercase: $uppercase</p>";
    echo "<p>Lowercase: $lowercase</p>";
    echo "<p>First Letter Uppercase: $firstUppercase</p>";
    echo "<p>First Letter of Each Word Capitalized: $titleCase</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Conversion</title>
</head>
<body>
    <h2>Enter a String for Conversion</h2>
    <form method="post">
        <textarea name="inputString" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Convert">
    </form>
</body>
</html>
