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
		<h2 class="title">View Information</h2>
		<table width="40%" class="search-table" cellpadding="0" >
			<tr>
				<form action="search.php" method="get">
					<td width="60%">
						<input type="text" class="search" name="search" placeholder="search...." required>
						
					</td>
					<td width="40%"> 
						<input type="submit" class="sr-btn" value="submit">
					</td>
				</form>
			</tr>
		</table>
		<table width="60%" class="table" cellpadding="0" cellspacing="0">
			<tr>
				<th>Name</th>
				<th>email</th>
				<th>subject</th>
				<th>messege</th>
				<th></th>
			</tr>
			<?php
				$vall = "SELECT * FROM u_con ORDER BY id DESC";
				$data = mysqli_query($CON, $vall);
				while($row=mysqli_fetch_assoc($data)){
			?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['subject'];?></td>
				<td><?php echo substr( $row['messege'],0,20);?></td>
				<td><a href="viewpersonal.php?v=<?php echo $row['id'];?>">View All</a> 
				<a href="edit.php?e=<?php echo $row['id'];?>">Edite</a> 
				<a href="delete.php?d=<?php echo $row['id'];?>">Delete</a></td>
			</tr>
			
			<?php
				}
			?>
		</table>
		<a href="insert.php" class="btn">insert page</a>
	</body>

	</html>