
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <form>
        <label for ="num">"enter the number</label>
        <input type="number" id="num" name="num"/>
        <br>
        <input type="submit" value="submit"/><br><br>
    </form>
    <?php
        $n=$_GET["num"];
        $fact=1;
        for($i=$n;$i>0;$i--)
            $fact=$fact*$i;
            echo "factorial of$n: $fact"
    ?>
</body>
</html>