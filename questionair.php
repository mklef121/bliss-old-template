<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<script src="fujs.js" type="text/javascript"></script>
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<script>
  function mover(){
	 var x = document.querySelectorAll('#displayNames');
	 var i;
	   for(i=0; i<x.length; i++){
		   x[i].style.display="block";
		   x[i].style.color="#396";
		   }
	  }
   function mout(){
     var x = document.querySelectorAll('#displayNames');
	 var i;
	   for(i=0; i<x.length; i++){
		   x[i].style.display="none";
		 
		   }
	  
	  }
  function w3_close(){
	  document.getElementById('mysideBar').style.display="none";
	  }
  function w3_open(){
	  document.getElementById('mysideBar').style.display="block";
	  }
   function openTabs(evt, cityName){
	    var i, x, tablinks;
		x = document.getElementsByClassName('city');
		for (i=0; i<x.length; i++){
			x[i].style.display="none";
			}
			tablinks = document.getElementsByClassName('tablink');
			for(i=0; i<x.length; i++){
				tablinks[i].className=  tablinks[i].className.replace("w3-border-green", "");
				}
				 document.getElementById(cityName).style.display = "block";
                evt.currentTarget.firstElementChild.className += " w3-border-green";
	   }
</script>
<style>
 
</style>
</head>

<body id="bo" style="background-color:rgba(242,242,242,1)">
<div onmouseover="mover()" onmouseout="mout()" class="w3-sidebar w3-black w3-text-white w3-bar-item w3-collapse w3-card-4 w3-animate-left" style="width:200px;" id="mysideBar">
 <button class="w3-button w3-bar-item w3-xlarge w3-hide-large" onclick="w3_close()">Close &times;</button>
 <div class="w3-section w3-center">
   <i class="fa fa-home w3-xxxlarge w3-round-xxlarge" style=" background-color:#396"></i>
   <h5><a href="#" id="displayNames" class="w3-bar-item w3-button w3-margin-bottom w3-animate-left" style="display:none; color:">Home</a></h5>
 </div>
 
 <div class="w3-section w3-center">
   <i class="fa fa-user-times w3-xxxlarge w3-round-xxlarge" style=" background-color:#396"></i>
   <h5><a href="#" id="displayNames" class="w3-bar-item w3-button w3-margin-bottom w3-animate-left" style="display:none">Add Department</a></h5>
 </div>
 
 <div class="w3-section w3-center">
   <i class="fa fa-user-circle-o w3-xxxlarge w3-round-xxlarge" style=" background-color:#396"></i>
   <h5><a href="#" id="displayNames" class="w3-bar-item w3-button w3-margin-bottom w3-animate-left" style="display:none">Add LeaveType</a></h5>
 </div>
 
 <div class="w3-section w3-center">
   <i class="fa fa-user-o w3-xxxlarge w3-round-xxlarge" style=" background-color:#396"></i>
   <h5><a href="#" id="displayNames" class="w3-bar-item w3-button w3-margin-bottom w3-animate-left" style="display:none">Faculty/Schools</a></h5>
 </div>
