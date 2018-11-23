<?php //include "Connection.php";?>
<?php
//echo("brother");
//exit();
    // $query = "select * from level_tb";
    //  $result = mysqli_query($con,$query);
    //    $options= '<option value="0" >Select Level</option>';
    //     while($row=mysqli_fetch_array($result)){
    //        // $faculty_id = $row["faculty_id"];
    //        // $faculty_Name = $row["facuty_Name"];
           
    //         $options=$options."<option value=\"{$row[0]}\">$row[1]</option>";
    //        // echo $faculty_id;
    //        // echo $faculty_Name;
    //     }

?>
<?php
//echo("brother");
//exit();
    // $query = "select workInfo_id, StaffNo  from workinformtion_tb";
    //  $result = mysqli_query($con,$query);
    //  $options7= '<option value="0" >All Staff</option>';
    //     while($row=mysqli_fetch_array($result)){
    //        // $faculty_id = $row["faculty_id"];
    //        // $faculty_Name = $row["facuty_Name"];
           
    //         $options7=$options7."<option value=\"{$row[0]}\">$row[1]</option>";
    //        // echo $faculty_id;
    //        // echo $faculty_Name;
    //     }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course Allocation</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="CSS/cssRevision.css" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="fujs.js" type="text/javascript"></script>
</head>

<body class="w3-content w3-animate-opacity" style="max-width:1500px;"  onload="loadFacutyyyyy()">
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-red w3-hover-red w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
         <a href="performManager.html" class="w3-bar-item w3-btn w3-hide-small  w3-red">Home</a>
         <a href="#" class="w3-bar-item w3-btn w3-hide-small  w3-hover-light-grey">Contact Us</a>
         <a href="#" class="w3-bar-item w3-btn w3-hide-small  w3-hover-light-grey">About Us</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-hide-small w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
   </div>
 </div>
 
 <!---->
    <div class="w3-container w3-teal w3-center w3-mobile" style="min-width:500px; margin-top:38px;"> 
              <h6><strong>WORKLOAD</strong></h6> 
       <strong>Course Allocation</strong> 
    </div>
  <!---->
  <!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-animate-zoom w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:36px">
  <a href="performManager.html" class="w3-bar-item w3-button w3-padding-large  w3-hover-light-grey">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact</a>
  
</div>

<!--content-->
<div class="w3-container" style="margin-top:46px;">
  <div class="w3-display-container w3-center" style="height:300px;">
    <div class="w3-display-topmiddle" style="width:65%">
      <form class="w3-container" action="javascript:void(0)" method="post">
         <fieldset class="w3-round-xlarge  w3-margin-bottom w3-card-4">
          <legend class="w3-text-green"><strong>Course Allocation</strong></legend>
        <div class="w3-row-padding">
          <!--populate all staff-->
          <div class="w3-col m6">
            <div class="w3-section">
                     <select id="allStaff" class="w3-select w3-light-gray w3-border " name="option" >
                        <!--<<option value="0" disabled selected>All Staff</option>
                        option value="Books">db</option>-->
                        <?php ?>
                      </select>
            </div>
          </div>
          <!--populate course from db-->
          <div class="w3-col m6">
           <div class="w3-section">
                     <select id="loadCurseee" class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="" disabled selected>Course</option>
                       <!-- <option value="Books">db</option>-->
                       </select>
            </div>
          </div>
          
        </div>
        <!--row 2-->
        <div class="w3-row-padding">
          <div class="w3-col m6">
            <div class="w3-section">
                     <select id="Faacc" onchange="loadDepptt(this.value)" class="w3-select w3-light-gray w3-border " name="option" >
                       <!-- <option value="" disabled selected>Select Faculty</option>-->
                        <!--<option value="Books">db</option>-->
                      </select>
            </div>
          </div>
          <div class="w3-col m6">
            <div class="w3-section">
                     <select id="creditUnit" class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="" disabled selected>Credit Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
            </div>
          </div>
        </div>
        <!--row3-->
         <div class="w3-row-padding">
          <div class="w3-col m6">
            <div class="w3-section">
                     <select id="loadFaacc" onchange="getIDNDepart()"  class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="0" disabled selected>Select Department</option>
                       <!-- <option value="Books">db</option>-->
                      
                      </select>
            </div>
          </div>
          <div class="w3-col m6">
            <div class="w3-section">
                     <select id="classSize" class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="" disabled selected>Class No:</option>
                        <option value="0-50">0-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101-200">101-200</option>
                        <option value="201 and Above">201 and Above</option>
                      </select>
            </div>
          </div>
        </div>
        <!--row 4-->
        <div class="w3-row-padding">
          <div class="w3-col m6">
            <div class="w3-section">
                     <select id="levelCC" onchange="courServer()" class="w3-select w3-light-gray w3-border " name="option" >
                       <!--< <option value="" disabled selected>Select Level</option>
                        option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>-->
                       <?php echo $options ?>
                      </select>
            </div>
          </div>
          <div class="w3-col m6">
            <div class="w3-section">
                <input class="w3-input w3-border w3-light-grey" type="text" id="NoOfStu" name="MailTo" value="" placeholder="Number Of Students In Selected Dept">    
            </div>
          </div>
        </div>
        <div class="w3-container">
           <div class=" w3-container w3-margin-top w3-margin-bottom">
                       <a href="fworkLoad.php" class="space w3-btn w3-left w3-round w3-blue">More</a>
                       <button type="submit" class="w3-btn w3-right w3-round w3-blue" onclick="declearWorkLoad()">Done</button>
           </div>
        </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<script>
 // Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!--this button will check requiredMix-->
<div id="modalLoader" class="w3-modal w3-animate-zoom" style="display:none; ">
    <div class="w3-modal-content w3-round-xxlarge  w3-black">
      <div class="w3-display-container" style="height:200px;">
          <div class="w3-display-middle">
             <div class="w3-container ">
                <i class="fa fa-spinner fa-pulse fa-5x  fa-fw"></i>
                <span class="sr-only">Loading...</span>  
             </div>
          </div>
      </div>
      <footer class="w3-container  w3-round-xxlarge w3-center w3-red">
        <h2 >Loading...</h2>
      </footerr>
    </div>
</div>
<!--end of loader-->
<button class="w3-btn w3-hide w3-blue" type="submit" onclick="ally()">Summit</button>
</body>
</html>