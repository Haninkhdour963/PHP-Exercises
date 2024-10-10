<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h5>Find the Grade for the Student Based on Average Score</h5>
    
    <?php
        function calculateGrade($scores) {
            // Calculate the average score
            $average = array_sum($scores) / count($scores);

            // Determine the grade based on the average score using a switch statement
            switch (true) {
                case ($average < 60):
                    return 'F';
                case ($average < 70):
                    return 'D';
                case ($average < 80):
                    return 'C';
                case ($average < 90):
                    return 'B';
                case ($average < 100):
                    return 'A';
                default:
                    return 'Invalid score'; // For completeness
            }
        }

        // Sample input
        $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
        
        // Calculate the grade
        $grade = calculateGrade($scores);
        echo "The grade is: $grade"; // Output the grade
    ?>
</body>
</html>
