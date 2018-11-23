<?php include "Connection.php";?>
<?php
//print_r($_GET);
//echo "u";
//exit;
sleep(2);
$getUser = $_GET["user"];
$query ="select Staff_id, Username, Password from staff_tb where Username='$getUser' OR Password='$getUser' ";
$result =mysqli_query($con,$query);
//print_r($result);
//exit;
while($row=mysqli_fetch_array($result)){
	   $id = $row[0];
	  $Usen = $row[1];
	  $pass = $row[2];
	 // echo $id;
	 // echo $Usen;
	  //echo $pass;
	  
	}
	
	if($Usen || $pass ){
		echo "Successful";
	}else{
		echo "Username Or Password Does not Exist ";
	}
	exit();
if(isset($_GET["user"])){
	//echo "user";
	//exit;
	//$getUser = $_GET["user"];
	//exit( $getUser);

	$query ="select * from staff_tb ";
	$result =mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		   $id = $row[0];
		  $Usen = $row[1];
		  $pass = $row[2];
		  echo $id;
		  echo $Usen;
		  echo $pass;
		}

}
?>
