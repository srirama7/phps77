<!DOCTYPE html>
<html>
<head>
  <title>Prime Number Finder</title>
</head>
<body>
  <h2>Prime Number Finder</h2>
  <form method="post">
    <label for="start">Starting number:</label>
    <input type="text" name="start" required><br>
    <label for="end">Ending number:</label>
    <input type="text" name="end" required><br>
    <input type="submit" value="Find Primes">
  </form>

  <?php
  function isPrime($number) {
    if ($number <= 1) {
      return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
        return false;
      }
    }

    return true;
  }

  if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];

    echo "<p>Prime numbers between $start and $end:</p>";
    for ($i = $start; $i <= $end; $i++) {
      if (isPrime($i)) {
        echo $i . " ";
      }
    }
  }
  ?>
</body>
</html>
