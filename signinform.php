<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
	<body>
	<div class="container-fluid">
		<div class="container form">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<div class="card shadow"><br>
						<img src="image/logo.jpg" class="card-img-top rounded-circle img mx-auto d-block">

						<div class="card-body">
							<h1 class="text-warning text-center">SIGNIN FORM</h1>
							<form onsubmit="return validation()" method="post" action="signin_insert.php">

								<div class="form-group">
									<input id="user" type="text" name="username" class="form-control" placeholder="create a username" required="required">			
									<span id="usernamee" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="mob" type="numeric" name="numbers" class="form-control" placeholder="enter number" required="required">
									<span id="mobnum" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="mail" type="email" name="email" class="form-control" placeholder="enter email address" required="required">
									<span id="emaill" class="text-danger font-weight-bold"></span>
								</div>

								<div class="form-group">
									<input id="pass" type="password" name="password" class="form-control" placeholder="create a password" required="required">	
									<span id="passwordd" class="text-danger font-weight-bold"></span>					
								</div>

								<div class="form-group">
									<input id="conpass" type="password" name="password" class="form-control" placeholder="confirm password" required="required">
									<span id="confirmpass" class="text-danger font-weight-bold"></span>
								</div>

								<input type="submit" name="submit" class=" btn btn-warning btn-block">
								<br>
								<small>go to <a href="index.php">HOME</a></small>
							</form>	
						</div>
					</div><!--end of card shadow-->
				</div><!--end of col-md-4-->
				<div class="col-md-6">
					
				</div>



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