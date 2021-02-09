<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>number</th>
			<th>email</th>
			<th>password</th>
		</tr>

		<?php
			include "dbcon.php";
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$data="SELECT * from signform where id = $id";
				$result=mysqli_query($con,$data);
				$fetch=mysqli_fetch_array($result);
			}
		?>
		<tr>
			<td><?php echo $fetch['id'] ?></td>
			<td><?php echo $fetch['username'] ?></td>
			<td><?php echo $fetch['numbers'] ?></td>
			<td><?php echo $fetch['email'] ?></td>
			<td><?php echo $fetch['password'] ?></td>
		</tr>
		<br>

	</table>
	<a href="signin_display.php"><button class="btn btn-info">back</button></a>
</body>
</html>