<?php 
  
 include_once ("../config.php");
 
 if( ! empty($_REQUEST['word']) )
 {
 	addKeyWord($_REQUEST['word'],'1','1');
 }
 else if ( !empty( $_REQUEST['del']))
 {
 	delKeyWord ($_REQUEST['del']);
 }
 else if (!empty($_REQUEST['autoReply']))
 {
 	updateAutoReply($_REQUEST['autoReply'], $_REQUEST['checked']);
 }
 
 function updateAutoReply ($idKeyWord , $checked)
 {
 	if( $checked == '1')
 		$newChecked = '0';
 	else
 		$newChecked = '1';
 	global $host,$db,$user,$pwd;
 	try {
 		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
 		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 	}
 	catch(Exception $e){
 		die(var_dump($e));
 	}
 	try {
 		$sql_update = "Update keyword set autoTrack = ? where idkeyWord= ?";
 		$stmt = $conn -> prepare ($sql_update);
 		
 		$stmt -> bindValue (1,$newChecked);
 		$stmt -> bindValue (2,$idKeyWord);
 		$stmt -> execute();
 	}
 	catch(Exception $e) {
 		die(var_dump($e));
 	}
 	return '';
 	
 }
 
 
 function delKeyWord ( $idKeyWord )
 {
 	global $host,$db,$user,$pwd;
 	try {
 		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
 		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 	}
 	catch(Exception $e){
 		die(var_dump($e));
 	}
 	try {
 	$sql_delete = "DELETE from keyword where idkeyWord =?";
 	$stmt = $conn -> prepare ($sql_delete);
 	$stmt -> bindValue (1,$idKeyWord);
 	$stmt -> execute();
 	}
 	catch(Exception $e) {
 		die(var_dump($e));
 	}
 	Header("Location: ../keyWord.php");
 }
 
 

  function addKeyWord($word, $merchantID, $channelID)
  {
  		global $host,$db,$user,$pwd;
  
	 	try {
	 		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	 	}
	 	catch(Exception $e){
	 		die(var_dump($e));
	 	}
 	 
 	
 		try {
 				
 			$date = date("Y-m-d");
 			// Insert data
 			$sql_insert = "INSERT INTO keyword (words, merchantID, channelID)
                   VALUES (?,?,?)";
 			$stmt = $conn->prepare($sql_insert);
 			$stmt->bindValue(1, $word);
 			$stmt->bindValue(2, $merchantID);
 			$stmt->bindValue(3, $channelID);
 			$stmt->execute();
 		}
 		catch(Exception $e) {
 			die(var_dump($e));
 		}
 		Header("Location: ../keyWord.php");
 	 
   }