<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="CSS/loader.css" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
  <input type="file" id="dosya" onchange="gender()" />
  <div id="alan"></div>
  <i id="spin" class="fa fa-spinner"></i>
  <script>
    var  ajax = new XMLHttpRequest(); //creating a new http object
	var data = new FormData();
    var progress = document.querySelector("#spin");
	progress.value=0; 
	function gender(){
		  data.append("resim",document.querySelector("#dosya").files[0]);  
		  ajax.onreadystatechange=function(e){
			   if(ajax.status==200 && ajax.readyState==4){
				   document.querySelector("#alan").innerHTML=ajax.responseText;
				   }
			  }
		  ajax.open("POST","server.php",true);
		  ajax.send(data); 
		  
		  ajax.onprogress = function(e){
			    progress.max =e.total;
				progress.value =e.loaded;
			  }
		}
  </script>
  <div id="loader"></div>
</body>
</html>