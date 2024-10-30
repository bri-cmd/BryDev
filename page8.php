<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions - Loan Calculator</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="container">
        <h1>Loan Calculator</h1>

        <form method="post" action="">
            <label>Loan Amount (in PHP):</label>
            <input type="number" name="loanAmount" required>

            <label>Annual Interest Rate (in %):</label>
            <input type="number" step="0.01" name="interestRate" required>

            <label>Loan Term (in years):</label>
            <input type="number" name="loanTerm" required>

            <input type="submit" value="Calculate">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loanAmount = $_POST['loanAmount'];
            $interestRate = $_POST['interestRate'];
            $loanTerm = $_POST['loanTerm'];

            // User-defined functions

            // Function 1: Convert annual interest rate to monthly
            function monthlyInterestRate($annualRate) {
                return $annualRate / 12 / 100;
            }

            // Function 2: Calculate total number of payments
            function totalPayments($years) {
                return $years * 12;
            }

            // Function 3: Calculate monthly payment
            function monthlyPayment($loan, $monthlyRate, $payments) {
                return $loan * $monthlyRate / (1 - pow(1 + $monthlyRate, -$payments));
            }

            // Function 4: Calculate total payment
            function totalPayment($monthly, $payments) {
                return $monthly * $payments;
            }

            // Function 5: Calculate total interest
            function totalInterest($total, $loan) {
                return $total - $loan;
            }

            // Function 6: Display formatted money amount
            function formatMoney($amount) {
                return "PHP " . number_format($amount, 2);
            }

            // Function 7: Display loan summary
            function displayLoanSummary($loan, $rate, $term) {
                echo "<h2>Loan Summary</h2>";
                echo "Loan Amount: " . formatMoney($loan) . "<br>";
                echo "Annual Interest Rate: $rate%<br>";
                echo "Loan Term: $term years<br><br>";
            }

            // Function 8: Display payment summary
            function displayPaymentSummary($monthly, $total, $interest) {
                echo "<h2>Payment Summary</h2>";
                echo "Monthly Payment: " . formatMoney($monthly) . "<br>";
                echo "Total Payment: " . formatMoney($total) . "<br>";
                echo "Total Interest: " . formatMoney($interest) . "<br><br>";
            }

            // Function 9: Display payment breakdown
            function displayBreakdown($loan, $monthlyRate, $payments) {
                echo "<h2>Payment Breakdown (Principal and Interest)</h2>";
                $balance = $loan;
                for ($i = 1; $i <= $payments; $i++) {
                    $interestPayment = $balance * $monthlyRate;
                    $principalPayment = $monthlyRate / (1 - pow(1 + $monthlyRate, -$payments));
                    $balance -= $principalPayment;
                    echo "Payment $i: Principal = " . formatMoney($principalPayment) . ", Interest = " . formatMoney($interestPayment) . ", Remaining Balance = " . formatMoney($balance) . "<br>";
                }
            }

            // Function 10: Display function explanations
            function functionExplanations() {
                echo "<h2>Function Explanations</h2>";
                echo "1. <strong>monthlyInterestRate()</strong>: Converts annual rate to monthly.<br>";
                echo "2. <strong>totalPayments()</strong>: Calculates total number of monthly payments.<br>";
                echo "3. <strong>monthlyPayment()</strong>: Calculates monthly payment.<br>";
                echo "4. <strong>totalPayment()</strong>: Calculates total payment over the loan term.<br>";
                echo "5. <strong>totalInterest()</strong>: Calculates total interest paid.<br>";
                echo "6. <strong>formatMoney()</strong>: Formats numbers as currency.<br>";
                echo "7. <strong>displayLoanSummary()</strong>: Shows the loan details.<br>";
                echo "8. <strong>displayPaymentSummary()</strong>: Shows payment details.<br>";
                echo "9. <strong>displayBreakdown()</strong>: Breaks down each monthly payment into principal and interest.<br>";
                echo "10. <strong>functionExplanations()</strong>: Displays explanations of each function.<br>";
            }

            // Calculations
            $monthlyRate = monthlyInterestRate($interestRate);
            $payments = totalPayments($loanTerm);
            $monthly = monthlyPayment($loanAmount, $monthlyRate, $payments);
            $total = totalPayment($monthly, $payments);
            $interest = totalInterest($total, $loanAmount);

            // Display results
            displayLoanSummary($loanAmount, $interestRate, $loanTerm);
            displayPaymentSummary($monthly, $total, $interest);
            displayBreakdown($loanAmount, $monthlyRate, $payments);
            functionExplanations();
        }
        ?>
    <div class="footer">
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
    </div>

</body>
</html>
