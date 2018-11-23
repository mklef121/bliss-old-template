<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="CSS/cssRevision.css" rel="stylesheet" type="text/css" />
<script src="fujs.js" type="text/javascript"></script>
</head>

<body>
 <button class="w3-blue w3-btn" type="" id="myBtn">Click</button>
 <p id="demo"></p>
 <script>
   document.getElementById("myBtn").addEventListener("click", function(){
	   document.getElementById("demo").innerHTML="Hello";
	   });
 </script>
</body>
</html>