<?php include "Connection.php";?>
<?php
	if(isset($_POST['Username3'])){
		 $username = $_POST['Username3'];
		 $pass = $_POST['Passw3'];
		 //echo $username;
		 //echo $pass;
		 //exit;
		   $query ="select * from admin_tb where Username='$username' and Password='$pass'";
		   $reult = mysqli_query($con,$query);
		    if(mysqli_num_rows($reult)>0){
				echo "Successful";
				}else{
					echo "Password and Username Do Not Match";
					}
		}
	
?>