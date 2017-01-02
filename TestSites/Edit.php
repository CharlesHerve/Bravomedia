<?php
require 'Arbetsprov/Connections/Connections.php';
?>

<?php
			/*Determine if 'Submit' a variable is set and is not NULL: */
			if (isset($_POST['Submit'])){
				//sql query to update image text
				$sql = "UPDATE upload SET title = '".$_POST['ImageTitle']."',
										   text = '".$_POST['ImageText']."'
						     WHERE id = '".$_POST['id']."'
				";
				if(mysqli_query($con, $sql)){ //execution of the query
					echo "Title Modified"; // message of execution
					header('Location: List.php');//redirection to the List page
				}
				else{
					echo "Error ".mysqli_error($con);// error message
				}
			}

			$id = '';
			$title = '';
			$text = '';
			/*Determine if the id variable selected  is set and is not NULL: */
			if(isset($_GET['id'])){
				$sql = "SELECT id, title, text FROM upload WHERE id=".$_GET['id']; // sql query
				$result = mysqli_query($con, $sql);//  query execution and result returned
						if(mysqli_num_rows($result) > 0){					//if at least one result exists, it is returned
								$row = mysqli_fetch_assoc($result); //result line from the table  is returned
								$id = $row['id'];    		// result by row is sent in each corresponding variable .
								$title = $row['title'];
								$text = $row['text'];
				}
			}
?>

<!DOCTYPE html>
<html>
    <head>

		<link href="Arbetsprov/Arbetsprov-CSS/Master.css" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Oxygen:700,400" rel="stylesheet" type="text/css">
		<title>Edit Image Text </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Edit Selected Image Text:</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td>title</td>
					<td><input name="ImageTitle" value="<?=$title?>"></td>
				</tr>

				<tr>
					<td>text</td></br> 
					<td><textarea name="ImageText" cols="40" rows="4" ><?php echo htmlspecialchars($text);?></textarea></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"</td>
					<td><input type="submit" name="Submit"></td>
				</tr>
			</table>
        <br>


    </body>
</html>
