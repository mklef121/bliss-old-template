<?php include "../Connection.php";?>
<?php
    //print_r($_POST);
    //exit;
    //var dtStrgG = 'staffid=' + getStaid + '&getCurDate=' + getCurentDate + '&getfuDate=' + getfutreDate;
    $cudate = test_input($_POST["getCurDate"]);
    $futdate = test_input($_POST["getfuDate"]);
   
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['staffid']){
            $staffiD = test_input($_POST["staffid"]);
                $query ="select * from leavemanager_tb where workInfo_id='$staffiD' ";
                $result = mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result)){
                    $leavmaid = $row[0];
                    $workIId = $row[1];
                    $stNo = $row[2];
                    $Age = $row[3];
                    $Steps = $row[4];
                    $rank = $row[5];
             
                   // echo $workIId
                  // echo $leavmaid;
                  // echo $workIId;
                  // echo $stNo;
                  // echo $Age;
                 //  echo $rank;
                 //  exit;
                  
                 
                }
        }
    }
   
  
  
    function  newSteps( $c, $f,$r,$a ){
    $newStep = ($f-$c)%3;
    $newAge = ($f-$c) + $a;
         if($newStep==2){
             $newRank = $r + 1;
             $new = $newRank;
             echo $newRank;
         }
         if($newStep ==0){
            echo  $r;
         }
         if($newStep ==1){
            echo  $r;
         }

         echo $newAge;
         echo $newStep;
    }//new rank
    newSteps( $cudate, $futdate,$rank, $Age );

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>