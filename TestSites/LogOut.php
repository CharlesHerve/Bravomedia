<?php require 'Arbetsprov/Connections/Connections.php'; ?>
<?php
session_start();
/*Destruction of the session*/
unset($_SESSION["id"]);
session_destroy();
?>
<!doctype html>
<html>
<head>
<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="Arbetsprov/Arbetsprov-CSS/Menu.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title>Login Page</title>
</head>

<body>
	<header></header>
	<div class="container">
		<div class="Menu">
		 <nav>
			<ul class="cssmenu">
  	   		 	<li><a href="Register.php">Register</a></li>
  	    		<li><a href="LogIn.php">Login</a></li>
  	    		<li><a href="#">Video Upload</a></li>
			</ul>
 		 </nav>
		</div>
		<div >
			<h2>You have logged out!</h2>
		</div>
	</div>
	<footer></footer>
</body>
</html>
