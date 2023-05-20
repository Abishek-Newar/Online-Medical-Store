<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="medical website";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysql_connect_errors());
}

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
      $email = $_POST['email'];
	$address = $_POST['address'];
	$doctorname = $_POST['doctorname'];
	
	$sql_query="INSERT INTO appoint(name,phone,email,address,doctorname)
	VALUES('$name','$phone','$email','$address','$doctorname')";
	
	if (mysqli_query($conn, $sql_query))
	{
		echo "";
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

header("Location: booksucc.html");
exit();
?>

