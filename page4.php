<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="container">
        <h1>Using Math Functions</h1>

        <!-- Simple form for input -->
        <form method="post" action="">
            <div class="row">
                <div class="column">
                    <h3>Enter Five Floating Point Numbers</h3>
                    <label>Float 1:</label>
                    <input type="text" name="float1" required>
                    <label>Float 2:</label>
                    <input type="text" name="float2" required>
                    <label>Float 3:</label>
                    <input type="text" name="float3" required>
                    <label>Float 4:</label>
                    <input type="text" name="float4" required>
                    <label>Float 5:</label>
                    <input type="text" name="float5" required>
                </div>

                <div class="column">
                    <h3>Enter Five Whole Numbers</h3>
                    <label>Whole 1:</label>
                    <input type="text" name="whole1" required>
                    <label>Whole 2:</label>
                    <input type="text" name="whole2" required>
                    <label>Whole 3:</label>
                    <input type="text" name="whole3" required>
                    <label>Whole 4:</label>
                    <input type="text" name="whole4" required>
                    <label>Whole 5:</label>
                    <input type="text" name="whole5" required>
                </div>
            </div>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<div class='output'>";
            // Get the input numbers from the user
            $float1 = $_POST['float1'];
            $float2 = $_POST['float2'];
            $float3 = $_POST['float3'];
            $float4 = $_POST['float4'];
            $float5 = $_POST['float5'];

            $whole1 = $_POST['whole1'];
            $whole2 = $_POST['whole2'];
            $whole3 = $_POST['whole3'];
            $whole4 = $_POST['whole4'];
            $whole5 = $_POST['whole5'];

            // Display the inputted numbers
            echo "<h2>Floating Point Numbers:</h2>";
            echo "$float1, $float2, $float3, $float4, $float5<br>";

            echo "<h2>Whole Numbers:</h2>";
            echo "$whole1, $whole2, $whole3, $whole4, $whole5<br>";

            // Demonstrating 15 math functions using the numbers
            echo "<h2>Math Functions Results:</h2>";
            echo "1. Absolute value of -$whole1: " . abs(-$whole1) . "<br>";
            echo "2. Ceil of $float1: " . ceil($float1) . "<br>";
            echo "3. Floor of $float1: " . floor($float1) . "<br>";
            echo "4. Round of $float2: " . round($float2) . "<br>";
            echo "5. Square root of $whole2: " . sqrt($whole2) . "<br>";
            echo "6. Power of $whole2^2: " . pow($whole2, 2) . "<br>";
            echo "7. Maximum of the whole numbers: " . max($whole1, $whole2, $whole3, $whole4, $whole5) . "<br>";
            echo "8. Minimum of the whole numbers: " . min($whole1, $whole2, $whole3, $whole4, $whole5) . "<br>";
            echo "9. Random number between 1 and 100: " . rand(1, 100) . "<br>";
            echo "10. Sine of 90 degrees: " . sin(deg2rad(90)) . "<br>";
            echo "11. Cosine of 0 degrees: " . cos(deg2rad(0)) . "<br>";
            echo "12. Tangent of 45 degrees: " . tan(deg2rad(45)) . "<br>";
            echo "13. Logarithm of $float3: " . log($float3) . "<br>";
            echo "14. Exponential of 1: " . exp(1) . "<br>";
            echo "15. Convert 180 degrees to radians: " . deg2rad(180) . "<br>";
            echo "</div>";
        }
        ?>
        <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
    </div>
        
</body>
</html>
