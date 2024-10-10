<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP script to reverse a string</title>
</head>
<body>
    <h1>reverse a string</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required><br><br>
        <input type="submit" value="Reverse">
    </form>

    <?php
       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
        $inputString=$_POST['inputString'];
        $reverseString=strrev($inputString);
        echo"<h2>Reversed string : $reverseString</h2>";
       }
    
    
    ?>

</body>
</html>