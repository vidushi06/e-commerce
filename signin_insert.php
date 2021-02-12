<?php
include "dbcon.php";
if(isset($_POST['submit'])){
	 $a=$_POST ['username'];
	 $b=$_POST ['numbers'];
	 $c=$_POST ['email'];
	 $d=$_POST ['password'];
	 $data ="INSERT INTO signinform(username,numbers,email,password)values('$a','$b','$c','$d')";
 	$result=mysqli_query($con,$data);
 	if($result){
	header("Location:1post.php");
	echo "signin succeful ";
}
}
?>