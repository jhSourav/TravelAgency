<?php
	require_once('db.php');
	$id=$_GET['v'];
	$take= "SELECT * FROM u_con natural join gender WHERE id='$id' ";
	$alldata=mysqli_query($CON,$take);
	$row=mysqli_fetch_assoc($alldata);
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>insert table</title>
	</head>
	<style>
		.table{
			margin: 0 auto;
		}
		.table th,
		.table td{
			border:1px solid #555;
			padding: 5px;
		}
		.title{
			text-align: center;
			color: #555;
			display: block;
			margin: 50px 0 20px 0;
		}
		.btn{
			text-align: center;
			display: inline-block;
			width: 200px;
			line-height: 35px;
			background: #555;
			color: #fff;
			text-decoration: none;
			font-size: 14px;
			text-transform: uppercase;
			border: none;
		}
		.btn:hover{
			background: #000;
		}
	</style>
	<body>
		<h2 class="title">Personal Informaton</h2>
		<table width="60%" class="table" cellpadding="0" cellspacing="0">
			
			<tr>
				<td>Name</td>
				<td><?php echo $row['name'];?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $row['email'];?></td>
			</tr>
			<tr>
				<td>Subject</td>
				<td><?php echo $row['subject'];?></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><?php echo $row['messege'];?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $row['gen_name'];?></td>
			</tr>
		</table>
		<a href="view.php" class="btn">view page</a>
	</body>

	</html>