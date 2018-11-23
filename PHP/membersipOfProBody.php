<?php include "../Connection.php";?>
<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["file1"]["name"]);
$uploadOk = 1;
//print_r($_FILES);
//exit($_FILES["file1"]["name"]);
exit;
$dosya = $coreny =  $mengr = $phdd=  $certy = $areaO = $stDate = $fidate = $institutn = $fildOfSp =$perSonInfoID= "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["file1"])) {
    // $dosy = $_FILES["ty"]["name"];//resim
 //echo $dosy;
 //echo $_POST["ty"];
 //exit();
 /////
 
    $check = getimagesize($_FILES["file1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
//exit();
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//exit();
// Check file size
if ($_FILES["file1"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
//exit();
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
/////
////
//exit();
// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file

} else {
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["ty"]["name"]). " has been uploaded.";
           ///////////////////////////
                    //first query persD_id col from personaldetails_tb to relate it with work Infor table
                $perSonInfoID = "";
                    $queryPersonDetailsId = "select MAX(persD_id) AS persD_id from personaldetails_tb ";
                        $resultPersonDetailsId = mysqli_query($con,$queryPersonDetailsId);
                            while($row=mysqli_fetch_array($resultPersonDetailsId)){
                            $perSonInfoID = $row[0];
     
                             }
           /////
            $dosya = $_FILES["file1"]["name"];
            $coreny = test_input($_POST["coRin"]);
            $mengr = test_input($_POST["meg"]);
            $phdd = test_input($_POST["phd"]);
            $certy = test_input($_POST["cefiti"]);
            $areaO = test_input($_POST["aospes"]);
            $stDate = test_input($_POST["sdat"]);
            $fidate = test_input($_POST["fdet"]);
            $institutn = test_input($_POST["instp"]);
            $fildOfSp = test_input($_POST["fioS"]);
            $getTheAgeNow = $_SESSION["getAge"];
           // echo $getTheAgeNow;
             $queryAgeFrmLeav = "select Max(leavMa_id) from leavemanager_tb ";
              $resultAgeFrmLeav= mysqli_query($con,$queryAgeFrmLeav);
              while($row=mysqli_fetch_array($resultAgeFrmLeav)){
                $AgeFrmLeavid = $row[0];
                
                 }
                
                
           // $phonNumm = test_input($_POST["phonNum"]);
           // exit($phonNumm);
           // $emaaAdd = test_input($_POST["emsername"]);
            //echo $emaaAdd;
            //exit();
            //echo $dosya;
           
           // echo $coreny;
           // echo $mengr;
           // echo  $certy;
           // echo $stDate;s
           // echo $fidate;
           // echo $dosya;
            //echo $coreny;
            //echo $phdd;
           // echo $fildOfSp;
           // echo $areaO;
          // echo  $perSonInfoID;
           // print_r($_POST);

            //exit;
             $query = "insert into academicBackground_tb(Certificate,Institution,StartDate,FinishDate,Image,COREN,MEng,PHD,Field,AreaOfSpecial,persD_id) value('$certy','$institutn','$stDate','$fidate','$dosya','$coreny','$mengr','$phdd','$fildOfSp','$areaO','$perSonInfoID')";
             $result1 = mysqli_query($con,$query);
             if($result1){
                 
                $queryLevem = "UPDATE Leavemanager_tb SET PHD='$phdd',MEng='$mengr',COREN='$coreny' where leavMa_id=$AgeFrmLeavid  ";
                $resultLeaveMana = mysqli_query($con,$queryLevem);
                if($resultLeaveMana){
                  echo "Academic background Added Successfully";
                }else{
                  echo "Cant Add Leave";
                }
             }else{
                 echo "Cant Add your Information to database";
             }
              
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

////////////////////////////////////////
/*$tmp=$_FILES["file1"]["tmp_name"];   
$dosya = $_FILES["file1"]["name"];//resim
                           //storedImages/'.sdv
  if(move_uploaded_file($tmp,"StoredImages/".$dosya)){
       $query2 = "insert into staff_image_tb(Image,Staff_id) values('$dosya','$dbid')";
       $result2 = mysqli_query($con,$query2);
        if($result2){
            echo $dosya. " Upload Completed ";
            }
      }else{
          echo "not added";
          }*/
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
?>
