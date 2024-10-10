<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Number Checker</title>
</head>
<body>
  <h1>Check if the inserted number is a prime number</h1><br><br><br>

  <?php
  function isPrime($number) {
      // Check if the number is less than 2
      if ($number < 2) {
          return false;
      }
      // Check for factors from 2 to the square root of the number
      for ($i = 2; $i <= sqrt($number); $i++) {
          if ($number % $i == 0) {
              return false; // Found a factor, so it's not prime
          }
      }
      return true; // No factors found, it's prime
  }

  // Example usage
  $inputNumber = 3; // You can change this number to test
  if (isPrime($inputNumber)) {
      echo "$inputNumber is a prime number.";
  } else {
      echo "$inputNumber is not a prime number.";
  }
  ?>
</body>
</html>
