<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=GET>
        <label for="number">"enter the number:"</label><br>
        <input type="text" id="number" name="number"/><br>
        <label for="submit">"submit"</label><br>
        <input type="submit" id="submit" name="submit"/><br>
    </form>
    <?php
        $n=$_GET["number"];
        $fact=1;
        for($i=$n;$i>0;$i--)
            $fact=$fact*$i;
            echo "factorial is: $fact";
        ?>
</body>
</html>
