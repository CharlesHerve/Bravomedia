-<?php require 'Arbetsprov/Connections/Connections.php'; ?>
<?php
/*make sure user is logged in*/
session_start ();//remind the browser to remind the session, else
if (isset($_SESSION["id"])){
	echo 'session started!';
}
else {
	header('Location: LogIn.php');
}

?>
<!doctype html>
<html>
<head>
<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="Arbetsprov/Arbetsprov-CSS/Menu.css" rel="stylesheet" type="text/css" >
<link href="Display.css" rel="stylesheet" type="text/css" />

<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="Column.css">
<meta charset="utf-8">
<title>Image List</title>
</head>

<body>
	<header></header>
	<div class="container">
		<div class="Menu">
		 <nav>
			<ul class="cssmenu">
						<li><a href="Column.php">Display Column</a></li>
  	   		 	<li><a href="Display.php">Display Slideshow</a></li>
						<li><a href="Register.php">Register</a></li>
  	    		<li><a href="LogOut.php">LogOut</a></li>
			</ul>
 		 </nav>
		</div>
		<div class="Right Body">

			<h2>Image List</h2>
				<table border="1" cellspacing="0" cellpadding="5px">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Type</th>
							<th>Size</th>
							<th>Temporary Name</th>
							<th>Title</th>
							<th>Text</th>
							<th>Upload Time</th>
							<th>Action</th>
						</tr>
					<?php
					$sql = "SELECT id,name, type, size, tmpname, title, text, upltime  FROM upload ";//sql query selecting all the images datas
					$result = mysqli_query($con, $sql); //execution and result of the query
					if ($result);
					if (mysqli_num_rows($result) > 0){

						while($row = mysqli_fetch_assoc($result)){ //display each row and line

					?>
								<tr>
									<td><?=$row['id']?></td>
									<td><?=$row['name']?></td>
									<td><?=$row['type']?></td>
									<td><?=$row['size']?></td>
									<td><?=$row['tmpname']?></td>
									<td><?=$row['title']?></td>
									<td><?=$row['text']?></td>
									<td><?=$row['upltime']?></td>
									<td>
										<a href="Delete.php?id=<?=$row['id']?>">Delete Image</a>
										<a href="Edit.php?id=<?=$row['id']?>">Edit Text</a>
									</td>
								</tr>
					<?php
							}
						}

					?>

				</table>


		</div>
	</div>
	<footer></footer>
</body>
</html>
