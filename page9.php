<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css"> <!-- Link to your existing CSS file -->
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="background">
        <div class="main">
            <div class="Head">
                <h1>Single-dimensional Array</h1>
                <div class="Instruction">
                    Task: Create a parallel array with ten people's information, including their name,
                    age, sex, and nationality. Sort them in ascending order using the name as the key.
                    Display both unsorted and sorted lists. Use a user-defined function in performing
                    the sort and display.<br><br>
                </div>
            </div>

            <h2>Unsorted List</h2>
            <?php
                // Define parallel arrays for people's details
                $names = array("Cedric", "Don", "Brian", "Luke", "Jane", "Rose", "Maria", "Anastasia", "Eiichiro", "Mario");
                $ages = array(20, 21, 19, 15, 18, 22, 25, 12, 30, 22);
                $sexes = array('M', 'M', 'M', 'M', 'F', 'F', 'F', 'F', 'M', 'M');
                $nationalities = array("American", "Thai", "Korean", "Canadian", "Filipino", "Swedish", "Mexican", "British", "Japanese", "Italian");

                // Function to display people's information in a table
                function displayTable($names, $ages, $sexes, $nationalities) {
                    echo "<table border='1' cellpadding='5' cellspacing='0'>";
                    echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
                    for ($i = 0; $i < count($names); $i++) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($names[$i]) . "</td>";
                        echo "<td>" . htmlspecialchars($ages[$i]) . "</td>";
                        echo "<td>" . htmlspecialchars($sexes[$i]) . "</td>";
                        echo "<td>" . htmlspecialchars($nationalities[$i]) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table><br>";
                }

                // Display unsorted list in table format
                displayTable($names, $ages, $sexes, $nationalities);

                // Sorting function to sort people by name in ascending order
                function sortByName(&$names, &$ages, &$sexes, &$nationalities) {
                    $n = count($names);
                    for ($i = 0; $i < $n - 1; $i++) {
                        for ($j = $i + 1; $j < $n; $j++) {
                            if ($names[$i] > $names[$j]) {
                                // Swap names
                                $temp = $names[$i];
                                $names[$i] = $names[$j];
                                $names[$j] = $temp;

                                // Swap corresponding ages
                                $temp = $ages[$i];
                                $ages[$i] = $ages[$j];
                                $ages[$j] = $temp;

                                // Swap corresponding sexes
                                $temp = $sexes[$i];
                                $sexes[$i] = $sexes[$j];
                                $sexes[$j] = $temp;

                                // Swap corresponding nationalities
                                $temp = $nationalities[$i];
                                $nationalities[$i] = $nationalities[$j];
                                $nationalities[$j] = $temp;
                            }
                        }
                    }
                }

                // Sort arrays by name
                sortByName($names, $ages, $sexes, $nationalities);

                // Display sorted list in table format
                echo "<h2>Sorted List (by Name in Ascending Order)</h2>";
                displayTable($names, $ages, $sexes, $nationalities);
            ?>
        <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>   
        </div>
    </div>
</body>
</html>
