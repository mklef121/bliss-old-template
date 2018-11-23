<?php include "Connection.php";?>
<?php
session_start();
$password1="";
$username="";
$uname="";
     /* $sql = "select * from staff_tb";
       $result = mysqli_query($con,$sql);
        while($row20=mysqli_fetch_array($result)){
		$username = $row20[1];
		$password1 = $row20[2];
		echo $username;
		echo $password1;
		}
		*/
	
		 if(isset($_POST['Username'])){ 
		     $un = $_POST['Username']; //username supplied by the user
			 $pas = $_POST['Passw']; //password from user
			  $uname =mysqli_real_escape_string($con,$un);
			  $pass  =mysqli_real_escape_string($con,$pas);
			   $_SESSION['Username'] = $uname;
			    //Successful
			   $query ="select * from staff_tb where Username='$uname' AND Password='$pass' ";
			   $result =mysqli_query($con,$query);
			    if(mysqli_num_rows($result)>0){
					  echo "Successful";
					}else{
						 echo "Password And Username Do Not Match";
						}
			} 
function admin(){
	//////////////////////////////////
	$con = mysqli_connect("localhost","root","","futo");
    if($con){
	// echo "Database Connected";
	 }else
	     {
		  echo "sorry,there is an error";	 
		 }  
	/////////////////////////////////
	if(isset($_POST['Username3'])){
		 $username = $_POST['Username3'];
		 $pass = $_POST['Passw3'];
		   $query ="select * from admin where Username='$username' and Password='$pass'";
		   $reult = mysqli_query($con,$query);
		    if(mysqli_num_rows($reult)>0){
				echo "Successful";
				}else{
					echo "Password and Username Do Not Match";
					}
		}
	}
admin();
?>