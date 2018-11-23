<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="w3c.CSS" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 
<script src="fujs.js" type="text/javascript"></script>
<script>
  function modal(){
	 // window.location="fuadmin.php";
	 document.getElementById('dropd').style.display="block";
	  }
  function modaloff(){
	 // window.location="fuadmin.php";
	 document.getElementById('displayModal').style.display="none";
	  }
</script>
</head>

<body class="w3-animate-opacity">
<div class="w3-black w3-display-container w3-text-white " style="width:100%; height:100%; position:absolute; overflow:hidden;">
   <div class="w3-display-container">
     <div class="w3-display-topleft">
        <div class="w3-row w3-section">
           
             
        </div>
     </div>
   </div>
   <img src="jon-phillips-17576.jpg" class="w3-opacity-max" style="width:100%" />
    <div class="w3-display-topleft w3-round-xxlarge w3-dropdown-hover w3-card-4 w3-blue">
      <button class="w3-button w3-hide w3-round-xlarge"><i class="fa fa-sign-in w3-xlarge"></i> Admin Login</button>
      <div class="w3-dropdown-content w3-border w3-round-xxlarge">
        <form class="w3-container w3-card-4" action="javascript:void(0)" method="post" >
          <div class="w3-row ">
            <div class="w3-col m12" >
              
               <div class="w3-section">
                <input type="text" placeholder="Username" id="adUsername" />
               </div>
               <div class="w3-section">
                <input type="password" placeholder="Password" id="adminpassword" />
               </div>
              
            </div>
           
          </div>
          <div class="w3-container w3-center w3-round-xxlarge">
             <button class="w3-btn w3-blue" onclick="admin()"><i id="admin5" class="fa fa-windows"></i> Login</button>
          </div>
        </form>
      </div>
    </div>
   <div class="w3-display-middle w3-center " style="width:400px">
     <img id="imageSearch" class="w3-circle" src="Images/b0581e38fd848baf2ed36e72e461965e.png.jpg" style="width:150px;" />
     <div class="w3-container">
       <h1 class="w3-xxlarge" id="#">STAFF LOGIN</h1>
       <!--<h1 class="w3-large w3-animate-bottom" id="#"></h1>-->
         <form action="javascript:void(0)">
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:100px"><i class="w3-xxlarge  fa fa-user"></i></div>
              <div class="w3-rest">
                <input id="uname" class="w3-input w3-border" name="first" type="text" placeholder="Please Enter User Name" />
              </div>
            </div>
         
            <!--Password-->
            <div class="w3-row w3-section">
             <div class="w3-col" style="width:100px"><i class="w3-xxlarge  fa fa-user"></i></div>
               <div class="w3-rest">
                 <input id="pass" class="w3-input w3-border" name="last" type="password" placeholder="Please Enter Password.....">
               </div>
            </div>
            <!--submit Button-->
            <button type="submit" class="w3-button w3-round  w3-section w3-blue w3-padding" onclick="flogin()"><i id="submitlogo" class="fa fa-windows w3-xlarge"></i> Send</button>
            <div id="disForm"></div>
         </form>
     </div>
   </div>
 </div>
</body>
</html>