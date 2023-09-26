<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="GET">
        <label for="Number1">"Enter the Number 1:"</label>
        <input type="text" id="Number1" name="Number1"/>
        <label for="Number2">"Enter the number 2:"</label>
        <input type="text" id="Number2" name="Number2"/>
        <label type="option">option:</label>
        <select name="option" id="operator">
            <option value="add">addition</option>
            <option value="sub">subtraction</option>
            <option value="multiply">multiplication</option>
            <option value="divide">divsion</option>
        </select><br><br>
        <label for="Submit">Submit</label>
        <input type="submit" id="Submit" name="Submit"/><br>
    </form>

    <?php
        if(isset($_GET['operator']))
        {
            $Number1=$_GET['Number1'];
            $Number2=$_GET['Number2'];
            $operator=$_GET['operator'];
        }
        switch($operator)
        {
            case 'add':
                $result = $Number1 + $Number2;
                break;
            case 'sub':
                $result = $Number1 - $Number2;
                break;
            case 'multiply':
                $result = $Number1 * $Number2;
                break;
            case 'divide':
                $result = $Number1 / $Number2;
                break;
            default:
                echo "invalid operator:";
        }
        echo "Result" . $result
        ?>
</body>
</html>