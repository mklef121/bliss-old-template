<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal Datails</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<<link rel="stylsheet" type="text/css" href="CSS/cssRevision.css">
<script src="fujs.js" type="text/javascript"></script>
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>

</head>

<body class="w3-content w3-animate-opacity" style="max-width:2000px">
<!--nav-->
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a href="performManager.html" class="w3-bar-item w3-btn w3-red  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">About</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Contact Us</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
     </div>
 </div>
 
     <div class="w3-container w3-round-large w3-mobile w3-teal w3-center" style="width:100%;margin-top:10px; min-width:500px;">
        <h5 class="w3-teal w3-center">Personal Information</h5>
     </div>
 <div class="w3-container"> <!--container for all-->
     <form class="w3-container" action="javascript:void(0)" method="post">
         <fieldset class="w3-card-4 w3-round-large" style="margin-top:20px;">
            <div class=" w3-row-padding">
            <div class="w3-col m6  w3-mobile">
                  <div class="w3-section">
                   <input id="firname" class="w3-input w3-border w3-light-grey" type="text" required="required" placeholder="Enter First Name">
                  </div>
                
               <div class="w3-section">
                   <input id="midnamM" class="w3-input w3-border w3-light-grey" type="text" required="required" placeholder="Enter Middle Name">
                  </div>
               <div class="w3-section">
                   <input id="suNmesZ" class="w3-input w3-border w3-light-grey" type="text" required="required" placeholder="Enter Surname Name">
                  </div>
               <div class="w3-section">
                <select id="geDD" class="w3-select w3-light-gray w3-border w3-margin-right" name="option">
                 <option value="0" disabled selected>Choose Genger</option>
                 <option value="Male">Male</option>
                 <option value="Female" >Female</option>
                </select>
               </div>
               <div class="w3-section">
                <select id="mStatuZZ" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" placeholder="Enter First Name">
                 <option value="0" disabled selected>Marital Status</option>
                 <option value="Married">Married</option>
                 <option value="Single" >Single</option>
                 <option value="Divorced" >Divorced</option>
                </select>
               </div>
            </div>
          <div class="w3-col m6 w3-mobile">
              <div class="w3-section w3-margin-top">
                <select id="noOCh" class="w3-select w3-light-gray w3-border w3-margin-right" name="option">
                 <option value="45" disabled selected>Choose No Of Children..</option>
                 <option value="0">None</option>
                 <option value="1" >1</option>
                 <option value="2">2</option>
                 <option value="3" >3</option>
                 <option value="4">4</option>
                 <option value="5" >5</option>
                 <option value="6">6</option>
                 <option value="7" >7</option>
                 <option value="8">8</option>
                 <option value="9" >9</option>
                  <option value="10">10</option>
                 <option value="11" >11</option>
                </select>
               </div>
                  <div class="w3-section">
                   <input id="natonty" class="w3-input w3-border w3-light-grey" required="required" type="text" placeholder="Nationality">
                  </div>
                
               <div class="w3-section">
                   <input id="agePerdd" class="w3-input w3-border w3-light-grey" required="required" type="text" placeholder="Age">
                 </div>
               <div class="w3-section">
                   <input id="phonNum" class="w3-input w3-border w3-light-grey" type="text" required="required" placeholder="Phone Number">
                  </div>
               <div class="w3-section">
                   <input id="emaiL" class="w3-input w3-border w3-light-grey" type="email" required="required" placeholder="Email Address">
                  </div>
              
          </div>
          </div>
          <div class="w3-container w3-center">
             <button type="submit" class="w3-btn w3-blue w3-round-xxlarge" onclick=" persDetailzZxx()"><i class="fa fa-windows w3-text-black"></i> Submit</button>
          </div>
          <div class="w3-bar-">
             <a href="#" class="w3-bar-item w3-left w3-margin w3-blue w3-btn w3-round-xlarge"><strong>&lt;</strong> Previous</a>
             <a href="facademicBackgroung1.php" class="w3-bar-item w3-right w3-margin w3-blue w3-btn w3-round-xlarge">Next <strong>&gt;</strong></a>
          </div>
          </fieldset>
          </form>
 </div><!--end contai all-->

 <div class="w3-row w3-hide">
        <div class="w3-container" style="margin-top:46px; z-index:999">
             <button class="w3-btn w3-blue" type="submit" onclick="ally()">Use Me</button> 
        </div>
</div>
 
</body>
</html>