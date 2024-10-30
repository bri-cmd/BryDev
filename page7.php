<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
    <span class="material-symbols-outlined">keyboard_return</span>
</a>
<div class="container">
    <h1>Loop Statements</h1>

    <!-- Form to get user input -->
    <form method="post" action="">
        <label>Enter a value for n (whole number):</label>
        <input type="number" name="n" required>
        <label>Enter a value for m (whole number):</label>
        <input type="number" name="m" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to display the multiplication table
    function multiplication_table($n, $m) {
        echo "<div class='mt'>";
        echo "<h2>Multiplication Table ($n x $m):</h2>";
        echo "<table border='1'>";
        for ($a = 1; $a <= $n; $a++) {
            echo "<tr>";
            for ($b = 1; $b <= $m; $b++) {
                echo "<td>" . ($a * $b) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve user input for n and m
        $n = $_POST['n'];
        $m = $_POST['m'];

        // Call the function to display the multiplication table
        multiplication_table($n, $m);

        // Display Fibonacci series for n
        echo "<h2>Fibonacci Series for n = $n:</h2>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $n) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }

        // Display Fibonacci series for m
        echo "<br><h2>Fibonacci Series for m = $m:</h2>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $m) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }

        // Compute factorial of n using a do...while loop
        echo "<h2>Factorial of $n:</h2>";
        $factorial = 1;
        $i = 1;
        do {
            $factorial *= $i;
            $i++;
        } while ($i <= $n);
        echo "Factorial of $n is $factorial<br>";

        // Compute summation up to m using a do...while loop
        echo "<h2>Summation up to $m:</h2>";
        $summation = 0;
        $i = 1;
        do {
            $summation += $i;
            $i++;
        } while ($i <= $m);
        echo "Summation of numbers from 1 to $m is $summation<br>";
    }
    ?>

    <div class="footer">
        Created by: Brian P. Caparoso | Date: 2024-10-15
    </div>
</div>
</body>
</html>
