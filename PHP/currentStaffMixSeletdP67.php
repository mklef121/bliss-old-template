<?php include "../Connection.php";?>
<?php
    $queryP67 = "select COUNT(Rank) from leavemanager_tb where Rank=6 OR Rank=7";
     $resultqueryP67 = mysqli_query($con,$queryP67);
     while($row=mysqli_fetch_array($resultqueryP67)){
        $RankP67Comput = $row[0];
        echo $RankP67Comput;
        //echo $perSonInfoID;
      }
?>