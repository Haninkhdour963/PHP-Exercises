<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> palindrome or not?</title>
</head>
<body>
  <h1>Write a PHP function that checks whether a passed string is a palindrome or not?</h1>

  <?php
      function ispalindrome($string)
      {
        $cleanString=preg_replace('/[^a-z0-9]/i', '', strtolower( $string));
        $reversedString=strrev($cleanString);
        

        return $cleanString===$reversedString;

      }
      $input = "Eva, can I see bees in a cave?";
if (isPalindrome($input)) {
    echo "Yes, it is a palindrome.";
} else {
    echo "No, it is not a palindrome.";
}
  
  ?>
</body>
</html>