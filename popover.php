<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.popnomore{display:none;}
.pop {
	background: #eee;
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	position: absolute;
	width: 200px;
   /* top:50px;left:50px;*/
}

/* arrows - :before and :after */
.pop:before {
	position: absolute;
	display: inline-block;
	border-top: 7px solid transparent;
	border-right: 7px solid #eee;
	border-bottom: 7px solid transparent;
	border-right-color: rgba(0, 0, 0, 0.2);
	left:;
	top: 15px;
	content: '';
}

.pop:after {
	position: absolute;
	display: inline-block;
	border-top: 6px solid transparent;
	border-right: 6px solid #eee;
	border-bottom: 6px solid transparent;
	left: -6px;
	top: 16px;
	content: '';
}
</style>
</head>

<body>
<div class="pop">
    Click for menu &nbsp;     <a href="#">close</a>
</div></body>
</html>