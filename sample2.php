<?php
$servername = "localhost";
$database = "student";
$username = "student";
$password = "student";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
  die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
$sql = "CREATE TABLE College_157
Dname varchar(50),
Dno int,
No_of_faculty int
)";

if ($conn->query($sql)==TRUE){
  echo "table created successfully";
}
$sql2="INSERT INTO College_157 VALUES ('ISE',01,35),('CSE',02,35),('AIML',03,15)";
if (mysqli_query($conn, $sql2))
{
  echo "<br>";
  echo "New record created successfully!";
  echo "<br>";
}
else{
  echo "Error: ";
}
mysqli_close($conn);
?>