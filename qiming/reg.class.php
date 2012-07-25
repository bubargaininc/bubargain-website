
<?php 

include_once("config.php");


		try {
				
			$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
			$sql = "insert into breakglass_select_user(nick_name,real_name,gender,birthday,tel,qq,email,favor_channel) values(?,?,?,?,?,?,?,?) ";
			$stmt = $conn -> prepare($sql);
			$stmt -> bindValue(1,$_REQUEST['nick_name']);
			$stmt -> bindValue(2,$_REQUEST['real_name']);
			$stmt -> bindValue(3,$_REQUEST['gender']);
		
			date_default_timezone_set('Asia/Shanghai');
			
			$bir = mktime(0,
						0,
						0,
						$_REQUEST['birthday_m'],
				        $_REQUEST['birthday_d'],
				        $_REQUEST['Date_Year']
			        );
			$stmt -> bindValue(4,date("Y/m/d",$bir));
			$stmt -> bindValue(5,$_REQUEST['tel']);
			$stmt -> bindValue(6,$_REQUEST['qq']);
			$stmt -> bindValue(7,$_REQUEST['email']);
			$stmt -> bindValue(8,$_REQUEST['contactMethod']);
			
			$stmt -> execute();
		    header("location: regSuccess.php");
		
		}
		catch(Exception $e){
			die(var_dump($e));
		}
		
