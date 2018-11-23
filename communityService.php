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
<title>Academic Background</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>

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
      <h6 class=" w3-container w3-teal w3-center">
       <p>PERFOMANCE MANAGER</p>
        <small><strong>Community Service</strong></small>
        
      </h6>
    <div class="w3-display-container w3-round-xxlarge w3-white" style=" height:480">
         <div class=" w3-display-topmiddle">
          <div class="w3-card-4 w3-round-xxlarge">
           <form class="w3-container" action="javascript:void(0)" method="post">
              <div class="w3-row">
                <div class="w3-col m12" style="width:100%">
                     <div class="w3-section">
                     <select name="option" class="w3-select">
                       <option value="" disabled selected>Choose Nature Of Service</option>
                       <option value="Research Extention Work">Research Extention Work</option>
                       <option value="Service">Service In Public Bodies</option>
                       <option value="Membership">Membership Of Socio-Cultural Groups</option>
                       <option value="Editorship Of Learned Jornals">Editorship Of Learned Jornals</option>
                       <option value="Public Lectures">Public Lectures/Radio And TV Talks</option>
                       <option value="Service To Learned">Service To Learned And Professional Bodies</option>
                       <option value="Intellectual or creative activities outside your discipline">Intellectual or creative activities outside your discipline</option>
                      </select>
                   </div>
                     <div class="w3-section">
                       <input class="w3-input" type="text" id="coserv" placeholder="Name/Title Of Service" />
                     </div>
                     <div class="w3-section">
                        <input class="w3-input" type="text" id="commstart" placeholder="Enter Start Time" />
                     </div>
                     <div class="w3-section">
                       <input class="w3-input" type="text" id="commfin" placeholder="Enter Finish Time" />
                     </div>
                </div>
              </div>
                <div class="w3-row">
                  <div class="w3-col m4">
                     <a href="#" class="w3-btn w3-blue w3-margin-left"><i class="fa fa-windows"></i> Back</a>
                  </div>
                  <div class="w3-col m4">
                    
                      <button type="submit" class="w3-btn fa fa-windows w3-margin-top  w3-blue w3-margin-bottom w3-margin-left">Submit</button>
                  </div>
                  <div class="w3-col m4">
                     <a href="#" class="w3-btn w3-blue w3-margin-left"><i class="fa fa-magnet"></i> More</a>
                  </div>
                  
                </div>
           </form>
          </div>
          </div>
    </div>
 </div>
</body>
</html>