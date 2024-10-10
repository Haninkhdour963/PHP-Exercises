<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check the season depending on the inserted temperature</title>
</head>
<body>
    <h4>Write a PHP script to check the season depending on the inserted temperature if the 
temperature is below 20, we are in winter otherwise the season is summer. 
</h4><br><br><br>

<?php
    function checkSeason($temperature){
        if($temperature < 20){
            return "we are in winter";
        }else{
            return "the season is summer. ";
        }
    }
    $temperature=27;
    echo checkSeason($temperature);

?>

</body>


</html>