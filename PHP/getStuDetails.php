<?php require_once "../IntelligentPHPAPI.php"?>
<?php
	$obj = new MainIntelligentPHP(); //creating an instance of the class MainIntelligencePHP()
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$RegNum = trim($_POST["getRegNum"]); // get the reg no. from the user
		$RegNum1 = $obj->escape_String($RegNum); //secure the reg no. from hacker injection to db
		$getHashPass = $obj->encryptpasswrd($RegNum1); //encrypts Reg. no. The value of $getHashPass will be sent to the db
		echo $getHashPass; 
	}
?>
