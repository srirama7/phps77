<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<body>
<h1>Login Form</h1>
<form method="post" action="login.php">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<input type="submit" value="Login">
</form>
<?php
if ($_POST) {
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password') {
// The user is logged in.
echo 'You are logged in!';
} else {
// The user is not logged in.
echo 'Invalid username or password.';
}
}
?>
</body>
</html>