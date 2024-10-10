<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h5>Calculate Monthly Electricity Bill</h5>
    <br><br>
    <?php
      function calculateElectricityBill($units) {
          $bill = 0;

          switch (true) {
              case ($units <= 50):
                  $bill = $units * 2.50;
                  break;
              case ($units <= 150):
                  $bill = (50 * 2.50) + (($units - 50) * 5.00);
                  break;
              case ($units <= 250):
                  $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
                  break;
              default: // For units above 250
                  $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
                  break;
          }

          return $bill;
      }

      // Sample input for units used
      $unitsUsed = 300; // Change this value to test other scenarios
      $totalBill = calculateElectricityBill($unitsUsed);
      echo "Total Electricity Bill for $unitsUsed units: " . number_format($totalBill, 2) . " JOD"; // Format to 2 decimal places
    ?>
</body>
</html>
