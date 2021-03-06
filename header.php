<?php
include "session.php";
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>e-commerce</title>
	<link rel="shortcut icon" type="image/jpg" href="downloads/favicon.ico"/>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/post.css">
	
</head>
<body>

		<!--start of nav bar-->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top a"style="height: 88px;">

		 <!--logo on nav bar-->
		<a href="" class="navbar-brand">

		      <img class="web-logo" src="image/logo.jpg" width="65px">
		      
		 </a>
		 <h6  data-toggle="modal" data-target="#s"></h6>

		 <!--button toggle-->
		<button class="navbar-toggler" data-toggle="collapse" data-target="#a">

            <span class="navbar-toggler-icon"></span>
   
   		 </button>

		<div class="collapse navbar-collapse" id="a" style="background-color: #f0bb1b"> 
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link text-light">HOME</a>
				</li>

				<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  PRODUCTS
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="mens.php">men's wear</a>
                  <a class="dropdown-item" href="electronics.php">electronics</a>
                  <a class="dropdown-item" href="furniture.php">furniture</a>
                  <a class="dropdown-item" href="womens.php">women's wear</a>


                </div>
              </li>
				<li class="nav-item">
					<a href="login.php" class="nav-link text-light">LOGIN</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link" class="btn" data-toggle="modal" data-target="#cc" style="color:#fff"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
				</li>
				<li class="nav-item">
					<form class="form-inline" action="/action_page.php">
				    <input class="form-control mr-sm-2" type="text" placeholder="Search">
				    <button class="btn btn-light" type="submit">SEARCH</button>
				  </form>
				</li>
		
				<li class="nav-item">
					<a href="contact.php" class="btn" style="background:none;text-decoration: none; border-style: solid; border-width: thin; border-color:#fff;color:white;padding: 7px; ">CONTACT</a>
				</li>

			 </ul> 
		</div>	 
	</nav><!--end of nav bar-->
</body>
</html>


<div class="modal fade" id="s">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Info</h5>
        <button type="button" class="" data-dismiss="modal">
          <span >&times;</span>
        </button> 
      </div>
      <div class="modal-body">
        	Welcome <h5><?php echo $_SESSION['a']?></h5>
        	<a href="logout.php" class="btn btn-warning">Logout</a>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
  </div>