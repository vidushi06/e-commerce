<?php
include "dbcon.php";
if(isset($_POST['submit'])){
	 $a=$_POST ['username'];
	 $b=$_POST ['numbers'];
	 $c=$_POST ['email'];
	 $d=$_POST ['password'];
	 $data ="INSERT INTO signform(username,numbers,email,password)values('$a','$b','$c','$d')";
 	mysqli_query($con,$data);
 	if($result){
	header("Location:internship_display.php");
	echo "signin succeful ";
}
}
?>