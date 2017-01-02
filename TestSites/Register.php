
<?php
			/*Connection to Database:*/
			require 'Arbetsprov/Connections/Connections.php';
?>
<?php
		/*Determine if 'Submit' a variable is set and is not NULL: */
		if(isset($_POST['submit'])) {
		session_start(); // Start new or resume existing session
		/*Sending values from the Form to each column of the table*/
		$Fname = $_POST ['firstname'];
		$Lname = $_POST ['lastname'];
		$Email = $_POST ['email'];
		$Password = $_POST ['password'];
		/*sql query to fill the table with the new datas*/
		$sql="insert into user (Fname, Lname, Email, Password)values ('$Fname', '$Lname', '$Email', '$Password')";
		/*execution of the query, result of the query is returned into variable*/
		$query=mysqli_query($con, $sql);
		if ($query) {
			//redirection to the LogIn Page if the query is successfully executed.
			header('Location: Login.php');
			}
		//error message if the query fails
		else {echo 'Registration not valid';}
		}
?>

<!doctype html>
<html>
<head>
<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
<meta charset="utf-8">
<title>Register Page</title>
</head>

<body>
	<header></header>
	<div class="container">
		<div class="Menu">
		 <nav>
			<ul class="cssmenu">

  	   		 	<li><a href="#">Register</a></li>
  	    		<li><a href="LogIn.php">Login</a></li>

			</ul>
 		 </nav>
		</div>
		<h2>Register:</h2>
		<div >
			
			<form action="" method="post">
	First Name : <input type="text" name="firstname">
		   </br>
	Last Name : <input type="text" name="lastname">
		   </br>
	Email: <input type="text" name="email">
		   </br>
	Password: <input type="text" name="password">
		   </br>
		   <input type="submit" name="submit" value="Insert">
		</div>

	</body>
</html>
