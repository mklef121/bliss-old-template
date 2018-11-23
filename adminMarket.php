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

}

.w5-animate-zoom {animation:animatezoom 10s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
</style>
</head>

<body  class=" w3-animate-opacity " style="margin:0;">
 	<div class="w3-display-container " style="height:633px;">
   <img src="Images/pexels-photo-414825.jpeg" class="" alt="fg" style="width:100%; height:633px;" />
    <div class="w3-display-middle">

      <div class="w3-container w3-center">
          <a href="inventoryMarket.php" title="INVENTORY MANAGEMENT SYSTEM" type="button" class="w3-button w3-animate-zoom w3-text-white w3-red w3-card-4 w3-hover-purple w3-round-xxlarge "><i class="fa fa-cogs fa-spin w3-jumbo"></i>
            <h1 class="w3-text-white"><strong>INVENTORY</strong></h1>
          </a> 
      </div>
    </div>
    <div class="duke w3-display-bottomleft ">
      <div class="w3-container  w3-center">
          <button  onclick="myfunAd()" title="SALES MANAGEMENT SYSTEM" type="button" class="w3-button w3-animate-top  w3-hover-purple w3-round-xxlarge "><i class="fa fa-dollar w3-text-red w3-jumbo"></i>
            <h1 class="w3-text-white"><strong>Sales</strong></h1>
          </button> 
      </div>
    </div>
    <div class="duke w3-display-bottomright ">
        <div class="w3-container  w3-center">
          <button title="Logout"  onclick="myfunMa()" type="button" class="w3-button w3-animate-top  w3-hover-purple w3-round-xxlarge "><i class="fa fa-sign-out w3-text-red w3-jumbo"></i>
            <h1 class="w3-text-white"><strong>Logout</strong></h1>
          </button> 
       </div>
    </div>
  </div>
  <!--modalclerk-->
   <div id="modal4" class="w3-modal  w3-card-4 w3-animate-zoom" style="display:none;">
    <div class="w3-modal-content  ">
        <form method="POST"  action="javascript:void(0)">
           	 <header class="w3-container w3-round-large w3-red w3-center">
                 <span onclick="document.getElementById('modal4').style.display='none'"
                 class="w3-button w3-display-topright">&times;</span>
                 <h2><i class="fa fa-amazon"></i>Sales Clerk Login</h2>
            </header>
            <div class="w3-container w3-round-large w3-margin">
                <div class="w3-row-padding">
                    <input id="nameHOD" onfocus="myfunct()" class="w3-input w3-border w3-round-large w3-margin w3-center" type="text" name="surname" placeholder=" Surname" value="">
                </div>
                <div class="w3-row-padding w3-round-large">
                    <input id="pasw" onfocus="myfunctp()" class="w3-input w3-border w3-round-large w3-margin w3-center" type="password" name="surname" placeholder="Password" value="">
                </div>
                <div class="w3-container">
                    <div class="w3-container w3-center">
                        <button class="w3-btn w3-margin w3-blue w3-round"  type="submit">Login</button>
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-round-large w3-center w3-red ">
              <h2>Sales Clerk Module</h2>
            </footer>
        </form>
    </div>
   </div>
<!---->
 <!--modalAdmin-->
 <div id="modaAD" class="w3-modal  w3-card-4 w3-animate-zoom" style="display:none;">
    <div class="w3-modal-content  ">
        <form method="POST"  action="javascript:void(0)">
           	 <header class="w3-container w3-round-large w3-red w3-center">
                 <span onclick="document.getElementById('modaAD').style.display='none'"
                 class="w3-button w3-display-topright">&times;</span>
                 <h2><i class="fa fa-amazon"></i>Admin Login</h2>
            </header>
            <div class="w3-container w3-round-large w3-margin">
                <div class="w3-row-padding">
                    <input id="nameHOD" onfocus="myfunct()" class="w3-input w3-border w3-round-large w3-margin w3-center" type="text" name="surname" placeholder=" Surname" value="">
                </div>
                <div class="w3-row-padding w3-round-large">
                    <input id="pasw" onfocus="myfunctp()" class="w3-input w3-border w3-round-large w3-margin w3-center" type="password" name="surname" placeholder="Password" value="">
                </div>
                <div class="w3-container">
                    <div class="w3-container w3-center">
                        <button class="w3-btn w3-margin w3-blue w3-round"  type="submit">Login</button>
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-round-large w3-center w3-red ">
              <h2> Admin Module</h2>
            </footer>
        </form>
    </div>
   </div>
<!---->
 <!--modal manager-->
 <div id="modalMA" class="w3-modal  w3-card-4 w3-animate-zoom" style="display:none;">
    <div class="w3-modal-content  ">
        <form method="POST"  action="javascript:void(0)">
           	 <header class="w3-container w3-round-large w3-red w3-center">
                 <span onclick="document.getElementById('modalMA').style.display='none'"
                 class="w3-button w3-display-topright">&times;</span>
                 <h2><i class="fa fa-amazon"></i>Manager Login</h2>
            </header>
            <div class="w3-container w3-round-large w3-margin">
                <div class="w3-row-padding">
                    <input id="nameHOD" onfocus="myfunct()" class="w3-input w3-border w3-round-large w3-margin w3-center" type="text" name="surname" placeholder=" Surname" value="">
                </div>
                <div class="w3-row-padding w3-round-large">
                    <input id="pasw" onfocus="myfunctp()" class="w3-input w3-border w3-round-large w3-margin w3-center" type="password" name="surname" placeholder="Password" value="">
                </div>
                <div class="w3-container">
                    <div class="w3-container w3-center">
                        <button class="w3-btn w3-margin w3-blue w3-round"  type="submit">Login</button>
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-round-large w3-center w3-red ">
              <h2> Manager Module</h2>
            </footer>
        </form>
    </div>
   </div>
<!---->



</body>
</html>