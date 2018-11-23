<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accessing WebCam</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="fujs.js" type="text/javascript"></script>
<script>
    function _(el){
		return document.getElementById(el);
	} 
	var data = new FormData();
	function gender(){
		  var  ajax = new XMLHttpRequest(); //creating a new http object
	    
		  data.append("file1",document.querySelector("#file").files[0]);  
		  ajax.onreadystatechange=function(e){
			   if(ajax.status==200 && ajax.readyState==4){
				   //document.querySelector("#displayM").innerHTML=ajax.responseText;
				   if(ajax.responseText==' $dosya. " Upload Completed " '){
					    alert('$dosya."Upload Completed"')
					   }else{
						   alert(ajax.responseText)
						   }
				   }
			  }
	      ajax.upload.addEventListener("progress", progressHandler, false);
		  ajax.addEventListener("load", completeHandler, false);
		  ajax.addEventListener("error", errorHandler, false);
		  ajax.addEventListener("abort", abortHandler, false);
		  ajax.open("POST","server.php",true);
		  ajax.send(data); 
		  
		  
		}
	function progressHandler(event){
		_("progressBar").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
		var percent = (event.loaded / event.total) * 100;
		_("progressBar").value = Math.round(percent);
		_("progressBar").innerHTML = Math.round(percent)+"% uploaded... please wait";
	}
	function completeHandler(event){
		_("progressBar").innerHTML = event.target.responseText;
		_("progressBar").value = 0;
	}
	function errorHandler(event){
		_("progressBar").innerHTML = "Upload Failed";
	}
	function abortHandler(event){
		_("progressBar").innerHTML = "Upload Aborted";
	}
  </script>
</head>

<body>
 <div class="w3-container w3-animate-zoom w3-black w3-text-white" style="width:100%; height:100%; position:absolute">
    <div class="w3-bar">
      <a href="genNav.html" class="w3-bar-item w3-hover-light-grey w3-button">Home</a>
      <a href="#" class="w3-bar-item w3-hover-light-grey w3-button">About Us</a>
      <a href="#" class="w3-bar-item w3-hover-light-grey w3-button">Contact Us</a>
    </div>
    <h4 class="w3-red w3-center">Snap And Right Click On The Image To Save</h4>
    <div class="w3-display-container w3-round-xxlarge w3-margin-top w3-center w3-white" style="height:auto">
        <progress class="w3-margin-left w3-margin-right" id="progressBar" value="0" max="100" style="width:95%; height:3px; color:rgba(255,127,0,1)"></progress>
       <div class="w3-row">
          <div class="w3-col m12">
          <video id="video" class="w3-margin-top" style="width:30%; height:30%x;"></video>
        <canvas id="canvas" class="w3-margin-top" style="width:30%; height:30%;"></canvas><br />
   
        <div class=" w3-bar-">
             <button class="w3-btn w3-blue w3-margin-bottom w3-round-large" type="button" onclick="snap()">Snap</button>
         <a href="fpersonaldetails1.php" class="w3-bar-item w3-right w3-blue w3-btn w3-round-xlarge w3-margin-right">Next</a>
        </div>
         <script>
            var video = document.getElementById('video');
			var canvas = document.getElementById('canvas');
			var context = canvas.getContext('2d');
			
			navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.m5GetUserMedia;
			
			if(navigator.getUserMedia){
				navigator.getUserMedia({video:true}, streamWebCam, throwError);
				}
			
			function streamWebCam(stream){
				video.src = window.URL.createObjectURL(stream);
				video.play();
				}
			
			function throwError(e){
				alert(e.name);
				}
			
			function snap(){
				canvas.width = video.clientWidth;
				canvas.height = video.clientHeight;
				context.drawImage(video, 0, 0);
				 //context.drawImage(video, 0, 0, video.width, video.height);

				}
         </script>
          </div>
       </div>
         <form class="w3-container" action="javascript:void(0)" method="post" enctype="multipart/form-data">
           
           <div class="w3-row w3-black w3-center w3-margin-left w3-margin-bottom" style="width:50%">
             <div class="w3-col m6">
               <fieldset>
                 <legend class="w3-text-red">Save Your Image</legend>
                 
                 <input id="file" type="file" onchange="gender()" class="w3-input" />
               </fieldset>
             </div>
           </div>
           <div id="displayM">
           </div>
         </form>
    </div>
 </div>
</body>
</html>