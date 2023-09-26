<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action method="GET">
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        <label for="operator">Operator:</label>
        <select name="operator" id="operator">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>

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
