<?php include "../Connection.php";?>
<?php
//this is loadDepartment.php scrpit
//echo("brother");
//exit();
   // $selectedObj =intval($_GET['q']);
   // echo $selectedObj;
    //exit();
   // $selectedObj = intval($_G ET['q']);
   //print_r($_GET);
  // exit();
   if(isset($_GET['q'])){
     $selectedObj = $_GET['q'];
    // echo $selectedObj;
     //exit();
     $query = "select dept_id, dept_Name from department_tb where faculty_id= '$selectedObj' ";
     $result = mysqli_query($con,$query);
     // echo '<option value="0">Select Faculty</option>';
        echo '<option value="0" disabled selected>Select Department</option>';
        while($row=mysqli_fetch_array($result)){
           // $dept_id = $row[0];
           // $dept_Name = $row[1];
			$outPut .="
			 <option value=' $row[0]'>".$row[1]."</option>
			";
            //echo $dept_Name;
          // echo "successful";
        }
           echo $outPut;
  
   }

?>