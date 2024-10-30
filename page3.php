<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers - Grades Calculation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="container">
        <h1>Manipulating Numbers</h1>
        <form method="post" action="">
            <div class="row">
                <div class="column">
                    <label>Average Quizzes Grade:</label>
                    <input type="number" name="avg_quizzes" step="0.01" required>
                </div>

                <div class="column">
                    <label>Average Project Grade:</label>
                    <input type="number" name="avg_project" step="0.01" required>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Midterm Exam Grade:</label>
                    <input type="number" name="midterm_exam" step="0.01" required>
                </div>

                <div class="column">
                    <label>Tentative Final Exam Grade:</label>
                    <input type="number" name="final_exam" step="0.01" required>
                </div>
            </div>

            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the form inputs
            $avg_quizzes = $_POST['avg_quizzes'];
            $avg_project = $_POST['avg_project'];
            $midterm_exam = $_POST['midterm_exam'];
            $final_exam = $_POST['final_exam'];

            // Compute midterm grade
            $midterm_grade = ($avg_quizzes * 0.30) + ($avg_project * 0.20) + ($midterm_exam * 0.50);

            // Compute final-final grade
            $final_final_grade = ($midterm_grade + $final_exam) / 2;

            // Display the results
            echo "<div class='output'>";
            echo "<h2>Computed Grades</h2>";
            echo "<p>Midterm Grade: " . number_format($midterm_grade, 2) . "</p>";
            echo "<p>Final-Final Grade: " . number_format($final_final_grade, 2) . "</p>";
            echo "</div>";
        }
        ?>
        <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
    </div>

</body>
</html>
