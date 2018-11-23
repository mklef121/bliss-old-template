<?php include "Connection.php"; ?>
<?php
session_start();
$uname="";
function fuLogin(){
	 // sleep(2);
//connection to database
	  $con = mysqli_connect("localhost","root","","futo");
       if($con){
	      //echo "Database Connected";
	    }else
	     {
		  echo "sorry,there is an error";	 
		 }
  $sql = "select * from staff_tb";
  $result = mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
		$username = $row["Username"];
		$password1 = $row["Password"];
		}
 //collecting data from js
	    if(isset($_POST['uname1'])){ 
		     $un = $_POST['uname1'];
			 $pas = $_POST['pass1'];
			  $uname =mysqli_real_escape_string($con,$un);
			  $pass  =mysqli_real_escape_string($con,$pas);
			   $_SESSION['uname1'] = $uname;
			    if($username==$uname && $password1==$pass){
					echo "Successful";
					}else{
						echo "Password and Username Do not Match";
						} 
			} 
	  }

?>
