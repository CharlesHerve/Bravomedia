<?php require 'Arbetsprov/Connections/Connections.php'; ?>
<?php
session_start ();//remind the browser to remind the session
if (isset($_SESSION["id"])){

}
else {
	header('Location: LogIn.php');
}
?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title> Responsive Images Display by Columns</title>

<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">
<link href="Column.css" rel="stylesheet" type="text/css"/>
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

</head>
	<body>
		<header></header>

			<div class="Menu">
			 <nav>
				<ul class="cssmenu">
					<li><a href="Upload.php">Upload</a></li>
					<li><a href="Display.php">Slideshow Display</a></li>
					<li><a href="Register.php">Register</a></li>
					<li><a href="LogIn.php">LogIn</a></li>
					<li><a href="LogOut.php">LogOut</a></li>
				</ul>
			 </nav>
			</div>


			<div class="container">
				<h2>Responsive Image Column Display</h2>
					<p>These images display in:<br>
					  one column on smartphones<br>
					  two columns on tablets<br>
					  three columns on desktops/laptops</p>

					<?php
						$sql = "SELECT * FROM upload ";//sql query
						$result = mysqli_query($con,$sql);//result of the query returned by function into $result variable
						//if ($sql) echo "requete recue";
					/*Fetch a result row as a numeric array and as an associative array:*/
					while ($row = mysqli_fetch_array($result)){
						echo "<div='section'>";
								//rows are diplayed:
								echo "<img class='breakpoint'  width='960' height='640'  src='photos/".$row['name']." '  >";
								//echo "<p>".$row['text']."</p>";
						echo "</div";
					}
					?>
			</div>
  </body>
</html>
