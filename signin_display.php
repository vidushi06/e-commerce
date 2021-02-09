<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="post.css">
	<style>
		tr:hover{
			background-color:#77b2ed;
		}
	</style>
</head>
<body>
	<br><br>
	<h1 class="text-center text-info">SIGNIN FORM DETAILS</h1>
	<br>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>email</th>
			<th>password</th>
			<th>action</th>
		</tr>

		<?php
		include "dbcon.php";
			$data="select * from signform";
			$result=mysqli_query($con,$data);
			while($a=mysqli_fetch_array ($result)){
		?>


		<tr>
			<td><?php echo $a['id'] ?></td>
			<td><?php echo $a['username'] ?></td>
			<td><?php echo $a['email'] ?></td>
			<td><?php echo $a['password']?></td>
			<td>
				<a href="signin_show.php?id=<?php echo $a['id']?>" class="btn btn-success">show</a>
				<a href="signin_edit.php?id=<?php echo $a['id']?>" class="btn btn-info">edit</a>
				<a href="signin_delete.php?id=<?php echo $a['id']?>" class="btn btn-danger">delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>