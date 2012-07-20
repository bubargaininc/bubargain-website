<?php session_start(); ?>


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
   
	//include top and left bar of this page   
	include_once ("top.php");
	
?>
<section id="secondary_bar">
		<div class="user">
			
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a> <div class="breadcrumb_divider"></div> <a class="current">首页</a></article>
		</div>
	</section><!-- end of secondary bar -->
 <aside id="sidebar" style="min-height:700px" class="column" >

</aside><!-- end of sidebar -->


<?php
//数据库新建用户
    include_once("config.php");

	//connect to db
	try {
 		
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(var_dump($e));
    }
    

			$pass = md5($_POST[pass]);
			if( ! $conn )
			{
				die('注册出现问题，请稍后再试'.mysql_error() );
			}
			else
			{
				
				//mysql_select_db("bubargain_db",$conn);
				$sql = "select id,userName,loginUserPass,allowed,merchantID from loginuser where loginUserName='$_POST[userName]' ";
				$result = $conn->query($sql);
				
				try
				{
					
					
					$row = $result->fetchAll();
					if( count($row) > 0 )
					{
						foreach( $row as $onerow )
						{
							if( $pass != $onerow['loginUserPass'])
							{	
								echo '密码错误！';
								exit;
							}
							
							if( $onerow['allowed'] == 1)
							{
								$_SESSION['userName'] = $onerow['userName'];
								$_SESSION['merchantID'] = $onerow['merchantID'];
								$_SESSION['loginID'] = $onerow['id'];
								header("location: index.php");
								break;
							}
							else
							{
								header("location: wait.php");
								break;
							}
						}
					}
					else
					{	
						header("location: 404.php");
					}
				}
				catch (Exception $e)
				{
					header("location: 404.php");
					echo $e->message();
				}
				
	}
	


//jump to wait page

?>