</div>
<div class="w3-main w3-responsive w3-mobile" style="margin-left:230px; overflow:auto;">
 <div class="w3-display-container" style="width:; height:100%; position:absolute">
     <div class="w3-white w3-round w3-card" style="width:900px;">
      <button class="w3-button w3-white w3-xlarge w3-hide-large" onclick="w3_open()"><i class="fa fa-bars"></i></button>
      <div class="w3-container" style="height:100px;">
        <div class="w3-bar">
          <img src="FUTO_logo.png" width="100" height="100" class="  w3-circle w3-bar-item"/>
          <h1 class="w3-bar-item w3-margin-top" style="color:#396"><strong>Federal University of Technology, Owerri</strong></h1>
        </div>
      </div>
     </div>
     <!--Display tab on the top middle-->
     <div class=" w3-container w3-border-bottom w3-blue w3-card w3-white" style=" z-index:10; margin-top:30px; height:100px; overflow:auto; ">
      <h5 class="w3-responsive w3-mobile" style="color:#396">STUDENTS’  APPRAISAL OF LECTURERS' COMPETENCIES</h5>
     </div>
     <!--creating tabs-->
     <div class=" w3-container w3-blue w3-card w3-white" style=" z-index:10;">
       <a href="javascript:void(0)" onclick="openTabs(event, 'Details')">
         <!--containing tabs-->
         <div class="w3-col m3 tablink w3-bottombar w3-hover-white w3-hover-border-red  w3-padding"><i class="fa fa-th-large"></i> Student <br />Details</div>
       </a>
       <a href="javascript:void(0)" onclick="openTabs(event, 'Performance')">
         <!--containing tabs-->
         <div class="w3-col m3 tablink w3-bottombar w3-hover-white w3-hover-border-red w3-padding"><i class="fa fa-th-large"></i> Course<br /> Details</div>
       </a>
       <a href="javascript:void(0)" onclick="openTabs(event, 'Information1')">
         <!--containing tabs-->
         <div class="w3-col m3 tablink w3-bottombar w3-hover-light-grey w3-hover-border-red w3-padding"><i class="fa fa-columns"></i> Evaluation <br /> Questions</div>
       </a>
       
     </div>
     <!--special div that's controling actions-->
     <div id="Details" class="w3-container city" style="display:none">
     
       <h4 class="w3-center"><strong>Student Details</strong></h4> 
         <form action="javascript:void(0)" method="post" class=" w3-margin w3-text-green w3-container w3-card-4">
           <div class=" w3-row-padding">
             <div class="w3-col m6">
               <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
              <select class="w3-select w3-white w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Session</option>
                 <option value="Male">2017/2018</option>
                 <option value="Female" >2018/2019</option>
              </select>
              </div>
           </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
               <select class="w3-select w3-white w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Semester</option>
                 <option value="Male">Harmattan</option>
                 <option value="Female" >Rain</option>
               </select>
              </div>
           </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-white w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Department</option>
                 <option value="Male">Elect/Elect Engineering</option>
                 <option value="Female" >Civil Engineering</option>
                </select>
              </div>
            </div>
           
            </div><!--end of 1st col-->
             <div class="w3-col m6">
               <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-white w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Faculty</option>
                 <option value="SEET">SEET</option>
                 <option value="SMAT" >SMAT</option>
                 <option value="SOHT">SOHT</option>
                 <option value="SOSC" >SOSC</option>
                </select>
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
              <select class="w3-select w3-white w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Level</option>
                 <option value="1">100</option>
                 <option value="2" >200</option>
                 <option value="3" >300</option>
                 <option value="4" >400</option>
                 <option value="5" >500</option>
                 
              </select>
             </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
              <input class="w3-input w3-text-black w3-border" name="first" type="text" placeholder="Reg No.">
              </div>
            </div>
             </div>
           </div>
           <!--submit Buttons-->
           <div class="w3-container w3-margin w3-center">
             <button class="w3-btn w3-blue w3-round-xxlarge" onclick="getStudentDet('getRegNm')">Submit</button>
           </div>
         </form>
     </div>
     <!--perfo start-->
     <div id="Performance" class="w3-container city" style="display:none">
        <h4 class="w3-center"><strong>Course Details</strong></h4> 
         <form action="javascript:void(0)" method="post" class=" w3-margin w3-text-green w3-container w3-card-4">
           <div class=" w3-row-padding">
             <div class="w3-col m6">
               <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
              <input class="w3-input w3-text-black w3-border" name="first" type="text" placeholder="Course Code">
              </div>
           </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
               <select class="w3-select w3-white w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Semester</option>
                 <option value="Male">Harmattan</option>
                 <option value="Female" >Rain</option>
               </select>
              </div>
           </div>
            
           
            </div><!--end of 1st col-->
             <div class="w3-col m6">
               <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                 <input class="w3-input w3-text-black w3-border" name="first" type="text" placeholder="Course Title">
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
               <input class="w3-input w3-text-black w3-border" name="first" type="text" placeholder="Name Of Lecturer">
             </div>
            </div>
            
             </div>
           </div>
           <!--submit Buttons-->
           <div class="w3-container w3-margin w3-center">
             <button class="w3-btn w3-blue w3-round-xxlarge" onclick="details()">Submit</button>
           </div>
         </form> 
     </div>
     <!--infor start-->
     <div id="Information1" class="w3-container city" style="display:none">
        <h4 class="w3-center"><strong>Questionnaire</strong></h4> 
         <form action="javascript:void(0)" method="post" class=" w3-margin w3-text-green w3-container w3-card-4">
           <div class=" w3-row-padding">
             <div class="w3-col m12">
               <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
               <input class="w3-input w3-text-black w3-border" name="first" type="text" placeholder="Venue assigned for the lecturer:……………………………………">
              </div>
           </div>
            
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Did the lecturer(s) give the class a list of books in the area? </strong>
               <label>Yes</label>
               <input type="radio" name="rad_ch3" value="Yes" id="Yes" />
               <label>No</label>
               <input type="radio"  name="rad_ch3" id="No" value="No" checked="checked" />
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Did the lecturer(s) prescribe and impose his/her own book(s) as the one(s) everybody registering for the course must buy? </strong>
               <label>Yes</label>
               <input type="radio" name="rad_ch2" value="Yes" id="Yes" />
               <label>No</label>
               <input type="radio" name="rad_ch2" id="No" value="No" checked="CHECKED" />
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
               <strong>If yes to above did he/she/they directly or indirectly threaten to fail those who did not buy the book(s)  </strong>
               <label>Yes</label>
               <input type="radio" name="rad_ch1" value="Yes" id="Yes" />
               <label>No</label>
               <input type="radio" name="rad_ch1" id="No" value="No" checked="CHECKED" />
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>How many times per week was this lecture expected to hold during the semester?</option>
                 <option value="Male">1 credit hour course </option>
                 <option value="Female" >2 credit hour course </option>
                 <option value="Male">3 credit hour course</option>
                 <option value="Female" >4 and above credit hours </option>
               </select>
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Was the lecturer always in class? </option>
                 <option value="Male">yes – always </option>
                 <option value="Female" >yes most times  </option>
                 <option value="Male">no – we missed over 50% of the lecture </option>
               </select>
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Were you given assignment by the lecturer?</strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch55" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch55" id="No" value="No" checked="CHECKED" />
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
              <strong>Were you given continuous assessment tests in the course?</strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch144" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch144" id="No" value="No" checked="CHECKED" />
                
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
               <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Were such tests marked and results made known to students? </option>
                 <option value="Male">Marked and result made known  </option>
                 <option value="Female" >Marked but result not known  </option>
                 <option value="Male">No, not marked </option>
               </select>
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>INTERPERSONAL SKILL ASSESSMENT</strong>
                                
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Would you say you looked forward attending this particular series of lectures?</strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch555" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch555" id="No" value="No" checked="CHECKED" />
                
              </div>
            </div>
            
            
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Is your teacher able to put across his lessons in easy to understand form?             </strong>
                <label>All the time</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>Sometimes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>Never</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>  
            </div>
          
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>How often is your teacher able to show real life applications of class concepts?</option>
                 <option value="1">All the time </option>
                 <option value="0.75" >Sometimes</option>
                 <option value="0.5">Never</option>
                </select>
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does the lecturer present origin of thoughts and concepts?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does he/she discuss latest development in the field?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                
              </div>  
            </div>
            
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does he provide properly organized notes?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                
              </div>  
            </div>
     
                
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Does the lecturer state objectives for each subject matter?`</option>
                 <option value="1">All the time </option>
                 <option value="0.5" >Sometimes</option>
                 <option value="0" >Never</option>
                </select>
              </div>
            </div>    
            
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Is he/she honest about concepts he does not know clearly?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Indicate how you rate the lecturer as a teacher based on interactions with him/her during the semester.`</option>
                 <option value="1">Excellent teacher </option>
                 <option value="0.75" >Very good teacher</option>
                 <option value="0.5">Good teacher</option>
                 <option value="0.25" >Poor but tolerable</option>
                 <option value="0" >Should not be a teacher at all</option>
               </select>
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>PERSONAL LEADERSHIP SKILL ASSESSMENT</strong>
                                
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Is your lecturer open to different views by students?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does he/she discuss students' views?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Do students participate actively in his/her class?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>
            
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does he/she encourage team work among students?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>How sensitive is he/she to students' non-verbal actions/responses?</option>
                 <option value="1">Very sensitive </option>
                 <option value="0.5" >Sensitive</option>
                 <option value="0">Insensitive</option>
                </select>
              </div>
            </div>
            
             <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>How is his/her relationship with students?</option>
                 <option value="1">Very cordial </option>
                 <option value="0.5" >Cordial</option>
                 <option value="0">Disinterested/cold</option>
                </select>
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>SELF-MANAGEMENT SKILL ASSESSMENT</strong>
                                
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Was he/she able to complete the scheme of work?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does he/she return continuous assessment scripts?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>If YES to above, how long did it take?</option>
                 <option value="1">The next class </option>
                 <option value="0.5" >Two weeks</option>
                 <option value="0">Longer than 2 weeks</option>
                </select>
              </div>
            </div>

             <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <select class="w3-select w3-text-green w3-border w3-margin-right" name="option">
                 <option value="" disabled selected>Does he/she look happy to be in class?</option>
                 <option value="1">Always </option>
                 <option value="0.5" >Sometimes</option>
                 <option value="0">Never</option>
                </select>
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <strong>Does he/she teach with enthusiasm?             </strong>
                <label>Yes</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
                <label>No</label>
                <input type="radio" name="rad_ch12" value="Yes" id="Yes" />
              </div>
            </div>

            <div class="w3-row w3-section">
             <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-th-large"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-text-black w3-border" name="first" type="text" placeholder="Any other comments (use extra sheet if necessary).........">
              </div>
            </div>
            <div class="w3-container w3-margin w3-center">
             <button class="w3-btn w3-blue w3-round-xxlarge" onclick="details()">Submit</button>
           </div>
         </form> 
     </div>
     <!--info2-->
     </div>
