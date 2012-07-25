<?php 
 	session_start();
	header("Content-type: text/html; charset=utf-8");
  include_once("config.php");

		if(isset($_REQUEST['stbindPlan']))
		{
			
			try {
				$idconsumerType = $_REQUEST['idconsumertype'];
				
				$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
				$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				
				
				
				
				$sql = "update consumerType set marketPlanID = ? where idconsumerType= ?" ;
				$stmt = $conn -> prepare($sql);
				$stmt -> bindValue (1,$_REQUEST['stbindPlan']);
				$stmt -> bindValue (2,$idconsumerType);
				$stmt -> execute();
				
				header("location: incubator.php");
			}
			catch (Exception $e)
			{
				var_dump($e->getMessage());
			}
		}