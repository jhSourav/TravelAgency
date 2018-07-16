<?php
	require_once('db.php');
	$id =$_GET['d'];
	$del= "DELETE FROM u_con WHERE id='$id' ";
	if(mysqli_query($CON, $del)){
			echo "Delete success";
			header('location: view.php');
		}else{
			echo "Not Delete";
		}

?>