</div>

 <!--<div class="w3-sidebar w3-bar-block w3-black w3-card-4" style="width:25%">
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user-circle w3-xxlarge"></i> <span class="w3-margin-bottom">Add Admin</span></a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user w3-xxlarge"></i> Add Schools</a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user-o w3-xxlarge"></i> <span class="w3-margin-bottom">Add Depart</span></a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-sign-out w3-xxlarge"></i> Log Out</a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user-circle w3-xxlarge"></i> <span class="w3-margin-bottom">Add Leave Type</span></a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user w3-xxlarge"></i> Add Schools</a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user-circle w3-xxlarge"></i> <span class="w3-margin-bottom">Add Leave Type</span></a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user w3-xxlarge"></i> Add Schools</a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user-circle w3-xxlarge"></i> <span class="w3-margin-bottom">Add Leave Type</span></a>
   </div>
   <div class="w3-section">
      <a href="#" class="w3-button w3-bar-item"><i class="fa fa-user w3-xxlarge"></i> Add Schools</a>
   </div>
 </div>
 <div style=" margin-left:25%">
    <div class="w3-display-container w3-indigo" style="height:480px;">
      <div class="w3-display-topmiddle">
         <div class="w3-container w3-responsive">
            <img src="FUTO_logo.png" class=" w3-margin-left w3-circle" />
          <div class="w3-container w3-margin-top w3-black w3-round-xlarge w3-card-4">
            <h6>Welcome To Federal University Of Technology, Oweri</h6>
            <h5 class="w3-text-yellow"><marquee>Technology For Service</marquee></h5>
          </div>
         </div>
      </div>
      
    </div>
   
 </div>-->
 <!--<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left" style="width:200px;" id="mysideBar">
   <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
   <a href="#" class="w3-bar-item w3-button">Link1</a>
   <a href="#" class="w3-bar-item w3-button">Link2</a>
   <a href="#" class="w3-bar-item w3-button">Link3</a>
 </div>
 
 <div class="w3-main" style="margin-left:200px">
 <div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()"><i class="fa fa-bars"></i></button>
  <div class="w3-container">
   <h1>My Page</h1>
  </div>
 </div>
 <div class="w3-container">
