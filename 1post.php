<?php

session_start();

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
</head>
<body>
	<div class="container-fluid">
		<div class="container form">
			<div class="row">
				<div class="col-md-6" style="margin-top: 225px">
					<h1>Login for better experience</h1>
					<h4 class="text-warning">Welcome</h4>
				</div>
				<div class="col-md-4">

					<div class="card shadow color"><br>
						<img src="image/logo.jpg" class="card-img-top rounded-circle img mx-auto d-block">

						<div class="card-body">
							<h1 class="text-warning text-center">LOGIN FORM</h1>
							<form onsubmit="return validation()" method="post" action="">

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
								<input type="submit" name="submit" class=" btn btn-warning btn-block">

								<small>Don't have an account <a href="signinform.php" class="text-primary">SIGN IN</a></small>

							</form>	
						</div>
					</div><!--end of card shadow-->
				</div><!--end of col-md-4-->

				<div class="col-md-2"></div>

			</div><!--end of row-->
		</div><!--end of container-->
	</div>	<!--end of container-fluid-->


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
				document.getElementById('passwordd').innerHTML =" ** Passwords lenght must be between  5 and 20";
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