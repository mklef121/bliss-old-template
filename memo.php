<?php
include "Connection.php";
session_start();
  $getdbbaseid="";
  $getloginUsername =  $_SESSION['Username']; //username supplied by the user
    $query10 = "select Staff_id from staff_tb where Username='$getloginUsername'";
	 $result10 = mysqli_query($con,$query10);
	  while($row10=mysqli_fetch_array($result10)){
		    $getdbbaseid = $row10[0];
		  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Memo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="fujs.js" type="text/javascript"></script>

<script>
    
	var myCalendar;
	function doOnLoad(){
		myCalendar = new dhtmlXCalendarObject("commstart");
		myCalendar = new dhtmlXCalendarObject("commfin");
		myCalendar = new dhtmlXCalendarObject("confirm");
		}
</script>
</head>

<body  onload="doOnLoad()">
 <div class="w3-container w3-black w3-text-white" style="width:100%; height:auto; position:absolute">
       <div class="w3-bar">
         <a href="generalNav.html" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <!--<img src="C:\wamp2\www\FUTO\StoredImages/" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />-->
          <?php
          
			 $getimage="";
			 $getUsername="";
			 $img="";
			 $query = "select Image from staff_image_tb AS S where S.Staff_id='$getdbbaseid'";
			  $result6 =mysqli_query($con,$query);
			   if($row= mysqli_fetch_array($result6)){
				    $img = $row['Image'];
					//echo $img;
					echo " <img src='StoredImages/$img' alt='NoImage' style='width:95px; height:60px' class='w3-bar-item w3-margin-bottom w3-circle w3-right'/>";
				   }
				   
				   
			 
		  ?>
       </div>
     <div class="w3-container w3-teal w3-center">
        <h6><strong>Memo</strong> </h6>
     </div>
    <div class="w3-display-container w3-round-xlarge w3-white" style=" height:auto;">
       <div class=" w3-container">
         <div class=" w3-display-topmiddle">
           <div class="w3-card-4 w3-round-xxlarge">
           <form class="w3-container" action="javascript:void(0)" method="post">
              <div class=" w3-row-padding">
                <div class="w3-col m6" style="width:">
                     <div class="w3-section">
                       <fieldset>
                         <legend>Memo Details</legend>
                          <div class="w3-section">
                           <input class="w3-input" type="text" id="coserv" placeholder="Name/Title Of Service" />
                          </div>
                          <div class="w3-section">
                            <select class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                             <option value="" disabled selected>School</option>
                             <option value="SEET">SEET</option>
                             <option value="SMAT">SMAT</option>
                             <option value="SOHT">SOHT</option>
                             <option value="SOSC">SOSC</option>
                            </select>
                          </div> 
                          <div class="w3-section">
                            <select class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                             <option value="" disabled selected>Department</option>
                             <option value="SEET">SEET</option>
                             <option value="SMAT">SMAT</option>
                             <option value="SOHT">SOHT</option>
                             <option value="SOSC">SOSC</option>
                            </select>
                          </div> 
                          <div class="w3-section">
                            <select class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                             <option value="" disabled selected>Memo Type</option>
                             <option value="Sabbatical">Sabbatical</option>
                             <option value="Study Leave">Study Leave</option>
                             <option value="Leave of Absence">Leave of Absence</option>
                            </select>
                          </div> 
                          <div class="w3-section">
                           <input class="w3-input" type="text" id="commstart" placeholder="Leave Earliest Start Time/Date" />
                          </div>
                          <div class="w3-section">
                           <input class="w3-input" type="text" id="commstart" placeholder="Leave Latest Start Time/Date" />
                          </div>
                           <!--button--> 
                         <div class="w3-container w3-center">
                         <button type="submit" class="w3-btn w3-round-xxlarge w3-round-xxlarge  w3-blue"><i class="fa fa-mail-forward"></i> Submit Request</button>
                         </div> 
                       </fieldset>
                     </div>
                </div>
                <div class="w3-col m6">
                  <div class="w3-section">
                    <div class="w3-section">
                       <fieldset>
                         <legend>Write Up</legend>
                          <div class="w3-section">
                           <input id="mailfrom"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Mail From">
                          </div>
                           <div class="w3-section">
                           <input id="mailto"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Mail To">
                          </div>
                          <div class="w3-section">
                           <input id="subjectt"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Subject">
                          </div>
                         <div class="w3-section">
                           <textarea id="meg" class="w3-input w3-border" placeholder="Write Your Mail" style="100%"></textarea>
                         </div>
                         <!--button--> 
                         <div class="w3-container w3-center">
                         <button type="submit" onclick="sendMail()" class="w3-btn w3-round-xxlarge  w3-blue"><i class="fa fa-mail-forward"></i> Send Mail</button>
                         </div>        
                       </fieldset>
                     </div>
                  </div>
                </div>
              </div>
           </form>
          </div>
         </div>
       </div>
    </div>
 </div>
</body>
</html>