<h3>Responsive Sidebar</h3>
<p>The sidebar in this example will always be displayed on screens wider than 992px, and hidden on tablets or mobile phones (screens less than 993px wide).</p>
<p>On tablets and mobile phones the sidebar is replaced with a menu icon to open the sidebar.</p>
<p>The sidebar will overlay of the page content.</p>
<p><b>Resize the browser window to see how it works.</b></p>
</div>
 </div>
<script>
  function w3_close(){
	  document.getElementById('mysideBar').style.display='none';
	  }
   function w3_open(){
	  document.getElementById('mysideBar').style.display='block';
	  }
</script>-->
<!--<button onclick="move()">Click</button>
 <div id ="container">
<div id ="animate"></div>
</div>
<script>
  function move(){
	  var elem = document.getElementById('animate');
	  var pos =0;
	  var id = setInterval(frame,5);
	  function frame(){
		   if(pos==350){
		   clearInterval(id);
		   }else{
			   pos++;
			   elem.style.top=pos + 'px';
			   elem.style.left=pos + 'px';
			     var i = setInterval(frame1,5);
				  pos1=-350;
				    function frame1(){
						if(pos1==0){
							clearInterval(i)
							}else{
								 pos--;
			   elem.style.top=pos - 'px';
			   elem.style.left=pos - 'px';
								}
						}
				   
			   }
		  }
	  
	  }
</script>-->
</body>
</html>