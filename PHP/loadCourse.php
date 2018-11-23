<?php include "../Connection.php";?>
<?php
//this is loadDepartment.php scrpit
//echo("brother");
//exit();
   // $selectedObj =intval($_GET['q']);
   // echo $selectedObj;
    //exit();
   // $selectedObj = intval($_G ET['q']);
   //print_r($_GET)
   //exit;
   if(isset($_GET['q1'])){
     $selectedObj1 = $_GET['q1'];
     $deptvaluNo = $_GET['deptNo'];
    // echo $deptvaluNo;
     //exit();
     $query = "select course_id, course_Name from course_tb where level_id= '$selectedObj1' AND dept_id='$deptvaluNo' ";
     $result = mysqli_query($con,$query);
     // echo '<option value="0">Select Faculty</option>';
        echo '<option value="0">Select Course</option>';
        while($row=mysqli_fetch_array($result)){
            $dept_id = $row[0];
           // $dept_Name = $row[1];
			$outPut .="
			 <option value=' $row[0]'>".$row[1]."</option>
			";
            //echo $dept_Name;
          // echo "successful";
           // echo $row["course_Name"];
           //  echo $outPut;
        }
           echo $outPut;
        
  
   }

?>