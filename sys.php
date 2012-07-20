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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">系统设置</a> <div class="breadcrumb_divider"></div> <a class="current">账号设置</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
     
     <article class="module  width_quarter">
     	<header>
        	<h3>账户设置</h3>
        </header>
        
        <fieldset>
        	<label  style="width:20%">用户名</label> <label  name="username"  style=" width:70%" >Danielma</label>
            <label for="Email">电子邮件</label>
            <input id="Email" name="Email" type= "text" value="danielma@bubargain.com" />
            
            <label for="pass">新密码</label>
            <input id="pass" name="pass" type="password"/>
            <label for="pass_check">新密码确认</label>
            <input id="pass_check" name="pass_check"  type="password" />
        </fieldset>
        
     </article>
     
     
     
     
     </section>
     
     </body>
     </html>