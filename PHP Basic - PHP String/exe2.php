<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered numeric string
    $inputString = $_POST['inputString'];

    // Check if the input is a valid numeric string with length of 6
    if (preg_match('/^\d{6}$/', $inputString)) {
        // Split the string into hours, minutes, and seconds
        $hours = substr($inputString, 0, 2);
        $minutes = substr($inputString, 2, 2);
        $seconds = substr($inputString, 4, 2);

        // Format the output
        $formattedTime = "{$hours}:{$minutes}:{$seconds}";
    } else {
        $formattedTime = "Invalid input. Please enter a 6-digit numeric string.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Time Formatter</title>
</head>
<body>
    <h2>Enter a Numeric String</h2>
    <form method="post">
        <input type="text" name="inputString" maxlength="6" placeholder="e.g. 085119"><br>
        <input type="submit" value="Convert">
    </form>

    <?php if (isset($formattedTime)): ?>
        <h3>Formatted Time:</h3>
        <p><?php echo htmlspecialchars($formattedTime); ?></p>
    <?php endif; ?>
</body>
</html>
