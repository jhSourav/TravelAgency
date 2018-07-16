<?php
	require_once('db.php');
	$id =$_GET['e'];
	$take= "SELECT  * FROM u_con WHERE id='$id' ";
	$alldata=mysqli_query($CON,$take);
	$row=mysqli_fetch_assoc($alldata);
	if(!empty($_POST)){
		$name= $_POST['name'];
		$email = $_POST['email'];
		$sub = $_POST['subject'];
		$mess = $_POST['mess'];
		$edit = "UPDATE u_con SET name='$name', email='$email', subject='$sub', messege='$mess' WHERE id='$id'";
		if(mysqli_query($CON, $edit)){
			echo "update success";
			header('location: view.php');
		}else{
			echo "Not Update";
		}
	}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>insert table</title>
	</head>
	<style>
		.input {
			height: 30px;
			width: 80%;
			border: 1px solid #555;
			border-radius: 5px;
			padding: 5px 8px;
			font-size: 16px;
			color: #555;
		}
		
		.area {
			padding: 5px 8px;
			width: 80%;
			border: 1px solid #555;
			border-radius: 5px;
			font-size: 16px;
			color: #555;
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
		<h2 class="title">Edit Information</h2>
		<table width="60%" cellpadding="5" border="0" cellspacing="0" style="margin:0 auto;">
			<form action="" method="post">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>
						<input type="text" name="name" class="input" value="<?php echo $row['name'];?>" required>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input type="email" name="email" class="input" value="<?php echo $row['email'];?>" required>
					</td>
				</tr>
				<tr>
					<td>Subject</td>
					<td>:</td>
					<td>
						<input type="text" name="subject" class="input" value="<?php echo $row['subject'];?>" required>
					</td>
				</tr>
				<tr>
					<td valign="top">Message</td>
					<td valign="top">:</td>
					<td>
						<textarea name="mess" rows="5" class="area"><?php echo $row['messege'];?></textarea>
					</td>
				</tr>
				<tr>
					<td valign="top"></td>
					<td valign="top"></td>
					<td>
						<input type="submit" class="btn" value="submit">
					</td>
				</tr>
			</form>
		</table>
	</body>

	</html>