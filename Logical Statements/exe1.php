<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is a leap year</title>
</head>
<body>
    <h3>Write a PHP script to see if the specified year is a leap year or not.</h3>
    <?php
       function isLeapYear( $year ) {
        if(( $year %4==0 && $year %100 != 0)|| ($year %400== 0))
        {
            return true;
        }
        else{
            return false;
        }
       }

       $year = 2013; 
if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
    ?>
</body>
</html>