<?php
require 'Arbetsprov/Connections/Connections.php';
?>
<?php
/*Determine if the selected id variable is set and is not NULL: */
 if (isset($_GET['id'])){
	 $sql = "DELETE FROM upload WHERE id = ".$_GET['id'];// sql query to delete the selected image by by id
	 if (mysqli_query($con, $sql)){ //execution of the DELETE query
		 header('Location: List.php');// redirection to List.php if the query is successfull
	 }
	 else{
		echo "error ".mysqli_error($con);
	}

 }
?>
