<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Of Professional Body</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<<link rel="stylsheet" type="text/css" href="CSS/cssRevision.css">
<script src="fujs.js" type="text/javascript"></script>
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>

</head>

<body class="w3-content w3-animate-opacity" style="max-width:1500px">
<!--nav-->
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a href="performManager.html" class="w3-bar-item w3-btn w3-red  w3-hide-small   w3-hover-light-grey">Home</a>
         <a href="#" class="w3-bar-item w3-btn w3-hide-small  w3-hover-light-grey">About Us</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hide-small   w3-hover-light-grey">Contact</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
     </div>
 </div>
 
     <div class="w3-container w3-round-large w3-mobile w3-teal w3-center" style="width:100%; min-width:500px; margin-top:10px;">
       <h6>PERFORMANCE MANAGER</h6>
       <strong>Member Of Professional Body</strong>
     </div>
 <div class="w3-container"> <!--container for all-->
   
       <div class="w3-display-container" style="height:400px;">
            <div class="w3-display-topmiddle">
                <form class="w3-container w3-margin-top" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <fieldset class="w3-card-4 w3-round-large">
                    <!--row 1-->
                    <div class="w3-row-padding">
                         <div class="w3-section">
                             <input id="profBody" class="w3-input w3-border" type="text" placeholder="Enter Professional Body" />
                        </div>
                    </div>
                    <!--row 2-->
                    <div class="w3-row-padding">
                        <div class="w3-section">
                             <input id="regDate" class="w3-input w3-border" type="text" placeholder="Registration Date" />
                        </div>
                    </div>
                    <!--row 3-->
                    <div class="w3-row-padding">
                            <div class="w3-section">
                              <select id="statusMFP" class="w3-select w3-light-gray w3-border " name="option" >
                                <option value="0" disabled selected>Status</option>
                                <option value="Member">Member</option>
                                <option value="Senior Member" >Senior Member</option>
                                <option value="Fellow">Fellow</option>
                                <option value="Patron">Patron</option>
                              </select>
                           </div>
                    </div>
                    <!--row 4-->
                    <div class="w3-row-padding">
                        <div class="w3-section">
                             <input id="memShipNo" class="w3-input w3-border" type="text" placeholder="Membership Number" />
                        </div>
                    </div>
                    <!--row 5-->
                    <div class="w3-row-padding">
                        <div class="w3-section">
                             <input class="w3-input" type="file" id="file" name="file" />
                        </div>
                    </div>
                    <!--buttons-->
                    <div class="w3-container">
                        <a href="#" class="w3-btn w3-blue w3-left">More</a>
                       <button id="narginTopic" type="submit" class="w3-btn w3-blue w3-right" onclick="membershipOfProBody()">Done</button>
                    </div>
                 </fieldset>
                </form>
            </div>
       </div>
    <div id="loader" style="display:none"></div>
 </div><!--end contai all-->
  

 
</body>
</html>