<?php  include_once("session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8"/>
	<title>布八哥消费者关系营销系统</title>
	
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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">新消费者培育</a> <div class="breadcrumb_divider"></div> <a class="current">促销目标</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class=" alert_success"> 毫无疑问，您的品牌对于如下消费者已经具有相当的影响力，现在您需要的就是再迈进一步，吸引他们初次体验
      <br /> &nbsp; &nbsp;&nbsp; ※首次消费对每位消费者来说只有一次，而这一次消费将决定其会不会对您产生忠诚度。所以请您给予其可观的促销力度并提供最优质的服务
      <br /> &nbsp; &nbsp;&nbsp; ※我们会在您发送的促销信息中，自动加入验证码。当交易发生时，请您务必在“验证码”页面进行校验,在保障您的权益的同时为客户维系打下基础
      
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
   		 $sql = "select count(*)  from experience where merchantID = ".$_SESSION['merchantID']
   		 		." and experience > 100 " ;
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
      <h3 class="tabs_involved">首次消费目标人群 &nbsp;&nbsp; <span style="color:#336" >总数：<?=$amount ?></span>
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
	        <th></th>
	        <th >客户名</th> 
	        <th >地区</th>
	        <th >性别</th>  
	        
	    	<th >最近参与</th>
	             <th ></th>
        </tr>
    </thead>
    
  <?php 
  	
   		 
   		 $sql = "select * from experience where merchantID = ".$_SESSION['merchantID']
   		 		." and experience > 100 order by experience DESC limit ".$page_now *20 .", 20 ";
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
		 		<td><input name="SelectUser" type="checkbox" value="<?=$userInfo['uid']?>" /></td>
		 		<td><a href="http://weibo.com/u/<?=$userInfo['uid']?>" target="new" ><?=$userInfo['nick_name']?></a></td>
		 		<td><?=$userInfo['province']?>  <?=$userInfo['city']?></td>
		 		<td><?=$userInfo['gender']?></td>
		 		
		 		<td></td>
		 		<td></td>
		 	</tr>
		 	<?php 
		 	}
		 }
		 	
		 
  		
  		
  ?>
     
        </tr>  
        <td colspan="6"  nowrap="nowrap">
        <span>
     
         <?php 
		     if( $page_now != '0')
			 {
			 	$value = $page_now -1;
				 echo "<a style='width:10%' href='developingSpace.php?page=".$value."' ><h4>上一页</h4></a> ";
             }
             if ( $page_now * 20 < $amount && $amount > 20)
             {
             	$value = $page_now + 1;
             	echo "<a style='width:10%' href='developingSpace.php?page=".$value."' ><h4>下一页</h4></a> ";
             }
			 ?>
             </span>
			 </td>
        </tr>  
        
    </table>
    
     <div class="submit_link">
					
					<input type="submit" value="营销定向投放" class="alt_btn"> 
					
				</div>
    </section>
    
    </body>
    </html>