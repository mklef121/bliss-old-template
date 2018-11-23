<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="fujs.js" type="text/javascript"></script>
<title>Untitled Document</title>
<style>
 loader{
	  position: absolute;
	  left: 50%;
	  top:50%;
	   z-index: 1;
	    width: 150px;
 		 height: 150px;
	 /*#f3f3f3*/
	  margin: -75px 0 0 -75px;
	 border:6px solid #f3f3f3;
	 border-radius:50%;
	 border-top: 6px solid rgba(136,136,136,1);
	 width: 120px;
 		 height: 120px;
	  -webkit-animation: spin 0.4s linear infinite; /* Safari */
  animation: spin 0.4s linear infinite;
	 }
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}
@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
#myDiv {
  display: none;
  text-align: center;
  margin-top:10%;
}
body{
  background:url("Images/markting20.png") no-repeat;
  width:100%;
}
.w5-animate-zoom {animation:animatezoom 10s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
</style>
</head>

<body  class="branding w3-animate-opacity " style="margin:0;">
 
 	<div class="w3-display-container " style="height:600px;">
    	<img src="Images/markeing8.jpg" class="w5-animate-zoom" alt="fg" style="width:100%; height:603px;" />
         
        <div class="w3-display-middle">
          <h1 class="w3-red w3-round-xlarge w3-center"><i class="fa fa-cog fa-spin "></i> User Login</h1>
          <div id="fontAweso" class="w3-row w3-center  w3-margin-bottom w3-animate-top" >
             <i class=" w3-text-orange fa fa-user fa-5x"></i>
          </div>
        	<form  method="post" action="javascript:void(0)">
              <div id="cretinput" class="w3-row w3-animate-zoom">
                 <div class="w3-col m9">
                    <input id="UsenM" type="text" name="gg" class="w3-input w3-round " placeholder="Username" />
                 </div>
                 <div class="w3-col m3">
                    <button onclick="getUsername()" class="w3-button w3-round  w3-red w3-hover-blue w3-xlarge" type="submit"><i class="fa fa-arrow-right"></i></button>
                 </div>
              </div>
              <div id="bottomUp" class="w3-row w3-animate-right "  style="display:none">
                 <div class="w3-col m9">
                    <input id="pasWod" type="password" name="gg" class="w3-input w3-round" placeholder="Password" />
                 </div>
                 <div class="w3-col m3">
                    <button onclick="getPassword()" class="w3-button w3-red w3-round w3-hover-red w3-xlarge" type="submit"><i class="fa fa-arrow-right"></i></button>
                 </div>
              </div>
             
            </form>
        </div>
    </div>
    <!--loader-->
    <div id="modalLoaderSpin" class="w3-modal w3-animate-zoom" style="display:none; ">
    <div class="w3-modal-content w3-round-xxlarge  w3-black">
      <div class="w3-display-container" style="height:200px;">
          <div class="w3-display-middle">
             <div class="w3-container ">
                <i class="fa fa-spinner fa-pulse fa-5x  fa-fw"></i>
                <span class="sr-only">Loading...</span>  
             </div>
          </div>
      </div>
      <footer class="w3-container  w3-round-xxlarge w3-center w3-red">
        <h2 >Loading...</h2>
      </footerr>
    </div>
</div>
<!--end of loader-->
</body>
</html>