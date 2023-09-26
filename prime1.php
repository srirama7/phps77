<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <form>
        <label for="start">Starting number:</label>
        <input type="number" id="start" name="start"/><br><br>
        <label for="end">Starting number:</label>
        <input type="number" id="end" name="end" /><br><br>
        <label for="submit">Submit</label>
        <input type="submit" id="submit" name="submit" /><br><br>
    </form>

    <?php
        function isprime($number)
        {
            if($number<=1)
                return false;
        

        for( $i=2; $i <= sqrt($number); $i++)
        {
            if($number % $i == 2)
            {
                return false;
            }
            return true;
        }

        if(isset($_GET["start"]) && isset($_GET["end"]))
        {
            $start=$_GET["start"];
            $end=$_GET["end"];
        }
        
        echo "the starting range and ending  range:";
        for($i=$start;$i<=$end;$i++)
            if(isprime($i))
            {
                echo $i ." ";
            }
        }
        ?>
</body>
</html>