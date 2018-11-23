<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylsheet" type="text/css" href="CSS/loader.css">
<style>
body {
   /* background-color: #aaa;
    padding: 10px;*/
}

#progressbar {
    width: 50%;
    height: 30px;
    background-color: #eee;
    padding: 2px;
    margin: .6em 0;
    border: 1px #000 double;
    clear: both;
}
#progress {
    background:rgba(85,0,85,1); /*#A1C969; /*-- Color of the bar --*/
    height: 20px;
    width: 50%;
    max-width: 100%;
    float: left;
    -webkit-animation: progress 2s 1 forwards;
    -moz-animation: progress 2s 1 forwards;
    -ms-animation: progress 2s 1 forwards;
    animation: progress 2s 1 forwards;
}

#pbaranim {
    height: 15px;
    width: 100%;
    overflow: hidden;
    background: url('http://www.cssdeck.com/uploads/media/items/7/7uo1osj.gif') repeat-x;
    -moz-opacity: 0.25;
    -khtml-opacity: 0.25;
    opacity: 0.25;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=25);
    filter: progid:DXImageTransform.Microsoft.Alpha(opacity=25);
    filter: alpha(opacity=25);
}

@-webkit-keyframes progress { 
    from { }

    to { width: 36% }
}

@-moz-keyframes progress { 
    from { }

    to { width: 36% }
}

@-ms-keyframes progress { 
    from { }

    to { width: 36% }
}

@keyframes progress { 
    from { }

    to { width: 36% }
}
</style>
</head>

<body>
<button type="button" onclick=" progress()" id="submitbtn">Upload</button>
<div id="progressbar">
   <div id="progress" >
    <div id="pbaranim"></div>
   </div>
</div>

<script>
  var currProgrss = 0
  var submitButton = document.getElementById("submitbtn"); //get id button
  var getFile = document.getElementById("file"); //get file from browse
  var getProgress = document.getElementById("progressinnerBar"); // get the progress bar
      var upload = function(){
		  //alert('voted');
		  //return;
		  if(getFile.files.length ==0){
			  return;
			  }
			  var data = new FormData();
              data.append("resim",document.querySelector("#file").files[0]);
			  var  ajax = new XMLHttpRequest();
			   ajax.onreadystatechange=function(e){
			   if(ajax.status==200 && ajax.readyState==4){
				   //document.querySelector("#displayM").innerHTML=ajax.responseText;
				   if(ajax.responseText=='added'){
					    alert("added")
					   }else{
						   alert(ajax.responseText)
						   }
				   }
			  }
			  getProgress.value = currProgrss;
			   ajax.upload.addEventListener('progress', function(e){
                getProgress.style.width = Math.ceil(e.loaded/e.total) * 100 + '%';
                }, false);
				currProgrss++;
				 setTimeout("upload",100);
			  //send data to server
			  ajax.open("POST","server.php",true);
		      ajax.send(data);
			   
		  }
	submitButton.addEventListener('click',upload);
</script>
<script>
 function progress(){
	 var pro = document.getElementById('myBar');
  var width = 1;
  var id = setInterval(frame,100);
   function frame(){
	   if(width>=100){
		   clearInterval(id);
		   }else{
			   width++;
			   pro.style.width=width + '%';
			   }
	   }
	 }
</script>
<div id="loader"></div>
</body>
</html>