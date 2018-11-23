<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    top: 150%;
    left: 50%;
    margin-left: -60px;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -20px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext {
    /*visibility: visible;*/
}
.dropbtn{
	background-color:#4CAF50;
	color:white;
	padding:16px;
	font-size:16px;
	border:none;
	cursor:pointer;
	}
.dropdown{
	position:relative;
	display:inline-block;
	}
.dropdown-content{
	display:none;
	position:absolute;
	background-color:#f9f9f9;
	min-width:160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	}
.dropdown-content a{
	color:black;
	padding:12px 16px;
	text-decoration:none;
	display:block;
	}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block; margin-top:5px}
	.dropdown:hover .dropbtn {
    background-color: #3e8e41;}
.dropdown-content::after{
	
	}
.dropdown:hover .dropdown-content::after{
	content: "";
    position: absolute;
    bottom: 100%;
    left: 60%;
    margin-left: -20px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent black transparent;
	}
</style>
</head>
<body style="text-align:center">

  <div class="tooltip">Hoover Me
    <span class="tooltiptext">Tooltip Text</span>
  </div>
 <!--
  <p>Move the mouse over the text below:</p>

<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>

<p>Note that the position of the tooltip text isn't very good. Go back to the tutorial and continue reading on how to position the tooltip in a desirable way.</p>
-->
<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</body>
</html>