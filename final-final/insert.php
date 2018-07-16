<?php
	require_once('db.php');
	if(!empty($_POST)){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sub = $_POST['subject'];
		$gender= $_POST['gender'];
		$mess =htmlentities($_POST['mess'],ENT_QUOTES);
		$insert="INSERT INTO u_con (id, name, email, subject, messege,gen_id) VALUES ('','$name','$email','$sub','$mess', '$gender')";
		if(mysqli_query($CON,$insert)){
			echo "";
		}else{
			echo"not Success";
		}
	}
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>insert table</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<style>
		.nme{
			color: #fff
		}
		.areaa{
			width: 555px;
			font-size: 18px;
			margin-bottom: 15px;
			padding-left: 60px;
			border: 0;
			background-color: rgba(213, 213, 213, 0.46);
			color: #fff;
		}
		.input {
			height: 57px;
			width: 555px;
			font-size: 18px;
			margin-bottom: 15px;
			padding-left: 60px;
			background-color: rgba(213, 213, 213, 0.46);
			color: #fff;
			border: none;
			border-radius: 5px
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
			padding: 5px;
			color: #eaedf2;
			display: block;
			margin: 50px 0 20px 0;
		}
		.btn{
			text-align: center;
			display: inline-block;
			width: 200px;
			line-height: 35px;
			background: #e34a4a;
			color: #fff;
			text-decoration: none;
			font-size: 14px;
			text-transform: uppercase;
			border: none;
		}
		.btn:hover{
			background: #2d9ca7;
		}
	</style>

	<body>
		<h2 class="title">To visit / Buy Our Product please<br><br>Log In </h2>
		<table width="60%" cellpadding="5" border="0" cellspacing="0" style="margin:0 auto;">
			<form action="index.php" method="post">
				<tr>
					<td class="nme">Name</td>
					<td class="nme">:</td>
					<td>
						<input type="text" name="name" class="input" placeholder="Enter your Name" required>
					</td>
				</tr>
				<tr>
					<td class="nme">Email</td>
					<td class="nme">:</td>
					<td>
						<input type="email" name="email" class="input" placeholder="Enter your Name" required>
					</td>
				</tr>
				<tr>
					<td class="nme">Gender</td>
					<td class="nme">:</td>
					<td>
						<select name="gender" id="" class="input">
							<option value="0">select gender</option>
							<?php
								$gen = "SELECT * FROM gender";
								$geni = mysqli_query($CON, $gen);
								while($row=mysqli_fetch_assoc($geni)){
							?>
								<option value="<?= $row ['gen_id'];?>"><?= $row ['gen_name'];?></option>
							<?php
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="nme">Subject</td>
					<td class="nme">:</td>
					<td>
						<input type="text" name="subject" class="input" placeholder="Enter your Name" required>
					</td>
				</tr>
				<tr>
					<td valign="top" class="nme">Message</td>
					<td valign="top" class="nme">:</td>
					<td>
						<textarea name="mess" rows="5" class="areaa"></textarea>
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
		<a href="view.php" class="btn">all information</a>
	</body>

	</html>