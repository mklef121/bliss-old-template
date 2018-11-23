<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Academic Background</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<<link rel="stylsheet" type="text/css" href="CSS/cssRevision.css">
<script src="fujs.js" type="text/javascript"></script>
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<<script>
     
	var myCalendar;
	function doOnLoad(){
		myCalendar = new dhtmlXCalendarObject("stTime");
		myCalendar = new dhtmlXCalendarObject("fiSt");
	//	myCalendar = new dhtmlXCalendarObject("confirm");
		}
</script>

</head>

<body onload="doOnLoad()" class="w3-content w3-animate-opacity" style="max-width:2000px">
<!--nav-->
 <div class="w3-top">
   <div class="w3-bar w3-black w3-mobile">
         <a href="performManager.html" class="w3-bar-item w3-btn w3-red ">Home</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">About Us</a>
         <a href="#" class="w3-bar-item w3-btn  w3-hover-light-grey">Home</a>
         <img src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:50px; height:32px;" class="w3-bar-item w3-circle w3-white w3-right" />
         <a href="#" class="w3-bar-item w3-hide-small w3-btn w3-right  w3-hover-light-grey"><i class="fa fa-sign-out"></i> Signout</a>
     </div>
 </div>
 
     <div class="w3-container w3-mobile w3-round-large w3-teal w3-center" style="width:100%;margin-top:10px; min-width:500px;">
        <h6><strong>PERFORMANCE MANAGER</strong></h6>
         <p><strong><small>Academic Background(Qualification)</small></strong></p>
     </div>
 <div class="w3-container"> <!--container for all-->
    <fieldset class="w3-margin-top w3-round-xlarge w3-card-4 w3-margin-bottom">
    <form class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">
        <!--try this-->
          <div class="w3-display-container" style="height:500px;;">
             <div class="w3-display-topmiddle">
               <fieldset class="w3-card-4 w3-round-large w3-margin-top">
                 <div class=" w3-row-padding">
              <!---->
               <div class="w3-col m6  w3-mobile" style="width:50%">
                     <div class="w3-section">
                      <select id="chcert" class="w3-select w3-light-gray w3-border " name="option" >
                        <option value="0" disabled selected>Choose Certificate and Upload Cert Below</option>
                        <option value="Bsc">Bsc</option>
                        <option value="M.Eng" >M.Eng</option>
                        <option value="PHD" >PHD</option>
                      </select>
                     </div>
                     <div class="w3-section">
                       <input id="stTime" class="w3-input w3-border w3-light-grey" type="text" placeholder="Start Date">
                     </div>  
                     <div class="w3-section">
                       <input id="filed" type="file" name="filed" class="w3-input"  />  
                     </div>
                     <select id="menggg" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                        <option value="0" disabled selected>M.Eng</option>
                        <option value="Yes">Yes</option>
                        <option value="No" >No</option>
                      </select>
               </div>
              <!---->
               <!--2 col-->
               <div class="w3-col m6 w3-mobile">
                     <div class="w3-section">
                      <select id="inStuty" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                        <option value="0" disabled selected>Institution</option>
                        <option value="Uniuyo">Uniuyo</option>
                        <option value="FUTO" >FUTO</option>
                      </select>
                     </div>
                     <div class="w3-section">
                       <input id="fiSt" class="w3-input w3-border w3-light-grey" type="text" placeholder="Finish Date">
                     </div>
                      <div class="w3-section">
                      <select id="coreNNID" class="w3-select w3-light-gray w3-border w3-margin-right" name="option" >
                        <option value="0" disabled selected>COREN</option>
                        <option value="Yes">Yes</option>
                        <option value="No" >No</option>
                      </select>
                      <select id="phHdPP" class="w3-select w3-light-gray w3-margin-top w3-border w3-margin-right" name="option" >
                        <option value="0" disabled selected>PhD</option>
                        <option value="Yes">Yes</option>
                        <option value="No" >No</option>
                      </select>
                     </div>    
               </div>
               <!--end 2 col-->
          
           </div> 
           <div class="w3-row"> <!--second row-->
              <div class="w3-col m12" style="width:100%">
                 <div class="w3-section">
                       <input id="fieldBa" class="w3-input w3-border w3-light-grey" type="text" placeholder="Field of Study">
                  </div>
                   <div class="w3-section">
                       <input id="aop" class="w3-input w3-border w3-light-grey" type="text" placeholder="Area Of Specialization">
                   </div>  
              </div>
             
           </div>
            <div class="w3-container">
             <div class="w3-bar">
               <a href="facademicBackgroung1.php" class="w3-btn w3-margin-right w3-round-medium w3-blue w3-bar-item w3-left">More</a>
               <button type="submit" class="w3-btn w3-round-medium w3-blue w3-right w3-bar-item" onclick="acaBackgroung()">Done</button>
             </div>
            </div>
            </fieldset>
            <div class="w3-container w3-center">
               
                <a href="#" class=" w3-margin w3-blue w3-btn w3-round-xlarge"><strong>&lt;</strong> Prev</a>
                <a href="fworkInfo2.php" class=" w3-margin w3-blue w3-btn w3-round-xlarge">Next <strong>&gt;</strong></a>
               
            </div>
             </div> 
          </div>
        <!--try this-->
       
    </form>    
 </fieldset> 
 </div><!--end contai all-->
  
<div id="ggfg">
  
</div>
 
</body>
</html>