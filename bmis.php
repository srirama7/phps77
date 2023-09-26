<!DOCTYPE html>
<html>
<head>
  <title>BMI Calculator</title>
</head>
<body>
  <h2>BMI Calculator</h2>
  <form action="" method="POST">
    <label for="weight">Weight (in kg):</label>
    <input type="number" name="weight" step="1" required><br>
    <label for="height">Height (in meters):</label>
    <input type="number" name="height" step="0.01" required><br>
    <input type="submit" value="Calculate BMI">
  </form>

  <?php
  function calculateBMI($weight, $height) {
    if ($weight <= 0 || $height <= 0) {
      return "Invalid weight or height";
    }

    $bmi = $weight / ($height * $height);
    return $bmi;
  }

  if (isset($_POST['weight']) && isset($_POST['height'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $bmi = calculateBMI($weight, $height);

    echo "<p>Your BMI is: " . number_format($bmi, 2) . "</p>";

    if ($bmi < 18.5) {
      echo '<p style="background-color: yellow;">Underweight</p>';
    } elseif ($bmi >= 18.5 && $bmi < 25) {
      echo '<p style="background-color: green;">Normal weight</p>';
    } elseif ($bmi >= 25 && $bmi < 30) {
      echo '<p style="background-color: red;">Overweight</p>';
    } else {
      echo '<p style="background-color: red;">Obese</p>';
    }
  }
  ?>
</body>
</html>
