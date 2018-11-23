<?php include "../Connection.php";?>
<?php
//first query persD_id col from personaldetails_tb to relate it with work Infor table
$perSonInfoID = "";
$queryPersonDetailsId = "select MAX(persD_id) AS persD_id from personaldetails_tb ";
 $resultPersonDetailsId = mysqli_query($con,$queryPersonDetailsId);
   while($row=mysqli_fetch_array($resultPersonDetailsId)){
     $perSonInfoID = $row[0];
     //echo $perSonInfoID;
   }
//exit("Help a brother");
 // exit();
// $options=$options."<option value=\"{$row[0]}\">$row[1]</option>";
  /* if($_SERVER["REQUEST_METHOD"]=="POST"){
        $query = "select * from faculty_tb";
        $result = mysqli_query($con,$query);
        echo '<option value="0">Select Faculty</option>';
        while($row=mysqli_fetch_array($result)){
            //$faculty_id = $row["faculty_id"];
            //$faculty_Name = $row["facuty_Name"];
           // echo '<option value="">$faculty_id</option>';
           // echo $faculty_Name;
           $idoutp .='
            <h6>'.$row[0].'</h6>
           ';
           $[]
           $outPut .="
           <option value='$row[0]'>".$row[1]."</option>
           ";
        }
        echo $outPut;
   }*/
//print_r($_POST);
//exit();
$doF = $raty = $doc = $dept = $prSytty = $facuycup = $stAGNo = $statuAPP = $stps = "";
//exit($_POST["Username"]); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //echo("Help a brother");
  //exit();
//
 //var dAtSrng = '$doAA=' + dofA + '&dfo=' + dofcoA + '&doAA=' + doRa + '&dIIX=' + deptX + '&prSyt=' + prSeNtat + '&facup=' + facutyic + '&stGNo=' + stafNo + "&staPP=" + statOfApt + "&stYsX=" + stepsX;
   // var dAtSrng = '$doAA=' + dofA + '&dfo=' + dofcoA + '&AAdr=' + doRa + '&dIIX=' + deptX + '&prSyt=' + prSeNtat + '&facup=' + facutyic + '&stGNo=' + stafNo + '&staPP=' + statOfApt + '&stYsX=' + stepsX;
  // echo dAtSrng;
  // exit();
if($_POST["doAA"]){
   // echo "helo";
  $doF = test_input($_POST["doAA"]);
  $raty = test_input($_POST["dfo"]);
  $doc = test_input($_POST["AAdr"]);
  $dept = test_input($_POST["dIIX"]);
  $prSytty = test_input($_POST["prSyt"]);
  $facuycup = test_input($_POST["facup"]);
  $stAGNo = test_input($_POST["stGNo"]);
  $statuAPP = test_input($_POST["staPP"]);
  //echo $statuAPP;
  //exit();
  $stps = test_input($_POST["stYsX"]);
 // exit($phonNumm);
 $queryAgeFrmLeav = "select Max(leavMa_id) from leavemanager_tb ";
 $resultAgeFrmLeav= mysqli_query($con,$queryAgeFrmLeav);
 while($row=mysqli_fetch_array($resultAgeFrmLeav)){
   $AgeFrmLeavid = $row[0];
   
    }
  //echo $emaaAdd;
  //exit();
   $query = "insert into workInformtion_tb(StaffNo,DateOfAsmDuty,DateOfRat,DateOfApp,StausOfAppo,Faculty,PresentStatus,Steps,Department,persD_id) value('$stAGNo','$doF','$doc','$raty','$statuAPP','$facuycup','$prSytty','$stps','$dept','$perSonInfoID')";
   $result1 = mysqli_query($con,$query);
   if($result1){
            $query4 = "select workInfo_id from workInformtion_tb where StaffNo=9403 ";
            $result4 = mysqli_query($con,$query4);
          while($row=mysqli_fetch_array($result4)){
              $workIId = $row[0];
              // echo $workIId;
          }
      // echo "Work Information Added Successfully";
      $queryLevem = "UPDATE Leavemanager_tb SET workInfo_id='$workIId', StaffNo='$stAGNo',Steps='$stps',Rank='$prSytty' where leavMa_id=$AgeFrmLeavid  ";
      $resultLeaveMana = mysqli_query($con,$queryLevem);
      if($resultLeaveMana){
        echo "Work Information Added Successfully";
      }else{
        echo "Cant Add Leave";
      }
   }else{
       echo "Cant Add your Information to database";
   }
    }
}
//this function will strip off space using trim(), for slash using  stripslashes()
//and  htmlspecialchars() to prevent html or javascript injection by attacker 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>