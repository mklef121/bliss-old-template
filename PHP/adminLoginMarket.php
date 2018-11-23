<?php include "../Connection.php";?>
<?php
//print_r($_POST);
//exit();
sleep(2);
    $userNaz =  $PazW=  "";
   
    //exit($_POST["Username"]); 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //echo("Help a brother");
      //exit();
    // var dtStrg = 'US=' + usera + '&PW=' + pasa;
        if($_POST["US"]){
      $userNaz = test_input($_POST["US"]);
      $PazW = test_input($_POST["PW"]);
       $query = "select Username, Password from staff_tb where Username='$userNaz' AND Password='$PazW' ";
       $result1 = mysqli_query($con,$query);
       while($row=mysqli_fetch_array($result1)){
           $usern = $row["Username"];
           $pazword = $row["Password"];
       }
      // exit;
      
        }
        if($usern && $pazword){
            echo "Sucessful";
        }else{
            echo "Password Do Not Match";
        }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>