<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP script to check if the all string characters are lower cases</title>
</head>
<body>
    <form method="post">
        <label for="inputString">Enter a: String</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Check">
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $inputString=$_POST['inputString'];

        if($inputString===strtolower($inputString)){
            echo"<h2>All characters are lowercase $inputString</h2>";
        }
        else{
            echo"<h2>Not All characters are lowercase $inputString</h2>";
        }

    }
    
    
    ?>
</body>
</html>