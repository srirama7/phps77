<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form method="GET">
        <label for="loginpage">loginpage </label><br><br>
        <input type="text" name="loginpage" id="loginpage"/><br><br>
        <label for="password">password </label><br><br>
        <input type="password" name="password" id=="password"/><br><br>
        <label for="Submit">Submit </label><br><br>
        <input type="submit" name="loginpage" id="loginpage"/><br><br>
    </form>
    
    <?php
        if($_POST)
        {
            $username=$_post['loginpage'];
            $password=$_post['password'];

        if ($username == 'login' && $password == 'password')
        {
            echo "you have login in successfully";
        }
        else
        {
            echo "you have entered invalid credencials";
        }
        }
    ?>
</body>
</html>