<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form>
<label for="username">Username:</label>
<input type="text" id="username" name="username"><br><br>
<label for="password">Passsword:</label>
<input type="password" id="password" name="password"/><br><br>
<label for="submit">submit</label>
<input type="submit" id="submit" name="submit"/><br><br>
</form>

<?php
if($_GET)
{
    $username=$_GET["username"];
    $password=$_GET["password"];

    if($username == "nmamit" && $password == "password")
    {
        echo"You are logged in";
    }
    else
    {
        echo "invalid credentials";
    }
    }
    ?>
</body>
</html>