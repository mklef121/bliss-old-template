<?php include "../Connection.php";?>
<?php
//echo("Help a brother");
//exit();
// $options=$options."<option value=\"{$row[0]}\">$row[1]</option>";
   if($_SERVER["REQUEST_METHOD"]=="GET"){
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
   }

?>
