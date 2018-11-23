<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
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
  var mydisDate = setInterval(myTimer, 1000);
    function myTimer(){
		var d = new Date()
		document.getElementById('dat').innerHTML= d.toLocaleTimeString();
		}
		
  window.onload = function mys(){
	    document.getElementById('im').style.display="none";
		  var count = 0;
		  var myInt = setInterval(showIma,1000);
					 function showIma(){
						   document.getElementById('im').style.display="block";
						    if(count==3){
								clearInterval(myInt);
								}else{
									document.getElementById('im').style.display="none";
									}
						 }
						   
					
		   
	  }
</script>
</head>

<body style="background-color:rgba(192,220,192,1)">
<div onmouseover="mover()" onmouseout="mout()" class="w3-sidebar w3-black w3-text-white w3-bar-item w3-collapse w3-card-4 w3-animate-left" style="width:200px;" id="mysideBar">
 <button class="w3-button w3-bar-item w3-xlarge w3-hide-large" onclick="w3_close()">Close &times;</button>
 <div class="w3-section w3-center">
   <i class="fa fa-user-plus w3-xxxlarge w3-round-xxlarge" style=" background-color:#396"></i>
   <h5><a href="#" id="displayNames" class="w3-bar-item w3-button w3-margin-bottom w3-animate-left" style="display:none; color:">Add Admin</a></h5>
 </div>
 
 <div class="w3-section w3-center" style="color:">
   <i class="fa fa-user-circle w3-xxxlarge w3-round-xxlarge" style=" background-color:#396; color:white"></i>
   <h5><a href="#" id="displayNames" class="w3-bar-item w3-button w3-margin-bottom w3-animate-left" style="display:none">Add Schools</a></h5>
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
<div class="w3-main" style="margin-left:230px;">
 <div class="w3-display-container" style="width:; height:100%; overflow:hidden; position:absolute">
     <div class="w3-white w3-round-xlarge">
      <button class="w3-button w3-white w3-xlarge w3-hide-large" onclick="w3_open()"><i class="fa fa-bars"></i></button>
      <div class="w3-container" style="height:100px;">
        <div class="w3-bar">
          <img src="FUTO_logo.png" width="100" height="100" class="  w3-circle w3-bar-item"/>
          <h1 class="w3-bar-item w3-margin-top" style="color:#396"><strong>FUTO</strong></h1>
          <div id="dat" class="w3-center w3-text-red w3-bar-item w3-right w3-margin-top"></div>
          <img id="im" src="FUTO_logo.png" width="40" height="30" class="  w3-circle w3-bar-item"/>
        </div>
      </div>
     </div>
     <img class="w3-responsive w3-opacity w3-margin-top w3-round-xlarge"  src="jon-phillips-17576.jpg" alt="" style="width:100%" />
     <div class="w3-display-middle w3-center">
        <img class="w3-responsive w3-margin-top " src="FUTO_logo.png" style="width:170px; height:117px" />
        <strong><marquee class="w3-text-green w3-black w3-round-xxlarge w3-margin-top">Technology For Service </marquee></strong>
     </div>
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