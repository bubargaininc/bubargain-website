

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

<body>
<?php
   
	//include top and left bar of this page   
	include_once ("top.php");
	
?>
<section id="secondary_bar">
		<div class="user">
			
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">登陆界面</a> </article>
		</div>
	</section><!-- end of secondary bar -->
    
<aside id="sidebar" style="min-height:700px" class="column" >

</aside><!-- end of sidebar -->


<section id="main" class="column">
    <h4 class=" alert_warning">  非常感谢您对布八哥消费者关系营销系统的兴趣，目前系统还在Demo阶段，我们会争取尽快上线，为您提供最优质的服务
     </h4>
     
     <script language="javascript">
	 	function register()
		{
			window.location.href="register.php";
		}
	 </script>
     
     <article class="module  width_quarter">
			<header><h3>请从这里登陆</h3></header>
            <form method="post" action="login_c.php">
				<div class="module_content">
						<fieldset>
							<label>用户名</label>
							<input type="text" name="userName">
						</fieldset>
                        <fieldset>
							<label>密码</label>
							<input type="password" name="pass">
						</fieldset>
                  </div>
                  <footer>
                  <div class="submit_link">
                  		<input type="submit" value="登陆" class="alt_btn">
                      
					    <input type="button" value="注册" onclick="register()">
                    </div>
                  </footer>
                  </form>
                  </article>
     
     </section>
     
     </body>
     </html>