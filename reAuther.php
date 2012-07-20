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
			<p>Daniel Ma (<a href="#">3 SMS</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">重新授权</a>  </article>
            </div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>
 <?php 
   include_once("config.php");
  include_once("saetv2.ex.class.php");
//get authorize if not

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY  );
$code_url = $o->getAuthorizeURL( CANVAS_PAGE );


?>

 <section id="main" class="column">
 	 <h4 class="  alert_error"> Sorry！您的微博授权已过期，请重新登陆 </h4>
 
 	  <article class="module width_quarter" >
		  <div class="module_content">
          		<a href="<?=$code_url?>"><img src="images/weibo_logo.png" title="点击进入授权页面" alt="点击进入授权页面" border="0" width="125" height="25" ></img></a>
          </div>
      </article>
 </section>
 
 
 
 


