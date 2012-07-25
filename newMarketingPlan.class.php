<?php 
   session_start();


include_once ('config.php');

	if(isset($_REQUEST['planName']))
	{
		try {
				
			$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			
			$sql = "Insert into marketplan(merchantID,planName,planContent,plantype,picLoc) values(?,?,?,?,?)";
			$stmt = $conn -> prepare($sql);
			$stmt -> bindValue(1, $_SESSION['merchantID']);
			$stmt -> bindValue(2, $_REQUEST['planName']);
			$stmt -> bindValue(3, $_REQUEST['planContent']);
			$stmt -> bindValue(4, $_REQUEST['planType']);
			$stmt -> bindValue(5, $_REQUEST['picLoc']);
			$res = $stmt -> execute();
			
			//return 
			header("location: Marketing.php");
		}
		catch(Exception $e){
			die(var_dump($e));
		}
		
		
	}