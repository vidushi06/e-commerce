<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" ref="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<style type="text/css">
		.mainfooter {
		    background: #020306f0;
		    color: #fff;
		    position: relative;
    		top: 17px;
		}
		.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: $zindex-fixed;
}
	</style>
</head>
<body>
	<?php  include"header.php"; ?>
	<div class="container-fluid" style="margin-top: 100px">
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
			<!-- contact --->
			<section>
				<div class="card" >
				
     		 		<!--card Header -->
      				<div class="card-header bg-warning">
      					<h4 class="card-title text-center">Contact us</h4>
     				</div>

     				<!-- Modal body -->
      				<div class="card-body">
       			 		<h1  style="color:black;font-size: 20px;text-align: center;">WE'D <i class="fa fa-heart-o" aria-hidden="true"></i> TO HELP YOU</h1>
						<p style="text-align: center;color: black">If you are woundering about an order,our products,or website,shoot them at <i class="fa fa-hand-o-down" aria-hidden="true"></i></p>

				 		<form method="post" class="text-center">
            				<input type="email" name="email" class="form-control" placeholder="Your email id">
      						<br>
            				<input type="text" name="comment" class="form-control" placeholder="Leave us a message ">
            				<br>
							<input type="submit" name="submit" class=" btn btn-dark btn-block">
						
            			</form>
            		</div>
				 		<br>
				 	<div class="card-footer">
				 		<p style="color: black;text-align: center;">We'll get back to you :D</p>
				 	</div>
				</div>
		
			</section>
		</div>
		<div class="col-md-4"></div>
		</div>
	</div>
    
	
<!--start of contact us-->
<section>

	<div class="container-fluid mainfooter ">

		<div class="container">
			<div class="row fixed-bottom bg-dark" style="display: block;">

				<div class="text-center">


					<p class="copyright-text" style=" font-size:13px;color: white;margin-top: 0px;
           			margin-bottom: 0px,background-color: #fff;padding-top: 30px;position: relative;">PRIVACY POLICY | TERMS AND CONDITIONS |COPYRIGHT © CYBER SECQURE
            			</p>

           		</div>

           		<br>
			</div><!--end of row-->
	
		</div><!--end of container-->

	</div><!--end of container-fluid-->

</section>
<!--end of contact us-->

</body>
</html>


<?php

include "dbcon.php";
if(isset($_POST['submit'])){
	$a=$_POST['comment'];
	$b=$_POST['email'];
	 $data ="INSERT INTO usercomments(comment,email)values('$a','$b')";
 	$x=mysqli_query($con,$data);
 	if($x){
 		echo "<script>alert( 'message Successfully Sent!!');</script>";
	}
}

?>