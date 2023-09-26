<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form>
        <label for="num">Number</label><br>
        <input type="number" id="num" name="num"/><br><br>
        <label for="submit">Submit</label><br>
        <input type="submit" id="submit" name="submit"/><br><br>
    </form>
    
    <?php
        $num=$_GET["num"];
        $fact=1;
        for($i=$num;$i>0;$i--)
            $fact=$fact*$i;
            echo "factorial is$num:".$fact
        ?>
</body>
</html>