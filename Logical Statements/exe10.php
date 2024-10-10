<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Eligibility Check</title>
</head>
<body>
    <h5>Check if a Person is Eligible to Vote</h5>
    
    <?php
        function isEligibleToVote($age) {
            return $age >= 18; // Check if age is 18 or older
        }

        // Sample input
        $age = 15; // Change this value to test other ages

        // Output result
        if (isEligibleToVote($age)) {
            echo "The person is eligible to vote.";
        } else {
            echo "The person is not eligible to vote.";
        }
    ?>
</body>
</html>
