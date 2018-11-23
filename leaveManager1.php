<?php include "Connection.php";?>
 <?php
 //echo("brother");
 //exit();
     $query = "select faculty_id, facuty_name from faculty_tb";
      $result = mysqli_query($con,$query);
        $options= '<option value="0">Select Level</option>';
         while($row=mysqli_fetch_array($result)){
            // $faculty_id = $row["faculty_id"];
            // $faculty_Name = $row["facuty_Name"];
            
             $optionsLoadFaculty=$optionsLoadFaculty."<option value=\"{$row[0]}\">$row[1]</option>";
            // echo $faculty_id;
            // echo $faculty_Name;
         }
 
 ?>

<?php
//echo("brother");
//exit();
    $query = "select workInfo_id, StaffNo  from workinformtion_tb";
     $result = mysqli_query($con,$query);
       $options= '<option value="0">All Staff</option>';
        while($row=mysqli_fetch_array($result)){
           // $faculty_id = $row["faculty_id"];
           // $faculty_Name = $row["facuty_Name"];
           
            $options=$options."<option value=\"{$row[0]}\">$row[1]</option>";
           // echo $faculty_id;
           // echo $faculty_Name;
        }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leave Manager</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<link rel="stylsheet" type="text/css" href="CSS/cssRevision.css">
<link rel="stylsheet" type="text/css" href="CSS/loader.css">
<script src="fujs.js" type="text/javascript"></script>
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>

</head>

<body class="w3-content w3-animate-opacity" style="max-width:2000px">
<!--nav-->
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a href="performManager.html" class="w3-bar-item w3-btn w3-red w3-hide-small  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hide-small   w3-hover-light-grey ">Contact Us</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hide-small   w3-hover-light-grey">About Us</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
     </div>
 </div>
 
     <div class="w3-container w3-round-large w3-mobile w3-teal w3-center" style="width:100%;margin-top:30px; min-width:500px;">
        <h5 class="w3-teal w3-center w3-margin-top">Leave Manager</h5>
     </div>
 <!--content-->
<div class="w3-container" style="margin-top:20px;">
<div class="w3-display-container w3-center" style="height:300px;">
  <div class="w3-display-topmiddle" style="width:65%">
    <form class="w3-container" action="javascript:void(0)" method="post">
       <fieldset class="w3-round-xlarge  w3-margin-bottom w3-card-4">
       <!-- <legend class="w3-text-green"><strong>Course Allocation</strong></legend>-->
      <div class="w3-row-padding">
        <!--populate all staff-->
        <div class="w3-col m6">
          <div class="w3-section">
                   <select id="stafidd" class="w3-select w3-light-gray w3-border " name="option" >
                     <!-- <option value="" disabled selected>All Staff</option>-->
                     <!-- <option value="Books">db</option>-->
                     <?php echo  $options?>
                    </select>
          </div>
        </div>
        <!--populate course from db-->
        <div class="w3-col m6">
         <div class="w3-section">
                   <select id="loadCurseee" class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="" disabled selected>Leave Type</option>
                        <option value="Sabbatical">Sabbatical</option>
                        <option value="Study Leave">Study Leave</option>
                        <option value="Leave of Absence">Leave of Absence</option>
                    </select>
        </div>
        </div>
        
      </div>
      <!--row 2-->
      <div class="w3-row-padding">
        <div class="w3-col m6">
          <div class="w3-section">
             <input class="w3-input w3-border w3-light-grey" type="text" id="cudate" placeholder="Leave Latest Start Time/Date" />
          </div>
        </div>
        <div class="w3-col m6">
          <div class="w3-section">
            <input class="w3-input w3-border w3-light-grey" type="text" id="futdate" placeholder="Leave Earliest Start Time/Date" />
          </div>
        </div>
      </div>
      <!--row3-->
       <div class="w3-row-padding">
        <div class="w3-col m6">
          <div class="w3-section">
                   <select id="facutyyicz" onchange="facty(this.value)" class="w3-select w3-light-gray w3-border " name="option" >
                      <option value="" disabled selected>Select Faculty</option>
                     <!-- <option value="Books">db</option>-->
                     <?php echo $optionsLoadFaculty?>
                    </select>
          </div>
        </div>
        <div class="w3-col m6">
          <div class="w3-section">
                   <select id="loadDeptmatiz" class="w3-select w3-light-gray w3-border " name="option" >
                      <option value="" disabled selected>Select Department:</option>
                      <<option value="">db</option>
                    </select>
          </div>
        </div>
      </div>
      <!--row 4-->
      <div class="w3-row-padding">
        <div class="w3-col m6">
          <div class="w3-section">
             <input class="w3-input w3-border w3-light-grey" type="text" id="subject" name="NoOfStudent" value="" placeholder="Title/Subject">                     
          </div>
        </div>
        <div class="w3-col m6">
          <div class="w3-section">
            <input class="w3-input w3-border w3-light-grey" type="text" id="MailTo" name="MailTo" value="" placeholder="Mail To">    
          </div>
        </div>
      </div>
      <!--row 5-->
      <div class="w3-row-padding">
        <div class="w3-col m6">
          <div class="w3-section">
                 <input class="w3-input w3-border w3-light-grey" type="text" id="MailThrough1" name="MailTo" value="" placeholder="Mail Through1">    
          </div>
        </div>
        <div class="w3-col m6">
          <div class="w3-section">
            <input class="w3-input w3-border w3-light-grey" type="text" id="MailThrough2" name="NoOfStudent" value="" placeholder="Mail Through2">    
          </div>
        </div>
      </div>
      <!--row 6-->
      <div class="w3-row-padding">
        <div class="w3-col m6">
          <div class="w3-section">
            <input class="w3-input w3-border w3-light-grey" type="text" id="MailThrough3" name="MailTo" value="" placeholder="Mail Through3">
          </div>
        </div>
        <div class="w3-col m6">
          <div class="w3-section">
                <input class="w3-input w3-border w3-light-grey" type="text" id="MailThrough4" name="NoOfStudent" value="" placeholder="Mail Through4">    
          </div>
        </div>
      </div>
      <!--write up for mail row7-->
      <div class="w3-row-padding">
            <div class="w3-section">
                 <textarea id="meg" rows="10" class="w3-input w3-round-xxlarge w3-card w3-border" placeholder="Write Your Mail" style="100%"></textarea>
             </div>
      </div>
      <!--button-->
      <div class="w3-container">
         <div class=" w3-container w3-margin-top w3-margin-bottom">
                     <a href="leaveManager1.php" class="space w3-btn w3-left w3-round w3-blue">More</a>
                     <button type="submit" class="w3-btn w3-right w3-round w3-blue" onclick="leaveMaCompu()"> <i class="fa fa-mail-forward"></i> Send Mail</button>
         </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>
</div>
</body>
</html>