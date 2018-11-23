
<?php
  include "classes/class.phpmailer.php";
  include "classes/class.smtp.php";
  if(isset($_POST["mailfrom1"])){
    $mail = new PHPMailer();
  $mail -> isSMTP();
  $mail -> SMTPDebug = 1;
  $mail -> SMTPAuth = true;
  $mail -> SMTPSecure ='ssl';
  $mail -> Host="smtp.gmail.com";
  $mail -> Port=465;//or 587
  $mail -> isHTML(true);
  $mail -> Username="enefiokduke4info@gmail.com";
  $mail -> Password="documentary1";
  //$mail -> SetFrom("enefiokduke4info@gmail.com");
  $mail -> SetFrom($_POST["mailfrom1"]); 
  $mail -> Subject=$_POST["subject1"];
  $mail -> Body=$_POST["meg1"];
  $mail -> AddAddress($_POST["mailto1"]);
    if(!$mail->send()){
		 echo "Mailer Error:".$mail->ErrorInfo;
		}else{
			echo "Mail Has Been Sent";
			}	 
	  }
?>