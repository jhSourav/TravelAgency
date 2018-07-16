<?php
	require_once('db.php');
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
		.search-table{
			margin: 20px auto;
		}
		.search{
			width: 100%;
			height: 35px;
		}
		.sr-btn{
			width:80px;
			height: 40px;
			
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
		<h2 class="title">search result</h2>
		<table width="60%" class="table" cellpadding="0" cellspacing="0">
			<tr>
				<th>Name</th>
				<th>email</th>
				<th>subject</th>
				<th>messege</th>
				<th></th>
			</tr>
			<?php
				$search= $_GET['search'];
				$vall = "SELECT * FROM u_con WHERE name or email  LIKE '%$search%'";
				$data = mysqli_query($CON, $vall);
				while($row=mysqli_fetch_assoc($data)){
			?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['subject'];?></td>
				<td><?php echo substr($row['messege'],0,20);?></td>
				<td><a href="viewpersonal.php?v=<?php echo $row['id'];?>">View All</a> 
				<a href="edit.php?e=<?php echo $row['id'];?>">Edite</a> 
				<a href="delete.php?d=<?php echo $row['id'];?>">Delete</a></td>
			</tr>
			
			<?php
				}
			?>
		</table>
		<a href="view.php" class="btn">View information</a>
	</body>

	</html>