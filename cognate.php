<!-- <?php
//include "Connection.php";
//session_start();
  // $getdbbaseid="";
  // $getloginUsername =  $_SESSION['Username']; //username supplied by the user
  //   $query10 = "select Staff_id from staff_tb where Username='$getloginUsername'";
	 // $result10 = mysqli_query($con,$query10);
	 //  while($row10=mysqli_fetch_array($result10)){
		//     $getdbbaseid = $row10[0];
		//   }
?> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cognate Experience</title>
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

<body class="w3-animate-opacity"  onload="doOnLoad()">
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
        Cognate Experience
      </div>
      <div class="w3-display-container">
        <div class="w3-display-topmiddle w3-black w3-round-xxlarge">
     <form class="w3-container" method="post" action="javascript:void(0)">
       <div class="w3-row-padding">
         <div class="w3-col m6 w3-mobile" style="width:50%">
           <div class="w3-section">
                <select id="institutn" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                 <option value="" disabled selected>Institution</option>
                 <option value="Univeraity">University</option>
                 <option value="Other Tetiary Institution" >Other Tertiary Institutions </option>
                </select>
           </div>
           <div class="w3-section">
               <input id="istdt"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Start Date">
           </div>
          <div class="w3-section">
                <select id="postMastic" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                 <option value="" disabled selected>Post-Master/Other related Papers</option>
                 <option value="PostMasters">Post-Masters Experience</option>
                 <option value="Other Papers" >Others </option>
                </select>
           </div>
            <div class="w3-section">
               <input id="postdt"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Start Date For Post-Masters/Place">
            </div>
         </div>
         <div class="w3-col m6 w3-mobile">
           <div class="w3-section">
             <input id="confirm"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Institution Name:">
           </div>
           <div class="w3-section">
             <input id="confirm"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Finish Date">
           </div>
           <div class="w3-section">
             <input id="confirm"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Status">
           </div>
           <div class="w3-section">
             <input id="confirm"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Finish Date  For Post-Masters/Place">
           </div>
         </div>
        <div class="w3-container">
           <div class="w3-bar w3-margin-top">
           <a href="#" class="w3-bar-item w3-left w3-blue w3-btn w3-round-xlarge"><strong>&lt;</strong> More</a>
           <button type="submit" class="w3-bar-item w3-right w3-blue w3-btn w3-round-xlarge" onclick="selectedCognate()"><i class="fa fa-windows"></i> Done</button>
           </div>
        </div>
       </div>
     </form>
    </div>
  </div>
</body>
</html>