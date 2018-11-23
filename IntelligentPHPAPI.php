<?php
	class MainIntelligentPHP{
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "futo_db";
		var $cookie_name;
		var $cookie_value;
		var $cookie_expiredate;
		var $check_enabled_cookie;
		var $myfile;
		var $text;
		var $handler;
		var $csvrow = 0;
		var $output;
		var $tbNames;
		var $setFildNames;
		var $values;
		var $msg;
		var $reS;
		/*public function __construct($servername,$username,$password,$dbname){
			$this->servername=$servername;
			$this->username=$username;
			$this->password=$password;
			$this->dbname=$dbname;
		}*/
		////////////////////////////////////////////////////////////////////////
		//DB methods
		public function connectDB(){
			$con = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
			//check connection
			if($con->connect_error){
				die("Connection failed: " .$con->connect_error);
			}
			return $con;
		}
		//query db
		public function queryDB($queryStr){
			$result = $this->connectDB()->query($queryStr);
			return $result;
		}
			//this mehod will filter injection from hacker
		public function escape_String($data){
				$cnn = $this->connectDB();
				$data = mysqli_real_escape_string($cnn,$data);
				return $data;
		}
		//this method test for error
		public function dbError(){  
			$cn1 = $this->connectDB();
			return mysqli_error($cn1);
		}
		// function insert data into db       $this->connectDB()->query($sql)
		public function InsertIntoDBTB($tbNames,$tbflNames,$values1,$msg){
			$sql = "INSERT INTO $tbNames($tbflNames) VALUES($values1)";
			if($this->connectDB()->query($sql) === TRUE){
				return $msg;
			}else{
				echo "Error:" . $sql . "<br>".$this->connectDB()->error;
			}
		}
		
		//function to get the last inserted id
		public function lastInsertedRow($tbflNames,$values,$msg){
			$sql = "INSERT INTO $tbName($tbflNames) VALUES($values)";
			if($this->connectDB()->query($sql)){
				return $last_inserted_row = $this->connectDB()->insert_id();
			}else{
				echo "Error:" . $sql . "<br>".$this->connectDB()->error;
			}
		}
		//fuction tha fetch data from db
		public function selectDtaFrmDB($tbflNames,$tbName,$werConditn){
			$sql ="SELECT $tbflNames FROM $tbName WHERE $werConditn";
			$result = $this->connectDB()->query($sql);
				if($result->num_rows > 0){
					while($row=$result->fetch_assoc()){
						return $row;
					}
				}else{
					return "@";
				}
		}
		//fuction tha fetch all data from db
		public function selectALLDtaFrmDB($tbflNames,$tbName){
			$sql ="SELECT $tbflNames FROM $tbName";
			$result = $this->connectDB()->query($sql);
			return $result;
		}
		//fuction tha fetch data from db
		public function selectDtaFrmDBHasPass($tbflNames,$tbName,$werConditn){
			$sql ="SELECT $tbflNames FROM $tbName WHERE $werConditn";
			$result = $this->connectDB()->query($sql);
			return $result;
		}
		//function that delete data from db Table
		public function deleteDBTable($tbflNames,$tbID,$value,$msg){
			$sql = "DELETE FROM $tbflNames WHERE $tbID = '$value' ";
			$result = $this->connectDB()->query($sql);
				if($result){
					echo $msg;
				}
		}
		//function to update db
		function updateDBTable($tbName,$setFiledName,$setFildName,$tbID,$theID){
			$sql ="UPDATE $tbName SET $setFiledName = '$setFildName' WHERE $tbID='$theID'";
			$result = $this->connectDB()->query($sql);
				if($result){
					echo $msg;
				}
		}
		
		//DB method ends
		/////////////////////////////////////////////////////////////
         //function to encrypt password
		//function to encrypt password
		public function encryptPasswrd($regNum){
			$options = [
				'cost' => 11,
			];
			return	password_hash($regNum,PASSWORD_BCRYPT, $options);
		}
		
		//function to decrypt password
		public function decryptPassword($userGivenPassword,$DBPasswordHas){
			if(password_verify($userGivenPassword,$DBPasswordHas)){
				return "@!!";
			}else{
				die("Wrong Password Supplied");
			}
		}
			//sending mail
		public function sendMail($mailFrom,$subject,$bodyOfThTxt,$mailTo){
				if(isset($_POST[$mailFrom])){
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
				  $mail -> SetFrom($_POST[$mailFrom]); 
				  $mail -> Subject=$_POST[$subject];
				  $mail -> Body=$_POST[$bodyOfThTxt];
				  $mail -> AddAddress($_POST[$mailTo]);
					if(!$mail->send()){
						 echo "Mailer Error:".$mail->ErrorInfo;
						}else{
							echo "Mail Has Been Sent";
							}	 
					  }
		}//end mail method
		
		//file checking and upload
		public function fileUpoadAndChecking($partToFileUpload,$getEleFileName){
			//$target_dir = "../uploads/";
			$target_dir = $partToFileUpload;//note $partToFileUpload=../uploads/,$getEleFileName=file1
				$target_file = $target_dir . basename($_FILES[$getEleFileName]["name"]);
					$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
							// Check if image file is a actual image or fake image
							if(isset($_POST[$getEleFileName])) {
							$check = getimagesize($_FILES[$getEleFileName]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}
							//exit();
							// Check if file already exists
							if (file_exists($target_file)) {
								echo "Sorry, file already exists.";
								$uploadOk = 0;
							}
							//exit();
							// Check file size
							if ($_FILES[$getEleFileName]["size"] > 500000000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
							//exit();
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" && $imageFileType !="pdf" && $imageFileType !="csv" ) {
								echo "Sorry, only JPG, JPEG, PDF, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
							/////
							////
							//exit();
							// Check if $uploadOk is set to 0 by an error

							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file

								} else {
									if (move_uploaded_file($_FILES[$getEleFileName]["tmp_name"], $target_file)) {
										//echo "The file ". basename( $_FILES[$getEleFileName]["name"]). " has been uploaded.";
											$dosya = $_FILES[$getEleFileName]["name"];
											return 	$dosya;
											
									} else {
										echo "Sorry, there was an error uploading your file.";
									}
								}

		}//end of fileUpoadAndChecking method

		// csv file upload and upload
		public function csvFileUpoadAndChecking($partToFileUpload,$getEleFileName){
			//$target_dir = "../uploads/";
			$target_dir = $partToFileUpload;//note $partToFileUpload=../uploads/,$getEleFileName=file1
				$target_file = $target_dir . basename($_FILES[$getEleFileName]["name"]);
					$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
							// Check if image file is a actual image or fake image
							if(isset($_POST[$getEleFileName])) {
							$check = getimagesize($_FILES[$getEleFileName]["tmp_name"]);
							if($check !== false) {
								echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
								echo "File is not an image.";
								$uploadOk = 0;
							}
						}
							//exit();
							// Check if file already exists
							if (file_exists($target_file)) {
								echo "Sorry, file already exists.";
								$uploadOk = 0;
							}
							//exit();
							// Check file size
							if ($_FILES[$getEleFileName]["size"] > 500000000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
							//exit();
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" && $imageFileType !="pdf" && $imageFileType !="csv" ) {
								echo "Sorry, only JPG, JPEG, PDF, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
							/////
							////
							//exit();
							// Check if $uploadOk is set to 0 by an error

							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file

								} else {
									if (move_uploaded_file($_FILES[$getEleFileName]["tmp_name"], $target_file)) {
										//echo "The file ". basename( $_FILES[$getEleFileName]["name"]). " has been uploaded.";
											$dosya = $_FILES[$getEleFileName]["name"];
											return 	$dosya;
											
									} else {
										echo "Sorry, there was an error uploading your file.";
									}
								}

		}//end of csv method

		//function to check user during password authentication
		public function check_user_credentials($username, $password,$DBuserid,$tbName,$errorMsg){
			$sql = "SELECT $DBuserid FROM $tbName WHERE $DBusername= '$username' AND $DBPassword='$password'";
			//fetch the data from DB
			$result = $this->queryDB($sql);
			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				if($row){
					$userid = $row['userid'];
				}else{
					throw new AuthException("".$errorMsg."");
				}
				return $userid;
			}else{
				die("is not reach able");
			}
		}
		//function that checks password for both letter and numbers
		public function good_password($password){
			if(strlen(trim($password) < 8)){
				//return 0;
			}
			//run match for numbers \d which is numbers between 0-9
			if(!preg_match("/\d/",trim($password))){
				///return "";
			}
			if(!preg_match("/[a-z]/i",trim($password))){
				//return 0;
			}
			return $password;
		}
		
		//function that checks cookie
		public function checkCookie(){
			$this->check_enabled_cookie=setcookie("test_cookie", "test",time() + 3600, '/');
			if(count($_COOKIE) > 0) {
				$this->create_cookie();
			}else{
				echo "Cookies are disabled.";
			}
		}
		//function to create cookie
		public function create_cookie($username,$uservalue){
			$this->cookie_name = "".$username.""; //e.g user
			$this->cookie_value = "".$uservalue.""; //e.g user or enefiok duke
			$this->cookie_expiredate = time() + (86400 + 30); //cookie wiil expire after 30days
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				if(!isset($_COOKIE[$this->cookie_name ])){
					echo "Cookie named '" . $this->cookie_name . "' is not set!";
				}
		}
		public function deleteCookie($user){
			return setcookie("".$user."", "", time() - 3600);
		}

		public function chkses($session,$location){
			if(!isset($session)){
				header("Location: $location");
			}
		}

		//function that will create file
		public function createAnyFile($fileName,$getText){
			$this->myfile= fopen("$fileName","w");
			$this->text = "$getText";
			fwrite($this->myfile,$this->text);
			return $this->myfile;
			fclose($this->myfile);
		}
			//function that allows u to call day automatically
		public function selectDay(){
						//date
			//echo '<select name="day">';
			for($i = 1; $i <= 31; $i++){
				echo "<option value=\"$i\">$i</option>";
			} 
		}
			//function that allows u to call month automatically
		public function selectMonth(){
						//month
			//echo '<select name="month">';
			for($i = 1; $i <= 12; $i++){
				$dt = DateTime::createFromFormat('!m', $i);
				echo "<option value=\"$i\">".$dt->format('F')."</option>";
			}
		}
		//function that allows u to call year automatically
		public function selectYear(){
			//year
			//echo '<select name="year">';
			for($i = date('Y'); $i >= date('Y', strtotime('-90 years')); $i--){
			echo "<option value=\"$i\">$i</option>";
			} 
		}



	}

    //class that will take care of all DB quweries and other manipulations
	class Operations extends MainIntelligentPHP{
		
		//function that controls csv upload   $seletedFile "../akscoepayrepe.csv" n loop tousands of row into array
		//befor sending it to db
		public function getUrCSVfile($psrt){
			$sql="";
			if(($this->handler = fopen("../CSVfiles/$psrt","r"))!=false){
				while(($data = fgetcsv($this->handler, 1000, ",")) !== FALSE) {
					$num = count($data);
					$this->tbNames = 'amt_tb';
					$this->setFildNames = 'RegNo,Name,Date,Department,Shool,ReceivingBank,Amount';
					$this->values = "'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]'";
					$this->msg = 'Successful';
					$sql .="INSERT INTO ".$this->tbNames."(".$this->setFildNames.") VALUES(".$this->values.");";
					//$this->reS = $this->InsertIntoDBTB($this->tbNames,$this->setFildNames,$this->values,$this->msg);
					/* 	$sql = "INSERT INTO $tbNames($tbflNames) VALUES($values)";
			if($this->connectDB()->query($sql) === TRUE){
				return $msg;
			}else{
				echo "Error:" . $sql . "<br>".$this->connectDB()->error;
			} */

				}
				if($this->connectDB()->multi_query($sql) === TRUE){
					echo $this->msg;
				}else{
					echo "Error:" . $sql . "<br>".$this->connectDB()->error;
				}
				/* if($this->reS){
					echo "Successful";
					
				} */
				fclose($this->handler);
			}
		}
	}	//$obj = new MainIntelligentPHP("localhost","root","","futo");//form this in another class
?>
