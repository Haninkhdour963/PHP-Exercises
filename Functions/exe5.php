<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP function to check if a number is an Armstrong number or not ? </title>
</head>
<body>
    <?php 
          function isArmstrong($number)
          {
            $digit=str_split($number);
            $numDigits=count($digit);
            $sum=0;
            foreach ($digit as $digit) {
                $sum +=pow($digit,$numDigits);
          }
          return $sum===$number;
        }
      $number=153;
      if(isArmstrong($number)) {
        echo "$number is an Armstrong number.";
    } else {
        echo "$number is not an Armstrong number.";
      }

    
    ?>

</body>
</html>