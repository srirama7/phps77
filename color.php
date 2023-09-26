<!DOCTYPE html>
<html>
<head>
    <title>Interactive Color Sampler</title>
</head>
<body>
    <h1>Interactive Color Sampler</h1>
    <form method="get">
        <label for="red">Red (0-255):</label>
        <input type="number" name="red" id="red" min="0" max="255" required>
        <br>
        <label for="green">Green (0-255):</label>
        <input type="number" name="green" id="green" min="0" max="255" required>
        <br>
        <label for="blue">Blue (0-255):</label>
        <input type="number" name="blue" id="blue" min="0" max="255" required>
        <br>
        <input type="submit" value="Show Color">
    </form>

    <?php
    if (isset($_GET["red"]) && isset($_GET["green"]) && isset($_GET["blue"])) {
        $r = $_GET["red"];
        $g = $_GET["green"];
        $b = $_GET["blue"];

        $rgb = $r . ',' . $g . ',' . $b;
        ?>
        R: <?php echo $r; ?><br>
        G: <?php echo $g; ?><br>
        B: <?php echo $b; ?><br>

       
        <div style="width: 150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>);"></div>
    <?php } ?>
</body>
</html>
