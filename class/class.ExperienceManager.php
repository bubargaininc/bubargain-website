

<?php 

 include_once("config.php");
 
 Class ExperienceManager
 {
 	protected $db;
 	public function __construct ($db)
 	{
 		
 		$this->db = $db;
 	}
  //update user's experience in DB `experience`
  //return $idexperience
  public function updateExp ($uid,$merchantID,$point)
  {
  	
  	Try
  	{
  		
  	 	$sql2 = "select idexperience,experience from experience where uid= ? and merchantID = ?";
  	 	$stmt2 = $this->db -> prepare ($sql2);
  	 	$stmt2 -> bindValue(1,$uid);
  	 	$stmt2 -> bindValue(2,$merchantID);
  	 	$stmt2 -> execute();
  	 	$res = $stmt2->fetch();
  	 	//update point value
  	 	if(isset($res['idexperience']))
  	 	{
  	 		if($res['experience'] != NULL)
  	 			$point = $point + $res['experience'];
  	 		
  	 		$sql3 = "update experience set experience =? where idexperience = ?";
  	 		$stmt3 = $this->db ->prepare($sql3);
  	 		$stmt3 -> bindValue(1,$point);
  	 		$stmt3 -> bindValue(2,$res['idexperience']);
  	 		$stmt3 ->execute();
  	 		
  	 		return $res['idexperience'];
  	 		
  	 	}
  	 	//create new column
  	 	else
  	 	{
  	 		$sql4 = "Insert into experience(uid,merchantID,experience) value (?,?,?)";
  	 		$stmt4 = $this->db->prepare($sql4);
  	 		$stmt4 -> bindValue(1,$uid);
  	 		$stmt4 -> bindValue(2,$merchantID);
  	 		$stmt4 -> bindValue(3,$point);
  	 		$stmt4 -> execute();
  	 		
  	 		//low efficience!!  return idexperience;
  	 		$sql5 = "select idexperience from experience where uid =? and merchantID =?";
  	 		$stmt5 = $this->db->prepare($sql5);
  	 		$stmt5 -> bindValue(1,$uid);
  	 		$stmt5 -> bindValue(2,$merchantID);
  	 		$stmt5 -> execute();
  	 		$res = $stmt5->fetch();
  	 		return $res['idexperience'];
  	 	}
  	}
  	catch (EXCEPTION $e)
  	{
  		var_dump($e->getMessage());
  	}
  	return '0';
  }
  
  //use to track one user's behavior for certain merchant
  // didn't to it in v1.0 
   public function expBack ($idexperience,$idcontent, $text,$type,$orginWeiboID)
  {
  	
  }
  
  /*
   * setlastRepostId or setLastCommentId   in DB.fetchWeibo
   * $type = 'comment' or 'repost'
   */
  
  
   public function setLastId($lastId,$idfetchWeibo,$type)
  {
  	 
  	 
  	 $str = '';
  	 if($type == 'comment')
  	 {
  	 	$str = 'lastCommentId';
  	 }
  	 else
  	 {
  	 	$str = 'lastRepostId';
  	 }
  	 
  	 $sql = "update fetchweibo set $str = $lastId where idfetchWeibo = $idfetchWeibo";
  	
  	 $res = $this->db -> exec($sql);
  }
 }
  
  
  