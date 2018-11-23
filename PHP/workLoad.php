<?php include "../Connection.php";?>
<?php
//print_r($_POST);
//exit;
sleep(4);
//var dataStr9 = 'alStf=' + alStff + '&FaC=' + Fa + '&dept=' + deptm + '&colevel=' + courlevel + '&loadCus=' + loadCurs + '&Creunitr=' + ans1 + '&classSize=' + ans2 + "&NoOfStu=" + NoOfStudent;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Stafno = test_input($_POST["alStf"]);
    $facultyty = test_input($_POST["FaC"]);
    $deptr = test_input($_POST["dept"]);
    $levecos = test_input($_POST["colevel"]);
    $lodcos = test_input($_POST["loadCus"]);
    $creunit = test_input($_POST["Creunitr"]);
    $lassSize = test_input($_POST["classSize"]);
    $NoOf = test_input($_POST["NoOfStu"]);
    $query = "insert into workload_tb(StaffNo,Faculty,Department,level,courseName,CreditUnit,ClassSize,NoOfStudent) value('$Stafno',' $facultyty',' $deptr',' $levecos ','$lodcos',' $creunit',' $lassSize',' $NoOf')";
    $result1 = mysqli_query($con,$query);
     if($result1){
         echo "Work Load Added Successfully";
     }else{
         echo "Could Not Add";
     }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>