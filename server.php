<?php include "Connection.php";?>
<?php
print_r($_FILES);
exit;
sleep(20);
session_start();
  $dbid="";
  $getUsername = $_SESSION['Username'];
  $sql = "select Staff_id from staff_tb where Username ='$getUsername' ";
  $result = mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
		$dbid = $row["Staff_id"];
		}
  $tmp=$_FILES["file1"]["tmp_name"];   
  $dosya = $_FILES["file1"]["name"];//resim
                             //storedImages/'.sdv
    if(move_uploaded_file($tmp,"StoredImages/".$dosya)){
		 $query2 = "insert into staff_image_tb(Image,Staff_id) values('$dosya','$dbid')";
		 $result2 = mysqli_query($con,$query2);
		  if($result2){
			  echo $dosya. " Upload Completed ";
			  }
		}else{
			echo "not added";
			}
		
?>