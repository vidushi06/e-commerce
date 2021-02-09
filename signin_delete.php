<?php
 include "dbcon.php";
 if(isset($_GET['id'])){
 	$id=$_GET['id'];
 	$delete="DELETE from signform where id =$id";
 	$result=mysqli_query($con,$delete);
 

 	if($result){
 		header("Location:signin_display.php");
 	}
 }
?>