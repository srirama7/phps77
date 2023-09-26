<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
    <label for="num1">Number1:</label>
    <input type="text" id="num1" name="num1"/><br><br>
    <label for="num2">Number2:</label>
    <input type="text" id="num2" name="num2"/><br><br>
    <label for="operator">Operator:</label>
    <select name="operator" id="operator">
        <option value ="add">Addition</option>
        <option value ="sub">Subtraction</option>
        <option value ="mul">multiplication</option>
        <option value ="div">division</option>
    </select><br>
    <label for="submit">Submit</label>
    <input type="submit" id="submit" name="submit">
    </form>
    
    <?php
        if(isset($_GET["operator"]))
        {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $operator = $_GET["operator"];

            switch($operator)
            {
                case "add":
                    $result=$num1+$num2;
                    break;
                case "sub":
                    $result=$num1-$num2;
                    break;
                case "mul":
                    $result=$num1*$num2;
                    break;
                case "div":
                    $result=$num1/$num2;
                    break;
                default:
                    $result = "invalid operator";

            }
            echo"Result:".$result;
        }
            

        ?>
</body>
</html>