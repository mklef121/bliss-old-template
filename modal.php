<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<a href="#" onclick="OpenModal()" class="w3-blue w3-button w3-round-small w3-margin-left">Open Modal</a>

<!--create the modal-->
<div id="oo1" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container">
      <span onclick="document.getElementById('oo1').style.display='none'" class="w3-display-topright w3-margin-top  w3-button w3-round-xxlarge w3-center w3-margin-right w3-red" >&times;</span>
      <p>i am here</p>
    </div>
  </div>
</div>
<script>
  function OpenModal(){
	  //let make the modal visible
	  var modal = document.getElementById('oo1').style.display='block';
	  return modal;
	  }
</script>
</body>
</html>