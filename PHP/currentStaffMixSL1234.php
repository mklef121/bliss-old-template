<?php include "../Connection.php";?>
<?php
    $queryL1234 = "select COUNT(Rank) from leavemanager_tb where Rank=1 OR Rank=2 OR Rank=3 OR Rank=4";
     $resultL1234 = mysqli_query($con,$queryL1234);
     while($row=mysqli_fetch_array($resultL1234)){
        $Rank1234Comput = $row[0];
        echo $Rank1234Comput;
        //echo $perSonInfoID;
      }
?>