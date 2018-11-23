<?php include "../Connection.php";?>
<?php
 $noOfStfmDept = "select NoOfStudent from workload_tb where StaffNo=1 ";
 $toNoOfStfmDept= mysqli_query($con,$noOfStfmDept);
 while($row=mysqli_fetch_array($toNoOfStfmDept)){
   $noOfStudentt = $row["NoOfStudent"];
   echo $noOfStudentt;
}
?>