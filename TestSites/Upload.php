-<?php require 'Arbetsprov/Connections/Connections.php'; ?>
<?php
session_start ();//remind the browser to remind the session
if (isset($_SESSION["id"])){ 
	echo 'session started!';	
}
else {
	header('Location: LogIn.php');
}
?>
<?php 
if (isset($_POST['upload'])){
	echo $image_name = $_FILES['image']['name'];
	echo $image_type = $_FILES['image']['type'];
	echo $image_size = $_FILES['image']['size'];
	echo $image_tmp_name = $_FILES['image']['tmp_name'];
	echo $image_title = $_POST['imageTitle'];
	echo $image_text = $_POST['ImageText'];
	
	$sql = "INSERT INTO upload (name, type, size, tmpname, title, text ) VALUES ('$image_name', '$image_type', '$image_size', '$image_tmp_name', '$image_title', '$image_text' ) ";
	$query=mysqli_query($con, $sql);
	
	if($query){echo " Inserted!";}
	
	if($image_name == ''){
		echo "<script>alert('Please Select an Image!')</script>";
		exit();
	}
	else
		move_uploaded_file($image_tmp_name, "photos/$image_name");
		echo " Uploaded!";
}

?>
 

<!doctype html>
<html>
<head>
<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />


<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">

<meta charset="utf-8">
<title>Uploading images</title>
</head>

<body>
	<header></header>
	<div class="container">		
		<div class="Menu">
		 <nav>
			<ul class="cssmenu">
				
				<li><a href="Display.php">Image Display</a></li>
				<li><a href="List.php">Image List</a></li>
  	   		 	<li><a href="Register.php">Register</a></li>	
  	    		<li><a href="LogIn.php">LogIn</a></li>	
  	    		<li><a href="LogOut.php">LogOut</a></li>
			</ul>
 		 </nav>	
		</div>
		<div class="LeftBody">
			<h1>Uploading Images:</h1>
		</div>
		<div class="RightBody">
			<form action="Upload.php" method="post" enctype="multipart/form-data">
				<p>Select Image:</p>
				<input type="file" name="image"><br>
				<input type="text" name="imageTitle" placeholder="Image Title"><br>
				<textarea name="ImageText" cols="40" rows="4" placeholder="Describe this image..."></textarea><br>
				<input type="submit" name="upload" value="Upload Now">
			</form>		
		</div>
	</div>
	<footer></footer>
</body>
</html>