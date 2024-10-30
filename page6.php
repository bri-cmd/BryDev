<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="container">
        <h1>Selection Statements</h1>

        <!-- Form to get user input -->
        <form method="post" action="">
            <h3>Enter Five Strings</h3>
            <label>String 1:</label>
            <input type="text" name="str1" required>
            <label>String 2:</label>
            <input type="text" name="str2" required>
            <label>String 3:</label>
            <input type="text" name="str3" required>
            <label>String 4:</label>
            <input type="text" name="str4" required>
            <label>String 5:</label>
            <input type="text" name="str5" required>

            <h3>Enter Five Numbers</h3>
            <label>Number 1:</label>
            <input type="number" name="num1" required>
            <label>Number 2:</label>
            <input type="number" name="num2" required>
            <label>Number 3:</label>
            <input type="number" name="num3" required>
            <label>Number 4:</label>
            <input type="number" name="num4" required>
            <label>Number 5:</label>
            <input type="number" name="num5" required>

            <input type="submit" value="Submit">
            
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve user input for strings
            $str1 = $_POST['str1'];
            $str2 = $_POST['str2'];
            $str3 = $_POST['str3'];
            $str4 = $_POST['str4'];
            $str5 = $_POST['str5'];

            // Retrieve user input for numbers
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];

            // Bubble sort for strings in ascending order
            for ($i = 0; $i < 4; $i++) {
                if ($str1 > $str2) { 
                    $temp = $str1; $str1 = $str2; $str2 = $temp; 
                }
                if ($str2 > $str3) { 
                    $temp = $str2; $str2 = $str3; $str3 = $temp;
                }
                if ($str3 > $str4) { 
                    $temp = $str3; $str3 = $str4; $str4 = $temp; 
                }
                if ($str4 > $str5) {
                     $temp = $str4; $str4 = $str5; $str5 = $temp; 
                }
            }

            echo "<h2>Strings in Ascending Order:</h2>";
            echo $str1 . "<br>";
            echo $str2 . "<br>";
            echo $str3 . "<br>";
            echo $str4 . "<br>";
            echo $str5 . "<br>";

            // Bubble sort for strings in descending order
            for ($i = 0; $i < 4; $i++) {
                if ($str1 < $str2) { $temp = $str1; $str1 = $str2; $str2 = $temp; }
                if ($str2 < $str3) { $temp = $str2; $str2 = $str3; $str3 = $temp; }
                if ($str3 < $str4) { $temp = $str3; $str3 = $str4; $str4 = $temp; }
                if ($str4 < $str5) { $temp = $str4; $str4 = $str5; $str5 = $temp; }
            }

            echo "<h2>Strings in Descending Order:</h2>";
            echo $str1 . "<br>";
            echo $str2 . "<br>";
            echo $str3 . "<br>";
            echo $str4 . "<br>";
            echo $str5 . "<br>";

            // Check if the first number is divisible by the fifth number
            echo "<h2>Number Operations:</h2>";
            if ($num1 % $num5 == 0) {
                // Calculate the sum, product, and average of the numbers
                $sum = $num1 + $num2 + $num3 + $num4 + $num5;
                $product = $num1 * $num2 * $num3 * $num4 * $num5;
                $average = $sum / 5;

                echo "Sum of numbers: $sum<br>";
                echo "Product of numbers: $product<br>";
                echo "Average of numbers: $average<br>";
            } else {
                // Bubble sort for numbers in ascending order
                for ($i = 0; $i < 4; $i++) {
                    if ($num1 > $num2) { $temp = $num1; $num1 = $num2; $num2 = $temp; }
                    if ($num2 > $num3) { $temp = $num2; $num2 = $num3; $num3 = $temp; }
                    if ($num3 > $num4) { $temp = $num3; $num3 = $num4; $num4 = $temp; }
                    if ($num4 > $num5) { $temp = $num4; $num4 = $num5; $num5 = $temp; }
                }

                echo "Numbers in Ascending Order:<br>";
                echo $num1 . "<br>";
                echo $num2 . "<br>";
                echo $num3 . "<br>";
                echo $num4 . "<br>";
                echo $num5 . "<br>";
            }
        }
        ?>
    <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
    </div>

</body>
</html>
