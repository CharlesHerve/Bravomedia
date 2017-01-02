<?php require 'Arbetsprov/Connections/Connections.php'; ?>
<?php
session_start ();//remind the browser to remind the session
if (isset($_SESSION["id"])){

}
else {
	header('Location: LogIn.php');
}
?>


<!doctype html>
<html>
<head>
<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="Column.css" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Login Page</title>
</head>

<body>
	<header></header>

		<div class="Menu">
		 <nav>
			<ul class="cssmenu">
				<li><a href="Upload.php">Upload</a></li>
	   		 	<li><a href="List.php">Image List</a></li>
 	   		 	<li><a href="Column.php">Column Display</a></li>
  	   		 	<li><a href="LogIn.php">LogIn</a></li>
				<li><a href="LogOut.php">LogOut</a></li>
  	    	</ul>
 		 </nav>
		</div>

		<div class="container">

			<h2>Slideshow</h2>
				<p>Display on top with the 6 newest images </p>
					<?php
					$sql = "SELECT * FROM upload ORDER BY id DESC LIMIT 6";
					$result = mysqli_query($con,$sql);
					/*returns the results of the query*/
					while ($row = mysqli_fetch_array($result)){
						echo "<div id='carrousel'>";
								echo"<ul class='imagelist'>";
									echo "<li><img width='100' height='300' src='photos/".$row['name']." '  ></li>";
									//echo "<p>".$row['text']."</p>";
								echo"</ul>";
						echo "</div";

					}
					?>
			


		</div>
	<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="Slideshow.js"></script>

</body>
</html>
