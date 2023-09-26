<!DOCTYPE html>
<html>
<head>
    <title>Interactive Color Sampler</title>
</head>
<body>
    <h1>Interactive Color Sampler</h1>
    <form method="post">
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
    // Process form data
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $red = isset($_POST["red"]) ? intval($_POST["red"]) : 0;
        $green = isset($_POST["green"]) ? intval($_POST["green"]) : 0;
        $blue = isset($_POST["blue"]) ? intval($_POST["blue"]) : 0;

        // Limit RGB values to the valid range (0-255)
        $red = max(0, min(255, $red));
        $green = max(0, min(255, $green));
        $blue = max(0, min(255, $blue));

        // Convert RGB to hexadecimal representation
        $hexColor = sprintf("#%02x%02x%02x", $red, $green, $blue);

        // Display the color
        echo "<div style='width: 100px; height: 100px; background-color: $hexColor'></div>";
        echo "<p>RGB: $red, $green, $blue</p>";
        echo "<p>Hex: $hexColor</p>";
    }
    ?>
</body>
</html>
