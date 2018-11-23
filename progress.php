<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#progress{
	 width:100%;
	 background-color:grey;
	 }
#myBar{
	 width:1%;
	 height:30px;
	 background-color:green;
	 }
#t{
 width:70%;
 height:20px;
 background-color:red;
}
</style>
<script>
  function move(){
	  var elem = document.getElementById('myBar');
	  var width = 1;
	  var id = setInterval(frame,100);
	  function frame(){
		  if(width>=100){
			    clearInterval(id);
			  }else{
				  width++;
				  elem.style.width =width + '%';
				  elem.innerHTML = width * 1 + '%';
				  }
		  }
	  }
</script>
</head>

<body>
 <div id="progress">
   <div id="myBar">10%
   </div>
 </div>
 <button type="button" onclick="move()">click</button>
 <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
</body>
</html>