<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">

<head>
	<meta charset="utf-8"/>
	<title>布八哥消费者关系营销系统</title>
	<meta property="wb:webmaster" content="f9811d176ed0769c" />
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=297024590" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php include_once ("js/layout.js"); ?>   <!-- include layout code -->

</head>

<?php 
/**************************************************** 
 * update uid for each weibo in DB `fetchWeibo`
 * please pay attetion to API query limit
 * trigger time :   new merhant session setup(login) && less then 30mins than last update 
 * by Daniel Ma , 2012-07-21
 *****************************************************/

   include_once("session.php");
   
   // add userID restrict here if needed
   include_once("config.php");
   include_once("saetv2.ex.class.php");
   include_once("class/class.ExperienceManager.php");
  
   if(isset($_SESSION['token'])  && isset($_SESSION['merchantID']))
   {
   	
   		//update all his tracking weibo ,limit 50
   		global $host,$db,$user,$pwd ;
   		//setup DB connection
  	 	$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
  	 	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   		
  	 	//get all fetchweiboID by merchantID limit 30
  	 	$sql = "select idfetchWeibo,realWeiboID,lastRepostId,lastCommentId from fetchWeibo where merchantID =".$_SESSION['merchantID']
  	 		." order by idfetchWeibo DESC limit 0,30 ";
  	 	$stmt = $conn -> query ($sql);
   		$res = $stmt -> fetchAll();
   		
  		$expOper = new ExperienceManager($conn);
   		
   		//search repost and comment by realWeiboID
   		foreach ($res as $oneID)
   		{
   			//search comments uid by weibo API 'http://open.weibo.com/wiki/2/comments/show'
   			$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
   			
   			$comment = $c -> get_comments_by_sid ($oneID['realWeiboID'],1,50,$oneID['lastCommentId'],0,0,0);
   			
   			print_r("<br />add new comments uid ,total:".count($comment['comments']));
   			
   			//set lastCommentId
   			if( isset( $comment['comments'][0]['id']))
   			{
   				$id = number_format($comment['comments'][0]['id'],0,'','');
   				
   				$expOper -> setLastId($id,$oneID['idfetchWeibo'],'comment');
   			}
   			
   			foreach ($comment["comments"] as $com)	
   			{
   				
   				$idexperience = $expOper ->  updateExp ($com['user']['id'],$_SESSION['merchantID'],'5');
   				//backup experience into DB.expBackup
   				$expOper -> expBack($idexperience,$com['id'],$com['text'],'comment',$oneID['realWeiboID']);
   			}
   			
  			 
   			/*
   			 * search repost uid since lastRepostId
   			 * use weibo API http://open.weibo.com/wiki/2/statuses/repost_timeline/ids
   			 */
   			
   			$repost = $c -> repost_timeline($oneID['realWeiboID'],1,50,$oneID['lastRepostId'],0,0);
   			
   			print_r("<br />add new repost uid ,total:".count($repost['reposts']));
   			//set lastRepostId
   			
   			if( isset( $repost['reposts'][0]['user']['id']))
   			{
   				$id = number_format($repost['reposts'][0]['id'],0,'','');
   					
   				$expOper -> setLastId($id,$oneID['idfetchWeibo'],'repost');
   			}
   			
   			foreach ($repost["reposts"] as $com)
   			{
   				if(isset($con['user']))
   				{
	   				$idexperience =$expOper ->  updateExp ($com['user']['id'],$_SESSION['merchantID'],'3');
	   				//backup experience into DB.expBackup
	   				$expOper -> expBack($idexperience,$com['id'],$com['text'],'repost',$oneID['realWeiboID']);
   				}
   			}
   			
   			
   			
   			$conn = null;
   		}
   	
   }
   
  
   
