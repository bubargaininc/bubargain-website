<?php 
   session_start();
   include_once ("../config.php");
   include_once ("../saetv2.ex.class.php");
 
  // include_once ('url2weiboId.php');
   
   
   /// ajax action in keyWord_autoCheck.js : delete line in TABLE fetchWeibo
  if(isset($_REQUEST['delId']))
  {
  		$id = $_REQUEST['delId'];
  		deleteLine($id);	
  }
   
  /// form reponse: add one line in TABLE fetchWeibo
   if(isset($_REQUEST['newWeiboAdd']))
   {
   	 //echo $_REQUEST['newWeiboAdd'] ;
   	
    	 $str = preg_split ("/[\/\?]/",$_REQUEST['newWeiboAdd']);
   	
   	 
   	 $i = 0;
   	 do
   	 {
   	 	 
	   	 if(preg_match("/^[0-9]{10}$/",$str[$i]) && preg_match("/^[0-9a-zA-Z]{9}$/",$str[$i+1]))
	   	 {
	   	 	//echo 'uid='.$str[$i].'<br /> weiboID='.$str[$i+1];
	   	 	AddWeibo($str[$i],$str[$i+1]);
	   	 	break;
	   	 }
	   	
	   	 $i++;
   	 }
   	 while($i < count($str));
   }
   
   function AddWeibo($uId, $weiboId)
   {
   		global $host,$db,$user,$pwd ;
   		//print_r($uId);
   		if(isset($_SESSION['token']))
   		{
   			//echo $_SESSION['token']['access_token']."<br />".$weiboId."<br />";
	   		$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
	   	
	   		//transfer weibo Url into real weibo ID
	   		//$weiboId = sinaWburl2ID($weiboId);
	   		//echo $weiboId;
	   		$uid = $c -> get_uid();
	   		$realWeiboId = $c -> queryid($weiboId,'1','0','0','1');
	   	//	print_r($realWeiboId);
	   		$weiboInfo = $c -> show_status($realWeiboId['id']);
	   		//print_r($weiboInfo);
	   		
	   		//add into DB
	   		try {
	   		
			   		$merchantID = $_SESSION['merchantID'];
			   		$weiboContent = $weiboInfo['text'];
			   		$time = $weiboInfo['created_at'];
			   		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
			   		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			   		if( ! $conn )
			   		{
			   			die('��ݿ����ӳ������⣬���Ժ����ԣ�'.mysql_error() );
			   		}
			   		else
			   		{
			 			//check repeat 
			 			
			   			$sql = "select idfetchWeibo from fetchweibo where merchantID = ? and weiboID = ?";
			   			$stmti = $conn-> prepare ($sql);
			   			$stmti->bindValue (1, $merchantID);
			   			$stmti->bindValue (2, $weiboId);
			   			$stmti ->execute();
			   			$res = $stmti->fetch();
			   			
			   		
			   		
			   			
			   			if($res['idfetchWeibo'] == false)
			   			{
			   				
				   			//insert into database
				   			$sql = "Insert into fetchweibo(weiboID,realWeiboID,userID,merchantID,weiboContent,time) value (?,?,?,?,?,?)";
				   			$stmt = $conn->prepare($sql);
				   			$stmt->bindValue (1,$weiboId);
				   			$stmt->bindValue (2,$realWeiboId['id']);
				   			$stmt->bindValue (3,$uId);
				   			$stmt->bindValue (4,$merchantID);
				   			$stmt -> bindValue (5,$weiboContent);
				   			$stmt -> bindValue (6,$time);
				   			$stmt -> execute();
			   			
			   				header ("location: ../weiboTrack.php");
			   			}
			   			else
			   			{
			   				
			   				echo "<script>alert('��΢���Ѿ����ڣ�лл');location.href='../weiboTrack.php'; </script>";
			   			}
					}
	   		} catch (Exception $e) {
	   			die(var_dump($e));
	   		}
	   		
   		}
   }
   
   //delete line from DB.fetchWeibo by id
   function deleteLine($id)
   {
   	global $host,$db,$user,$pwd ;
   	 try
   	 {
   	     $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
   	     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   	     
   	     $sql = "delete from fetchweibo where idfetchWeibo =".$id ;
   	     $res = $conn->exec($sql);
   	    
   	     echo 'tr'.$id;
   	 
   	 }
   	 catch(Exception $e)
   	 {
   	 	echo false;
   	 }
   }
   
   

   