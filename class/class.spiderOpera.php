

<?php 

include_once ("saetv2.ex.class.php");
include_once ("config.php");


class spiderOpera
{
	//get db connection Info
	protected $db;
	public function __construct ($db)
	{
		$this -> db = $db;
	}
	
	/*
	 * delete one line from db.experience by uid
	 * $id : weibo uid
	 */
	function deleteUid($id)
	{
		//print("I come in!");
		try {
	 		
	        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			
	    }
	    catch(Exception $e){
	        die(var_dump($e));
   		 }
   		 if( $conn)
   		 {
   		 	$sql = "delete from experience where uid= $id";
   		 	$r = $conn ->exec($sql);
   		 }
	}
	
	/*
	 * search  user info from spider, if not exist , try to fetch it from Weibo API
	 * $id : weibo Uid
	 */
	
	function searchUserInfo ($id)
	{
		try{
			
				$sql = "select * from users where uid = $id";
				$stmt = $this -> db -> query($sql);
				$res = $stmt -> fetch();
				//print_r($res);
				if($res != false && $res != Null)
					return $res ;
				else
				{	
				  // print("call API once on ".time());
				   echo "<br/>";
					//search userInfo by uid
				   $c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
				   $userInfo =$c -> show_user_by_id ($id);
				   
				   
				   //print_r($userInfo);
				   if( isset($userInfo['screen_name'] ) && $userInfo['screen_name']!= null )
				   {
				   	 // add into TABLE `spider.user`
					 $sql = "insert into users(uid,nick_name,gender,province,city,url,description) values (?,?,?,?,?,?,?)";
					 $stmt = $this -> db -> prepare($sql);
					 $stmt -> bindValue (1,$userInfo['id']);
					 $stmt -> bindValue (2,$userInfo['screen_name']);
						 if($userInfo['gender'] =='m')
						 	$gender = '男';
						 else if($userInfo['gender'] =='f')
						 	$gender = '女';
						 else 
						 	$gender = '未知';
					 $stmt -> bindValue (3,$gender);
					 	$loc = explode(" ",$userInfo['location']);
					 
					 $stmt -> bindValue (4,$loc[0]);
					 if(isset($loc[1]))
					  $stmt -> bindValue (5,$loc[1]);
					 else 
					 	$stmt ->bindValue(5,'');
					 $stmt -> bindValue (6,$userInfo['url']);
					 $stmt -> bindValue (7,$userInfo['description']);
					 $stmt -> execute();
					 
					 $sql = "select * from users where uid = $id";
					 $res2 = $this -> db -> query($sql);
					 $retValue = $res2 -> fetch();
					 return $retValue;
				   }
				   // if can not find this user info ,delete it from DB.experience
				   else
				   {
				   		deleteUid($id);
				   		return null;
				   }
				}
		 }
		 catch (Exception $e)
		 {
		 	var_dump($e->getMessage());
		 }
	}
}