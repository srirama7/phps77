<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>
    <h2>BMI Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="weight">Weight (kg):</label><br>
        <input type="text" name="weight" required><br><br>
        <label for="height">Height (cm):</label><br>
        <input type="text" name="height" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $h = $_POST["height"];
        $w = $_POST["weight"];
        $h2 = $h * $h;
        $bmi = $w / $h2;

        if ($bmi <= 18.5) {
            echo "You are underweight.";
        } else if ($bmi > 18.5 && $bmi <= 25) {
            echo "You are normal.";
        } else {
            echo "You are overweight.";
        }
    }
    ?>
</body>
</html>
