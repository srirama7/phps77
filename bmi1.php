<html>
    <head></head>
    <title>bmi calculator</title>
    <body> 
        <form>
            <label for="weight">Enter the Weight:</label>
            <input type="number" id="weight" name="weight"/><br><br>
            <label for="height">Enter the Height:</label>
            <input type="number" id="height" name="height"/><br><br>
            <label for="submit">Submit</label>
            <input type="submit" id="submit" name="submit"/><br><br>
        </form>

        <?php
            function calculateBMI($weight,$height)
            {
                if($weight<=0 || $height<=0)
                {
                    echo "invalid data which has given";
                }
                $bmi=$weight/($height*$height);
                return $bmi;
            }
            if (isset($_GET["weight"]) && isset($_GET["height"]))
            {
                $weight=$_GET["weight"];
                $height=$_GET["height"];

                $bmi = calculateBMI($weight,$height);

                echo "<p> your bmi is:" .number_format($bmi,2)."</p>";

                if($bmi<18.5)
                {
                    echo '<p style="background-color : yellow;">you are underweight</p>';
                }
                elseif($bmi>18.5 && $bmi<25)
                {
                    echo '<p style="background-color:green;">">normal weight</p>';
                }
                else
                {
                    echo '<p style="background-color:red;">obesuse</p>';
                }
            }
            ?>
    </body>
</html>    