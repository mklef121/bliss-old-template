<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css" />
<script src="dhtmlxCalendar_v51_std/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script>
	 function _(el){
		return document.getElementById(el);
	}
	// uploadFile()
	function uploadFile(){
		var file = _("file1").files[0];
		// alert(file.name+" | "+file.size+" | "+file.type);
		var formdata = new FormData();
		formdata.append("file1", file);
		var ajax = new XMLHttpRequest();
		ajax.upload.addEventListener("progress", progressHandler, false);
		ajax.addEventListener("load", completeHandler, false);
		ajax.addEventListener("error", errorHandler, false);
		ajax.addEventListener("abort", abortHandler, false);
		ajax.open("POST", "server.php");
		ajax.send(formdata);
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
<form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:800px; height:3px; color:rgba(255,127,0,1)"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
  <div class="w3-border" style="width:30%;">
    <div id="progressBar" class="w3-deep-orange" style="height:2px; width:100px;"></div>
  </div>
</form>
</body>
</html>