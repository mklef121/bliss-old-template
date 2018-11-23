<?php include "../Connection.php";?>
<?php
session_start();
//exit("Help a brother");
//exit();
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
           $outPut .="
           <option value='$row[0]'>".$row[1]."</option>
           ";
        }
        echo $outPut;
   }*/
  // print_r($_POST);
  // exit();
$FnamE = $MiiN = $SurN = $GenD = $maryStatu = $noOfffChil = $nationNatyyy = $geAgee = $phonNumm = $emaaAdd = "";
//exit($_POST["Username"]); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //echo("Help a brother");
  //exit();
//
    if($_POST["FN"]){
  $FnamE = test_input($_POST["FN"]);
  $MiiN = test_input($_POST["MN"]);
  $SurN = test_input($_POST["SN"]);
  $GenD = test_input($_POST["GD"]);
  $maryStatu = test_input($_POST["maryS"]);
  $noOfffChil = test_input($_POST["noOfChil"]);
  $nationNatyyy = test_input($_POST["nationNaty"]);
  $geAgee = test_input($_POST["geAge"]);
  //session age
  $_SESSION["getAge"]= $geAgee;
  $phonNumm = test_input($_POST["phonNum"]);
 // exit($phonNumm);
  $emaaAdd = test_input($_POST["emsername"]);
  //echo $emaaAdd;
  //exit();
   $query = "insert into personalDetails_tb(FirstName,MiddleName,LastName,Gender,MarritalSatus,NoOfChild,Nationality,Age,PhoneNo,Email) value('$FnamE','$MiiN','$SurN','$GenD','$maryStatu','$noOfffChil','$nationNatyyy','$geAgee','$phonNumm','$emaaAdd')";
   $result1 = mysqli_query($con,$query);
   if($result1){
      $queryLevem = "insert into Leavemanager_tb(StaffNo,Age,Steps,Rank,PHD,MEng,COREN) values('','$geAgee','','','','','')";
        $resultLeaveMana = mysqli_query($con,$queryLevem);
        if($resultLeaveMana){
          echo "Personal Information Added Successfully";
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