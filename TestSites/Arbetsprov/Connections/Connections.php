<?php
/*Connection to Database Arbetsprovet*/
//$con= mysqli_connect("localhost", "root", "", "arbetsprovet");
$host='localhost';
$user='root';
$pass='';
$db='arbetsprovet';
// connect to the databse:
$con=mysqli_connect($host, $user, $pass, $db);
if (!$con) 
	{die('Connection failed'.mysqli_connect_error());}
//else
	//{echo 'from Connection.php:connected successfully to arbetsprovet database!';}
	

//$query=mysqli_query($con, $sql);
//if ($query)	echo 'data inserted successfully';




?>