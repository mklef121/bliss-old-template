<?php include "../Connection.php";?>
<?php
    $queryS5 = "select COUNT(Rank) from leavemanager_tb where Rank=5";
     $resultqueryS5 = mysqli_query($con,$queryS5);
     while($row=mysqli_fetch_array($resultqueryS5)){
        $RankS5Comput = $row[0];
        echo $RankS5Comput;
        //echo $perSonInfoID;
      }
?>