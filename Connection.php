<?php
$con = mysqli_connect("localhost","root","","futo");
 if($con){
	// echo "Database Connected";
	 }else
	     {
		  //echo "sorry,there is an error";	 
		  die('Could Not Connect'.mysqli_error_list($con));
		 }
?>