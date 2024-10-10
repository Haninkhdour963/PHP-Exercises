<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered sentence and word
    $sentence = $_POST['sentence'];
    $wordToFind = $_POST['word'];

    // Check if the word exists in the sentence (case-insensitive)
    if (stripos($sentence, $wordToFind) !== false) {
        $result = "Word Found!";
    } else {
        $result = "Word Not Found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Word Checker</title>
</head>
<body>
    <h2>Check for a Word in a Sentence</h2>
    <form method="post">
        <textarea name="sentence" rows="4" cols="50" placeholder="Enter your sentence here..."></textarea><br>
        <input type="text" name="word" placeholder="Enter word to find"><br>
        <input type="submit" value="Check">
    </form>

    <?php if (isset($result)): ?>
        <h3>Result:</h3>
        <p><?php echo htmlspecialchars($result); ?></p>
    <?php endif; ?>
</body>
</html>
