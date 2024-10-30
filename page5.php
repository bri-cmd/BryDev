<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="container">
        <h1>Using Constants</h1>

        <?php
        // Define 10 constants
        define("PI", 3.14159);
        define("GRAVITY", 9.81);
        define("SPEED_OF_LIGHT", 299792458);  // in meters per second
        define("E", 2.71828);  // Euler's number
        define("PLANCK", 6.62607015e-34);  // Planck's constant
        define("AVOGADRO", 6.02214076e23);  // Avogadro's number
        define("BOLTZMANN", 1.380649e-23);  // Boltzmann constant
        define("EARTH_RADIUS", 6371);  // in kilometers
        define("GOLDEN_RATIO", 1.618);
        define("ATMOSPHERIC_PRESSURE", 101325);  // in Pascals

        // Display the constants and examples of their usage
        echo "<h2>Defined Constants and Examples:</h2>";

        // PI example
        echo "1. PI: " . PI . "<br>";
        $radius = 10;
        $circumference = 2 * PI * $radius;
        echo "   Example: Circumference of a circle (radius 10): $circumference <br><br>";

        // GRAVITY example
        echo "2. Gravity: " . GRAVITY . " m/s²<br>";
        $mass = 70;  // mass in kilograms
        $weight = $mass * GRAVITY;
        echo "   Example: Weight of a 70kg object on Earth: $weight N<br><br>";

        // SPEED_OF_LIGHT example
        echo "3. Speed of Light: " . SPEED_OF_LIGHT . " m/s<br>";
        $distance = 1000000;  // distance in meters
        $time = $distance / SPEED_OF_LIGHT;
        echo "   Example: Time for light to travel 1,000,000 meters: $time seconds<br><br>";

        // E example
        echo "4. Euler's Number (E): " . E . "<br>";
        $exponential = pow(E, 2);
        echo "   Example: E^2: $exponential<br><br>";

        // PLANCK example
        echo "5. Planck's Constant: " . PLANCK . " J·s<br>";
        $frequency = 5e14;  // in Hz
        $energy = PLANCK * $frequency;
        echo "   Example: Energy of a photon with frequency 5e14 Hz: $energy J<br><br>";

        // AVOGADRO example
        echo "6. Avogadro's Number: " . AVOGADRO . "<br>";
        $moles = 2;  // moles of substance
        $molecules = $moles * AVOGADRO;
        echo "   Example: Number of molecules in 2 moles of substance: $molecules<br><br>";

        // BOLTZMANN example
        echo "7. Boltzmann Constant: " . BOLTZMANN . " J/K<br>";
        $temperature = 300;  // temperature in Kelvin
        $energy_per_molecule = BOLTZMANN * $temperature;
        echo "   Example: Energy per molecule at 300K: $energy_per_molecule J<br><br>";

        // EARTH_RADIUS example
        echo "8. Earth's Radius: " . EARTH_RADIUS . " km<br>";
        $earth_circumference = 2 * PI * EARTH_RADIUS;
        echo "   Example: Circumference of the Earth: $earth_circumference km<br><br>";

        // GOLDEN_RATIO example
        echo "9. Golden Ratio: " . GOLDEN_RATIO . "<br>";
        $length = 100;  // arbitrary length
        $golden_length = $length * GOLDEN_RATIO;
        echo "   Example: Golden ratio applied to length 100: $golden_length<br><br>";

        // ATMOSPHERIC_PRESSURE example
        echo "10. Atmospheric Pressure: " . ATMOSPHERIC_PRESSURE . " Pascals<br>";
        $force = ATMOSPHERIC_PRESSURE * 1;  // for an area of 1m²
        echo "   Example: Force exerted by air on 1m² area: $force N<br><br>";
        ?>
    <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
    </div>

</body>
</html>
