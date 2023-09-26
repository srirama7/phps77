 <!-- #region --><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <label for="Number1:">"Number 1"</label>
    <input type ="text" id="Number1" name="num1"/><br><br>
    <label for ="Number 2:">"Number 2"</label>
    <input type="text" id="Number 2" name="num2"/>
    <label for="submit">"Submit"</label>
    <input type="submit" id="submit" name="submit"/>
    <?php
      if (isset($_GET['operator'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];
    
        switch ($operator) {
          case 'add':
            $result = $num1 + $num2;
            break;
          case 'subtract':
            $result = $num1 - $num2;
            break;
          case 'multiply':
            $result = $num1 * $num2;
            break;
          case 'divide':
            $result = $num1 / $num2;
            break;
          default:
            $result = "Invalid operator";
        }
    
        echo "Result: " . $result;
      }
      ?>
</body>
</html>