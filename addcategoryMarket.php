<?php include "Connection.php";?>
<?php
//echo("brother");
//exit();
    $query = "select * from category_tb";
     $result = mysqli_query($con,$query);
      // $options= '<option value="0" >Select Level</option>';
?>
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

<body  class=" w3-animate-opacity " style="">
    <section >
      <div class="w3-container">
      <button type="button" class="w3-btn" onclick="burty()">edit</button>
          <table class="w3-table">
              <tr>
                  <th>Category id</th>
                  <th>Category Name</th>
              </tr>
              <?php while($row=mysqli_fetch_array($result)):;?><!--fetching the query is done here-->
              <tr>
                  <td><?php echo $row[0];?></td> <!--this is to get the id from the data-->
                  <td id="tb5"><?php echo $row[1];?></td> <!--function burty() will set id="tb5" contenteditable="true"-->
              </tr>
              <?php endwhile;?>
          </table>
      </div>
    </section>

    <section>
    <fieldset class="w3-round-large">
                       <h3 class="w3-center">Add Category</h3>
                         <div class="w3-row w3-section w3-round-large">
                             <input id="cateG" type="text" class="w3-input w3-border w3-round-large" name="" value="" placeholder="Category Name">
                         </div>
                        <!--button-->
                        <div class="w3-container">
                            <div class="w3-container w3-center">
                              <button class="w3-btn w3-margin w3-blue w3-round"  type="submit" onclick="categoryMarket()">Login</button>
                             </div>
                        </div> 
                        <!--END BUTTON-->
                        </fieldset>
    </section>
    
</body>
</html>