<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="post.css">
	<style type="text/css">
		td:hover{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<table class="table table-bordered">
		<tr class="color:white;background-color:black;">
			<th>username</th>
			<th>password</th>
			<th>action</th>
		</tr>
		<?php

			include "dbcon.php";
			$data="select * from loginform";
			$result=mysqli_query($con,$data);
			while($a=mysqli_fetch_array ($result)){

		
		?>
		<tr>
			<td><?php echo $a['username'] ?></td>
			<td><?php echo $a['password']?></td>
			<td>
				<a href="">edit</a>
				<a href="">delete</a>
			</td>
		</tr>

		<?php } ?>

	</table>

</body>
</html>