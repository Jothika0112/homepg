<?php

session_start();
//$con =
//  mysql_connect('localhost','root','') or die('could not connect to database');
// mysql_select_db('userlogin') or die('no database found');
// echo 'db connected';
$servername = "localhost";
$username = "root";
$password = "";
$database = "userlogin";
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

// mysqli_close($conn);

$email = $_POST['email'];
$pass = $_POST['pass'];

$s = "select * from usertable where email = '$email' AND password='$pass'";

$result = mysqli_query($conn,$s);
// $result2 = mysqli_query($s,$pass);


$num = mysqli_num_rows($result);
// $num2 = mysqli_num_rows($result2);

// if($num1 != NULL && $num2 != NULL)
//   {
// 	  echo "valid email and password";
//   }
if($num == 1)
{
	$vaild = "valid email and password";
	header('location: firstpg.php');
}
else
{
	// $reg = "insert into usertable(email,password) values ('$email' , '$pass')";
	// mysqli_query($conn,$reg);
	// echo "Registered successfully";
	echo "invalid email and password";
}

?>