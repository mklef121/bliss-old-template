<?php include "../Connection.php";?>
<?php
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
 //  var datStrng = 'gAge=' + getAgeFrPerD + '&corenn=' + coRREEENN + '&meng=' + mengRR + '&phdd=' + phdPHDPhD + '&stNO=' + staffo + '&prestat=' + prestauS + '&rank=' + stepZZ;
$ager = $corenn = $men = $ph = $sTaN = $psT = $rk = "";
//exit($_POST["Username"]); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //echo("Help a brother");
  //exit();
//
    if($_POST["FN"]){
  $ager = test_input($_POST["gAge"]);
  $corenn = test_input($_POST["corenn"]);
  $men = test_input($_POST["meng"]);
  $ph = test_input($_POST["phdd"]);
  $sTaN = test_input($_POST["stNO"]);
  $psT = test_input($_POST["prestat"]);
  $rk = test_input($_POST["rank"]);
  //echo $emaaAdd;
  exit();
   $query = "insert into leavemanageR_tb(FirstName,MiddleName,LastName,Gender,MarritalSatus,NoOfChild,Nationality,Age,PhoneNo,Email) value('$FnamE','$MiiN','$SurN','$GenD','$maryStatu','$noOfffChil','$nationNatyyy','$geAgee','$phonNumm','$emaaAdd')";
   $result1 = mysqli_query($con,$query);
   if($result1){
       echo "Personal Information Added Successfully";
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