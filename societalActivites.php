<?php
// include "Connection.php";
// session_start();
//   $getdbbaseid="";
//   $getloginUsername =  $_SESSION['Username']; //username supplied by the user
//     $query10 = "select Staff_id from staff_tb where Username='$getloginUsername'";
// 	 $result10 = mysqli_query($con,$query10);
// 	  while($row10=mysqli_fetch_array($result10)){
// 		    $getdbbaseid = $row10[0];
// 		  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Conference And Learned Society Actities</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="fujs.js" type="text/javascript"></script>
<script>
    
	var myCalendar;
	function doOnLoad(){
		myCalendar = new dhtmlXCalendarObject("assum");
		myCalendar = new dhtmlXCalendarObject("ratify");
		myCalendar = new dhtmlXCalendarObject("confirm");
		}
</script>
<script>
 function openCity(evt, cityName){
	  var i, x, tablinks;
	  x = document.getElementsByClassName("city");
	  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
   document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
	 }
</script>
</head>

<body  onload="doOnLoad()">
 <div class="w3-container w3-black w3-text-white" style="width:100%; height:auto position:absolute">
     <div class="w3-bar">
         <a href="performManager.html" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">About Us</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Contact</a>
         <!--<img src="C:\wamp2\www\FUTO\StoredImages/" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />-->
          <?php
          
			 // $getimage="";
			 // $getUsername="";
			 // $img="";
			 // $query = "select Image from staff_image_tb AS S where S.Staff_id='$getdbbaseid'";
			 //  $result6 =mysqli_query($con,$query);
			 //   if($row= mysqli_fetch_array($result6)){
				//     $img = $row['Image'];
				// 	//echo $img;
				// 	echo " <img src='StoredImages/$img' alt='NoImage' style='width:95px; height:60px' class='w3-bar-item w3-margin-bottom w3-circle w3-right'/>";
				//    }
				   
				   
			 
		  ?>
       </div>
      <div class="w3-container w3-teal w3-center">
        <strong>PERFORMANCE MANAGER</strong><br />
        Conference And Learned Society Activities
      </div>
    <div class="w3-display-container w3-round-xxlarge">
      <div class="w3-display-topmiddle  w3-black  w3-round-xxlarge">  
       <form class="w3-container" action="javascript:void(0)" method="post">
          <div class="w3-row-padding">
             <div class="w3-col m6" style="width:50%">
                    <div class="w3-section">
                <select id="avitityct" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                 <option value="" disabled selected>Activity</option>
                 <option value="Conference">Conference</option>
                 <!--<option value="Other Tetiary Institution" >Seminar</option>
                 <option value="Other Tetiary Institution" >Workshop</option>-->
                 <option value="Workshop" >Workshop</option>
                 <option value="Media Presentation" >Media Presentation</option>
                 <option value="Seminar" >Seminar</option>
                </select>
               </div>
               <div class="w3-section">
                 <fieldset>
                   <legend class="w3-white">Venue</legend>
                   <div class="w3-section">
                    <select class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                     <option value="" disabled selected>Country</option>
                     <option value="Nigeria">Nigeria</option>
                     <option value="Other Tetiary Institution" >Other Tetiary Institution </option>
                    </select>
                   </div>
                  <div class="w3-section">
                   <input id="istdt"  class="w3-input w3-border w3-light-grey" type="text" placeholder="City/State">
                  </div>
                  <div class="w3-section">
                   <input id="istdt"  class="w3-input w3-border w3-light-grey" type="file" placeholder="Upload Cert">
                  </div>
                 </fieldset>
               </div> 
             </div>
             <div class="w3-col m6">
                  <div class="w3-section">
                   <input id="istdt"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Title">
                  </div>
                 <div class="w3-section">
                 <fieldset>
                   <legend class="w3-white">Duration</legend>
                  <div class="w3-section">
                   <input id="dstdt"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Duration in days">
                  </div>
                  <div class="w3-section">
                   <input id="dfidt"  class="w3-input w3-border w3-light-grey" type="file" placeholder="End Date">
                  </div>
                 </fieldset>
               </div>
             </div>
          <div class="w3-container">
           <div class="w3-bar">
           <a href="#" class="w3-bar-item w3-left w3-blue w3-btn w3-round-xlarge"><strong>&lt;</strong> More</a>
           <button type="submit" class="w3-bar-item w3-right w3-blue w3-btn w3-round-xlarge" onclick="conferenzFunc()"><i class="fa fa-windows"></i> Done</button>
           </div>
          </div>
          </div>
       </form>
      </div>
    </div>
  </div>
</body>
</html>