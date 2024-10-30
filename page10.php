<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="background">
        <div class="main">
            <div class="Head">
                <h1>Two-dimensional Array</h1>
                <div class="Instruction">
                    Task: Create an NxN array and store NxN integers in each cell. Display the following:
                    <ul>
                        <li>The sum of each row and column</li>
                        <li>Average of each row and column</li>
                        <li>Sum and average of the two diagonals</li>
                        <li>The smallest and largest number in each row and column</li>
                        <li>Overall sum and average</li>
                        <li>Overall smallest and largest numbers</li>
                    </ul>
                </div>
            </div>

            <?php
                // Define a 5x5 array with sample numbers
                $matrix = [
                    [6, 3, 4, 1, 6],
                    [9, 2, 6, 3, 7],
                    [10, 2, 8, 1, 7],
                    [5, 6, 8, 3, 5],
                    [1, 10, 11, 3, 5],
                ];

                // Function to display overall sum, average, smallest, and largest number
                function overallSum($matrix) {
                    $sum = 0;
                    $smallest = $matrix[0][0];
                    $largest = $matrix[0][0];
                    $n = count($matrix);

                    echo "<h2>Matrix (5 x 5)</h2>";
                    echo "<table border='1' cellpadding='5' cellspacing='2' style='margin: 0 auto;'>";
                    for ($i = 0; $i < $n; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $n; $j++) {
                            $sum += $matrix[$i][$j];
                            if ($matrix[$i][$j] < $smallest) $smallest = $matrix[$i][$j];
                            if ($matrix[$i][$j] > $largest) $largest = $matrix[$i][$j];
                            echo "<td>" . $matrix[$i][$j] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table><br>";

                    $average = $sum / ($n * $n);
                    echo "<table style='margin: 0 auto; text-align: left;'>";
                    echo "<tr><td><b>Overall Sum:</b></td><td>$sum</td></tr>";
                    echo "<tr><td><b>Overall Average:</b></td><td>" . number_format($average, 2) . "</td></tr>";
                    echo "<tr><td><b>Overall Smallest Number:</b></td><td>$smallest</td></tr>";
                    echo "<tr><td><b>Overall Largest Number:</b></td><td>$largest</td></tr>";
                    echo "</table><br>";
                }

                // Function to calculate the sum and average of each row
                function rowSums($matrix) {
                    $n = count($matrix);
                    echo "<h2>Row Sums and Averages</h2>";
                    echo "<table style='margin: 0 auto;'>";
                    for ($i = 0; $i < $n; $i++) {
                        $sum = array_sum($matrix[$i]);
                        $average = $sum / $n;
                        echo "<tr><td>Row " . ($i + 1) . " Sum:</td><td><b>$sum</b></td><td>Average:</td><td><b>" . number_format($average, 2) . "</b></td></tr>";
                    }
                    echo "</table><br>";
                }

                // Function to calculate the sum and average of each column
                function columnSums($matrix) {
                    $n = count($matrix);
                    echo "<h2>Column Sums and Averages</h2>";
                    echo "<table style='margin: 0 auto;'>";
                    for ($j = 0; $j < $n; $j++) {
                        $sum = 0;
                        for ($i = 0; $i < $n; $i++) {
                            $sum += $matrix[$i][$j];
                        }
                        $average = $sum / $n;
                        echo "<tr><td>Column " . ($j + 1) . " Sum:</td><td><b>$sum</b></td><td>Average:</td><td><b>" . number_format($average, 2) . "</b></td></tr>";
                    }
                    echo "</table><br>";
                }

                // Function to calculate the sum and average of the main diagonal (top-left to bottom-right)
                function mainDiagonalSum($matrix) {
                    $n = count($matrix);
                    $sum = 0;
                    for ($i = 0; $i < $n; $i++) {
                        $sum += $matrix[$i][$i];
                    }
                    $average = $sum / $n;
                    echo "<table style='margin: 0 auto;'>";
                    echo "<tr><td>Main Diagonal Sum:</td><td><b>$sum</b></td><td>Average:</td><td><b>" . number_format($average, 2) . "</b></td></tr>";
                    echo "</table><br>";
                }

                // Function to calculate the sum and average of the secondary diagonal (top-right to bottom-left)
                function secondaryDiagonalSum($matrix) {
                    $n = count($matrix);
                    $sum = 0;
                    for ($i = 0; $i < $n; $i++) {
                        $sum += $matrix[$i][$n - $i - 1];
                    }
                    $average = $sum / $n;
                    echo "<table style='margin: 0 auto;'>";
                    echo "<tr><td>Secondary Diagonal Sum:</td><td><b>$sum</b></td><td>Average:</td><td><b>" . number_format($average, 2) . "</b></td></tr>";
                    echo "</table><br>";
                }

                // Displaying the results
                overallSum($matrix);
                rowSums($matrix);
                columnSums($matrix);
                echo "<h2>Diagonal Sums and Averages</h2>";
                mainDiagonalSum($matrix);
                secondaryDiagonalSum($matrix);
            ?>
        <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
        </div>
    </div>
</body>
</html>
