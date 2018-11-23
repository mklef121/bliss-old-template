<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOD/Dean Assessment</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="CSS/cssRevision.css" rel="stylesheet" type="text/css" />
<script src="fujs.js" type="text/javascript"></script>
</head>

<body class="w3-content w3-animate-opacity" style="max-width:1500px;">
<!--nav-->
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-red w3-hover-red w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
         <a href="performManager.html" class="w3-bar-item w3-hide-small w3-red w3-btn  w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn w3-hide-small  w3-hover-light-grey">Contact Us</a>
         <a href="#" class="w3-bar-item w3-btn w3-hide-small  w3-hover-light-grey">About Us</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-hide-small w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
   </div>
   <!--heading-->
   <div class="w3-container w3-teal w3-round-large w3-center w3-mobile" style="min-width:500px; margin-top:-2px;"> 
              <h6><strong>HOD/DEAN ASSESSMENT</strong></h6> 
   </div>
 </div>
 
 <!--main content-->
 <div class="w3-container w3-text-green" style="margin-top:46px;">
   <div class="w3-display-container" style="height:300px;">
     <div class="w3-display-topmiddle" style="width:50%">
       <form action="javascript:void(0)" method="post">
         <fieldset class="w3-round-large w3-black w3-card-4 w3-margin-bottom" style="margin-top:48px;">
       <!--row for all staff-->
     <div class="w3-row-padding" style="width:100%;">
       <div class="w3-col m12">
        <div class="w3-section w3-padding">
                     <select class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="" disabled selected>Staff</option>
                        <option value="Books">db</option>
                      </select>
        </div>
       </div>    
     </div>
     <!--row 1-->
     <div class=" space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Attendance to meetngs  <i class="fa fa-angle-right w3-hide-small w3-xlarge"></i></strong>
       </div>
       <div class="w3-col m4">
          <select id="opt" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
     
      <!--row 3-->
     <div class="space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Regularity to work</strong>
       </div>
       <div class="w3-col m4">
          <select id="opt2" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
      <!--row 4-->
     <div class="space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Availability to take Responsibilities</strong>
       </div>
       <div class="w3-col m4">
          <select id="opt3" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
      <!--row 5-->
     <div class="space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Timely Submission of Result</strong>
       </div>
       <div class="w3-col m4">
          <select id="opt4" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
      <!--row 6-->
     <div class="space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Participation in School Event</strong>
       </div>
       <div class="w3-col m4">
          <select id="opt5" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
      <!--row 7-->
     <div class="space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Promt Response to memo</strong>
       </div>
       <div class="w3-col m4">
          <select id="optt6" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
      <!--row 8-->
     <div class="space2 w3-row-padding" style="width:97%;">
       <div class="w3-col m8">
         <i class="fa fa-balance-scale w3-xxlarge"></i> <strong>Availability on campus</strong>
       </div>
       <div class="w3-col m4">
          <select id="opt7" class="w3-select w3-light-gray w3-border " name="option" >
                 <option value="" disabled selected>Please Select</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
          </select>
       </div>
     </div>
     <div class="w3-container w3-center">
       <button type="submit" class="w3-btn w3-round w3-blue w3-margin" onclick="HOD_DEAN()">Submit</button>
     </div>
     </fieldset>
   </form>
     </div>
   </div>
 </div>
</body>
</html>