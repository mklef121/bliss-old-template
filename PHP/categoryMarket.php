<?php include "../Connection.php";?>
<?php
// var dtAStrg = 'CAT=' + cat;
sleep(2);
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Catego = test_input($_POST["CAT"]);
        $query = "insert into category_tb(CategoryName) value('$Catego')";
        $result1 = mysqli_query($con,$query);
         if($result1){
             echo $Catego." Added Successfully";
         }else{
             echo "Could Not Add";
         }
    }

    
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
