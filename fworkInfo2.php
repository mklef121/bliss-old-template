<?php //include "Connection.php";?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Work Information</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<<link rel="stylsheet" type="text/css" href="CSS/cssRevision.css">
<script src="fujs.js" type="text/javascript"></script>
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<<script>
     
	var myCalendar;
	function doOnLoad(){
		myCalendar = new dhtmlXCalendarObject("assumD");
		myCalendar = new dhtmlXCalendarObject("ratifyDA");
  	myCalendar = new dhtmlXCalendarObject("confirmDAP");
	//	myCalendar = new dhtmlXCalendarObject("confirm");
		}
</script>
</head>

<body onload="doOnLoad()" class="w3-content w3-animate-opacity" style="max-width:2000px;">
<!--nav-->
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a href="performManager.html" class="w3-bar-item w3-btn w3-red w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
     </div>
 </div>
 
<div class="w3-container w3-mobile w3-teal w3-center w3-round-large" style="width:100%; min-width:500px;margin-top:10px;">
     <h3 class="w3-teal w3-center">Work Information Panel</h3>
</div>

<div class="w3-container" style="margin-top:;"> <!--container for all-->
    <form class="w3-container" action="javascript:void(0)" method="post">
      <fieldset class="w3-round-large w3-card-4" style="margin-top:10px;">
            <div class=" w3-row-padding">
            <div class="w3-col m6">
                  <div class="w3-section">
                   <input id="stafno" class="w3-input w3-border w3-light-grey" type="text" placeholder="Staff No:">
                  </div>
                  <div class="w3-section">
                   <input id="assumD" class="w3-input w3-border w3-light-grey" type="text" placeholder="Date Of Assumption Of Duty">
                  </div>
                
                  <div class="w3-section">
                   <input id="ratifyDA" class="w3-input w3-border w3-light-grey" type="text" placeholder="Date Of Ratification Of Appoinment">
                  </div>
               <div class="w3-section">
                   <input id="confirmDAP"  class="w3-input w3-border w3-light-grey" type="text" placeholder="Date Of Confirmation Of Appoinment">
               </div>
               <div class="w3-section">
                <select id="stOfApp" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                 <option value="0" disabled selected>Status Of First Appointment</option>
                 <option value="Professor">Professor</option>
                 <option value="Reader" >Reader</option>
                 <option value="Senior Lecturer">Senior Lecturer</option>
                 <option value="Lecturer 1" >Lecturer 1</option>
                 <option value="Lecturer 2">Lecturer 2</option>
                 <option value="Assistant Lecturer" >Assistant Lecturer</option>
                 <option value="Graduate Assistant" >Graduate Assistant</option>
                </select>
               </div>
               <div class="w3-section">
                <select id="facutic" onchange="loadDepFwok(this.value)" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                <!-- <option value="" disabled selected>Faculty</option>
                 <option value="Agric/Food Engineering">Agric/Food Engineering</option>
                 <option value="Elect/Elect Engineering" >Elect/Elect Engineering</option>-->
                
                </select>
               </div>
              <div id="displayM"></div>
            </div>
            
          <div class="w3-col m6">
               <div class="w3-section">
                <select id="preStat" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                 <option value="" disabled selected>Present Status</option>
                 <option value="Professor">Professor</option>
                 <option value="Reader" >Reader</option>
                 <option value="Senior Lecturer">Senior Lecturer</option>
                 <option value="Lecturer 1" >Lecturer 1</option>
                 <option value="Lecturer 2">Lecturer 2</option>
                 <option value="Assistant Lecturer" >Assistant Lecturer</option>
                 <option value="Graduate Assistant" >Graduate Assistant</option>
                </select>
               </div>
                <div class="w3-section">
                 <fieldset>
                   <legend>Present Salary</legend>
                   <div class="w3-section">
                    <select class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                     <option value="" disabled selected>Level or Rank</option>
                     <option value="CONUASS 7">CONUASS 7</option>
                     <option value="CONUASS 6">CONUASS 6</option>
                     <option value="CONUASS 5">CONUASS 5</option>
                     <option value="CONUASS 4">CONUASS 4</option>
                     <option value="CONUASS 3">CONUASS 3</option>
                     <option value="CONUASS 2">CONUASS 2</option>
                     <option value="CONUASS 1">CONUASS 1</option>
                    </select>
                   </div>
                   <div class="w3-section">
                    <select id="stepTR" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                     <option value="" disabled selected>Step</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
                    </select>
                   </div>
                 </fieldset> 
                </div>
               <div class="w3-section">
                <select id="daptyu" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                 <option value="" disabled selected> Select Department</option>
                 <!--<option value="SEET">SEET</option>
                 <option value="SMAT">SMAT</option>
                 <option value="SOHT">SOHT</option>
                 <option value="SOSC">SOSC</option>-->
                </select>
               </div> 
          </div>
          </div>
               <div class="w3-container w3-center">
                 <div class="w3-section">
                <button type="submit" class="w3-btn w3-blue w3-round-xxlarge w3-center w3-margin-right" onclick="workInfoDB()"><i class="fa fa-windows w3-text-black"></i> Submit</button>
               
                </div>
                <div class="w3-container">
                     <a href="generalNav1.html" onclick="" type="submit" class="w3-btn w3-right w3-round w3-blue">Done</a>
               </div>
               </div>
               
            </fieldset>
            
          </form>
</div><!--end contai all-->
  

 
</body>
</html>