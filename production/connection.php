<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$host="localhost";
$hname="root";
$pass="";
$database="admin";

$conn=mysqli_connect($host,$hname,$pass,$database);

if(!$conn){
	echo "Connection Failed" .mysqli_connect_error();
	}
	else {
		
		}
	
	
?>

<body>
</body>
</html>
