<?php 
include "dbcon.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$d="SELECT * from signform where id=$id";
	$res=mysqli_query($con,$d);
	$x=mysqli_fetch_array($res);
}
	//update part

	if(isset($_POST['submit'])){
	 $a=$_POST ['username'];
	 $b=$_POST ['numbers'];
	 $c=$_POST ['email'];
	 $d=$_POST ['password'];
	 $data ="UPDATE signform SET username='$a',email='$c',numbers='$b',password='$d' where id=$id";
 	$update=mysqli_query($con,$data);

	if ($update) {
		header("Location:signin_display.php");
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
	<body class="bg-primary">
	<div class="container-fluid">
		<div class="container form">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="card shadow bg-info"><br>
						<img src="image/logo.jpg" class="card-img-top rounded-circle img mx-auto d-block">

						<div class="card-body">
							<h1 class="text-warning text-center">SIGNIN FORM</h1>
							<form onsubmit="return validation()" method="post">

								<div class="form-group">
									<input id="user" type="text" name="username" class="form-control" placeholder="create a username" required="required" value="<?php echo $x['username']?>">			
									<span id="usernamee" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="mob" type="numeric" name="numbers" class="form-control" placeholder="enter number" required="required" value="<?php echo $x['numbers']?>">
									<span id="mobnum" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="mail" type="email" name="email" class="form-control" placeholder="enter email address" required="required" value="<?php echo $x['email']?>">
									<span id="emaill" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="pass" type="password" name="password" class="form-control" placeholder="create a password" required="required" value="<?php echo $x['password']?>">	
									<span id="passwordd" class="text-danger font-weight-bold"></span>					
								</div>

								<div class="form-group">
									<input id="conpass" type="password" name="password" class="form-control" placeholder="confirm password" required="required" value="<?php echo $x['password']?>">
									<span id="confirmpass" class="text-danger font-weight-bold"></span>
								</div>

								<input type="submit" name="submit" class=" btn btn-warning btn-block" value="update">

							</form>	
						</div>
					</div><!--end of card shadow-->
				</div><!--end of col-md-4-->
				<div class="col-md-4"></div>



				<script>
					function validation(){
			var user= document.getElementById("user").value;

			var pass = document.getElementById("pass").value;

			var conpass= document.getElementById("conpass").value;

			var mob = document.getElementById("mob").value;

			var mail= document.getElementById('mail').value;

			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('usernamee').innerHTML =" ** Username lenght must be between 2 to 20 characters";
				return false;	
			}

			if(!isNaN(user)){
				document.getElementById('usernamee').innerHTML =" ** only characters are allowed";
				return false;
			}

			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwordd').innerHTML =" ** Passwords lenght must be between  5 to 20";
				return false;	
			}
			
			if(pass!=conpass){
				document.getElementById('confirmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}

			if(isNaN(mob)){
				document.getElementById('mobilenum').innerHTML =" ** user must write digits only not characters";
				return false;
			}

			if(mob.length!=10){
				document.getElementById('mobilenum').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}

			if(mail.indexof('@')<=0){
				document.getElementById('emaill').innerHTML =" ** please enter a valid mail";
				return false;
			}

			if((mail.charAt(mail.length-4)!='.')&&(mail.charAt(mail.length-3)!='.')){
				document.getElementById('emaill').innerHTML =" ** invalid email ";
				return false;
			}
			
		}
				</script>

</body>
</html>