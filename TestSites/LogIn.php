<?php require 'Arbetsprov/Connections/Connections.php'; ?>
<?php
	/*Determine if 'Submit' a variable is set and is not NULL: */
  if (isset($_POST['login'])) {
								/*Sending values from the Form to each column of the table*/
								$EM = $_POST['email'];
								$PW = $_POST['password'];
								/*sql query to fill the table with the new datas*/
								/*execution of the query, result of the query is returned into variable*/
								$result = $con->query ("select * from user where Email='$EM' AND Password='$PW'");
								$row = $result->fetch_array(MYSQLI_BOTH); //Returns an array that corresponds to the fetched row or NULL if there are no more rows for the results
								/* Start new or resume existing session*/
								session_start();
								$_SESSION["id"] = $row['id'];
								/*Direction to the Display page*/
								header('Location: Display.php');
								//echo $_SESSION["id"];
	}
?>

<!doctype html>
<html>
<head>
<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Login Page</title>
</head>

<body>
	<header>
	</header>

	<div class="container">
		<div class="Menu">
			 <nav>
				<ul class="cssmenu">
				<li><a href="Upload.php">Upload</a></li>
	   		 	<li><a href="List.php">Image List</a></li>
 	   		 	<li><a href="Column.php">Column Display</a></li>
  	   		 	<li><a href="Register.php">Register</a></li>
  	    		<li><a href="LogIn.php">LogIn</a></li>
  	    		<li><a href="LogOut.php">LogOut</a></li>
				</ul>
			 </nav>
		</div>


		<div class="RightBody">
			<h2>LogIn:</h2>
			<form action="" method="post">

			Email: <input type="text" name="email">
		    </br>
			Password: <input type="text" name="password">
		    </br>
		   <input type="submit" name="login" value="LogIn">
			</form>
		</div>
	</div>
	<footer></footer>
</body>
</html>
