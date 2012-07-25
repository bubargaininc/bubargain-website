
<?php
   include_once("session.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8"/>
	<title>布八哥消费者关系营销系统</title>
	<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=297024590" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php include_once ("js/layout.js"); ?>   <!-- include layout code -->

</head>

<body>
<?php
   
	//include top and left bar of this page   
	include_once ("top.php");
	
?>
<section id="secondary_bar">
		<div class="user">
			<p>Welcome,<?php echo $_SESSION['userName'] ?> !</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">新消费者培育</a> <div class="breadcrumb_divider"></div> <a class="current">进化空间</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class="alert_info"> 恭喜您！您已经与如下消费者建立了初步联系，让我们继续努力，增强企业的品牌认知度吧！
      <br /> &nbsp; &nbsp;&nbsp; ※消费者的经验值范围从1-100，满分则进入“促销目标”库
      <br /> &nbsp; &nbsp;&nbsp; ※计分规则：被动接收一条讯息，经验+2； 消费者转发，评论了您的讯息，经验+5 ~ 20；
      <br />  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 进入APP应用，经验+10； 参与线上活动，经验+20...
      <br  />&nbsp; &nbsp;&nbsp; ※请勿给用户重复发送信息
      <br /> &nbsp; &nbsp;&nbsp; ※为了避免发送频率过于频繁，我们会将发送内容存储到缓存区中，然后再逐个发送。如果您需要即使会话，请点击用户名称直接跳转到其微博页面
    </h4>
    
    <?php
			include_once("config.php");
  		include_once("saetv2.ex.class.php");
  		
		try {
	 		
	        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			
	    }
	    catch(Exception $e){
	        die(var_dump($e));
   		 }
   		 
   		 if( ! $conn )
   		 {
   		 	die('连接服务器出现问题，请稍后再试'.mysql_error() );
   		 }
   		 
   		 //count row number
   		 $sql = "select count(*)from experience where merchantID = ".$_SESSION['merchantID']
   		 		." and experience < 100 " ;
   		 $stmt = $conn ->query($sql);
   		 $res = $stmt ->fetch();
   		 $amount = $res[0];
   		 
   		 
   		 $page_now = '0';
		 if( isset($_REQUEST['page']))
		 {
			$page_now = $_REQUEST['page'];
		 }
	?>
    
    
    <article class="module width_3_quarter">
    <header>
      <h3 class="tabs_involved">进化空间 &nbsp;&nbsp; <span style="color:#336" >总数：<?=$amount ?></span>
    </h3> 
    </header>
    
    <table class="tablesorter" cellspacing="0" >
    <thead>
       <!--
        <tr>
    	<th colspan="4" align="center" style="border-right:1px solid grey">基本信息</th>
    	<th colspan="6" align="center">数量统计</th>
    	</tr>
       --> 
        <tr >
	       
	        <th >客户名</th> 
	        <th >地区</th>
	        <th >性别</th>  
	        <th> 经验</th>
	    	<th >最近参与</th>
	             <th ></th>
        </tr>
    </thead>
    
  <?php 
  	
   		 
   		 $sql = "select * from experience where merchantID = ".$_SESSION['merchantID']
   		 		." and experience < 100 order by experience DESC limit ".$page_now *20 .", 20 ";
		 $stmt = $conn -> query ($sql);
		 $res = $stmt ->fetchAll();
		 
		 // get user Info by uid List
		    include_once ("class/class.spiderOpera.php");
		  
		  	$conn2 = new PDO( "mysql:host=$host;dbname=$db_spider", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
			$conn2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		 	$spo = new spiderOpera ($conn2);
		 	
			
		 //dynamic draw table
		 
		 
		 foreach ( $res as $onerow)
		 {
		 	$userInfo = $spo -> searchUserInfo ($onerow['uid']); 
		 	if($userInfo != null)
		 	{
		 //	print_r($userInfo); echo "<br />";
		 	?>
		 	<tr>
		 		
		 		<td><a href="http://weibo.com/u/<?=$userInfo['uid']?>" target="new" ><?=$userInfo['nick_name']?></a></td>
		 		<td><?=$userInfo['province']?>  <?=$userInfo['city']?></td>
		 		<td><?=$userInfo['gender']?></td>
		 		<td><?=$onerow['experience']?></td>
		 		<td></td>
		 		<td><input type='submit' id="submit<?=$userInfo['uid']?>" value="一键发送" /></td>
		 	</tr>
		 	<?php 
		 	}
		 }
		 	
		 
  		
  		
  ?>
     
        </tr>  
        <td colspan="6"    nowrap="nowrap">
        
     
         <?php 
		     if( $page_now != '0')
			 {
			 	$value = $page_now -1;
				 echo "<a style='width:30px' href='developingSpace.php?page=".$value."' ><h4>上一页</h4></a> ";
             }
             if ( $page_now *20 < $amount & $amount > 20)
             {
             	$value = $page_now + 1;
             	echo "<a style='width:30px' href='developingSpace.php?page=".$value."' ><h4>下一页</h4></a> ";
             }
			 ?>
             
			 </td>
        </tr>  
        
    </table>
    
    <!--  
     <div class="submit_link">
					
					<input type="submit" value="营销定向投放" class="alt_btn"> 
					
				</div>
				-->
	<div class="clear"></div>
    </section>
    
    </body>
    </html>