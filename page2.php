<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables - Input Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
    <span class="material-symbols-outlined">keyboard_return</span>
</a>
<div class="container">
    <h1>The Use of Variables</h1>
    <form method="POST" action="">
        <div class="row">
            <div class="column">
                <h3>Input Whole Numbers:</h3>
                <input type="number" name="whole1">
                <input type="number" name="whole2">
                <input type="number" name="whole3">
                <input type="number" name="whole4">
                <input type="number" name="whole5">
            </div>

            <div class="column">
                <h3>Input Floating Point Numbers:</h3>
                <input type="text" name="float1">
                <input type="text" name="float2">
                <input type="text" name="float3">
                <input type="text" name="float4">
                <input type="text" name="float5">
            </div>
        </div>

        <div class="row">
            <div class="column">
                <h3>Input Strings (Descriptions):</h3>
                <input type="text" name="string1">
                <input type="text" name="string2">
                <input type="text" name="string3">
                <input type="text" name="string4">
                <input type="text" name="string5">
            </div>

            <div class="column">
                <h3>Input Characters:</h3>
                <input type="text" name="char1" maxlength="1">
                <input type="text" name="char2" maxlength="1">
                <input type="text" name="char3" maxlength="1">
                <input type="text" name="char4" maxlength="1">
                <input type="text" name="char5" maxlength="1">
            </div>
        </div>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $allFieldsFilled = true;

        // Check if each input is filled
        for ($i = 1; $i <= 5; $i++) {
            if (empty($_POST["whole$i"]) || empty($_POST["float$i"]) || empty($_POST["string$i"]) || empty($_POST["char$i"])) {
                $allFieldsFilled = false;
                break;
            }
        }

        if ($allFieldsFilled) {
            echo "<div class='output'>";
            echo "<h2>Submitted Values:</h2>";

            // Display Whole Numbers
            echo "<h3>Whole Numbers:</h3>";
            for ($i = 1; $i <= 5; $i++) {
                echo "Whole Number $i: " . htmlspecialchars($_POST["whole$i"]) . "<br>";
            }

            // Display Floating Point Numbers
            echo "<h3>Floating Point Numbers:</h3>";
            for ($i = 1; $i <= 5; $i++) {
                echo "Floating Point $i: " . htmlspecialchars($_POST["float$i"]) . "<br>";
            }

            // Display Strings
            echo "<h3>Strings (Descriptions):</h3>";
            for ($i = 1; $i <= 5; $i++) {
                echo "String $i: " . htmlspecialchars($_POST["string$i"]) . "<br>";
            }

            // Display Characters
            echo "<h3>Characters:</h3>";
            for ($i = 1; $i <= 5; $i++) {
                echo "Character $i: " . htmlspecialchars($_POST["char$i"]) . "<br>";
            }

            echo "</div>";
        } else {
            echo "<div class='error-message' style='color: red; font-weight: bold;'>";
            echo "<br> Invalid input: Please fill in all before submitting.";
            echo "</div>";
        }
    }
    ?>

    <div class="footer">
        Created by: Brian P. Caparoso | Date: 2024-10-15
    </div>
</div>

</body>
</html>
