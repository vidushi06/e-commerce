<?php
include "session.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="post.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form onsubmit="return validation()" method="post" action="" >
								<h1>Login</h1>
								<div class="form-group">
									<input id="user" type="text" name="username" class="form-control" placeholder="username" required="required" autocomplete="off">			
									<span id="usernamee" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="pass" type="password" name="password" class="form-control" placeholder="password" required="required">	
									<span id="passwordd" class="text-danger font-weight-bold"></span>					
								</div>
								<!-- <div class="form-group">
									<input type="text" name="" placeholder="enter OTP" required="required" class="form-control">
									<small>you'll recieve an OTP number on your phone</small>
								</div> -->
								<input type="submit" name="submit" value="login" class=" btn btn-warning btn-block">

								<small><a href="signinform.php" class="text-primary">Create a new account</a></small>

							</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	


	<script>
		function validation(){
			var user= document.getElementById("user").value;

			var pass = document.getElementById("pass").value;

			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('usernamee').innerHTML =" ** Username lenght must be between 2 to 20";
				return false;	
			}

			if(!isNaN(user)){
				document.getElementById('usernamee').innerHTML =" ** only characters are allowed";
				return false;
			}

			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwordd').innerHTML =" ** Passwords lenght must be between  12 and 20";
				return false;	
			}
			
			
		}
	</script>

</body>
</html>

<?php

include "dbcon.php";

if(isset($_POST['submit'])){
	$a=$_POST['username'];
	$b=$_POST['password'];

	$data = "SELECT * FROM signinform WHERE username = '$a' && password ='$b'";
	$res = mysqli_query($con,$data);

	$final = mysqli_num_rows($res);

	if($final==1){
        $_SESSION['a'] = $a;
		header('Location:index.php');
	}
	else{
		echo "<script> alert('please check username or password') </script>";
	}
}

?>