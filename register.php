




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
			<p>Daniel Ma (<a href="#">3 SMS</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">登陆界面</a> </article>
		</div>
	</section><!-- end of secondary bar -->
    
<aside id="sidebar" style="min-height:700px" class="column" >

</aside><!-- end of sidebar -->


<section id="main" class="column">
    <h4 class="alert_info"> 请填写您的注册信息
    
     </h4>
	
    <script>
		function checkPassSame()
		{
			if( Pass1.value != Pass2.value)
			{
				alert1.style.visibility = 'visible' ;
			}
			else
			{
				alert1.style.visibility = 'hidden' ;	
			}

		}
		
	</script>	
        
             
     <article class="module  width_3_quarter">
			<header><h3>用户注册</h3></header>
            <form name="formRegister" method="post" action="register_c.php">
             
				<div class="module_content">
						<fieldset>
							<label>用户名</label>
							<input type="text" id="userName" name="userName"   maxlength="30">
						</fieldset>
                        <fieldset>
							<label>真实姓名</label>
							<input type="text" name="name" maxlength="30">
						</fieldset>
                        <fieldset>
							<label>密码</label>
							<input type="password" id="Pass1" name="Pass"  onchange="checkPassSame();">
                            <label>再次输入密码</label>
							<input type="password" id="Pass2" name="Pass2"  onchange="checkPassSame();">
                            <label id="alert1" style="width:90%; color:red ; visibility:hidden" >*两次密码不一致哦</label>
						</fieldset>
                        <fieldset>
							<label>邮箱</label>
							<input type="email" name="email">
						</fieldset>
                        <fieldset>
							<label>公司名称</label>
							<input type="text" name="company">
						</fieldset>
                        <fieldset>
							<label>职位</label>
							<input type="text" name="title">
						</fieldset>
                         <fieldset>
							<label>您的角色</label>
							<select  name="purpose">
                                <option value="try">企业申请试用</option>
                                <option value="invest">投资人</option>
                                <option value="interest">单纯感兴趣</option>
                                <option value="partner">合作伙伴</option>
                                <option value="competitor">竞争对手</option>
							</select>
						</fieldset>
                        <fieldset>
							<label>备注</label>
							<textarea name="comments" cols="" rows="3"></textarea>
						</fieldset>
                        
                  </div>
                  <footer>
                  <div class="submit_link">
					<input type="submit" value="注册" class="alt_btn">
                    </div>
                  </footer>
                  </form>
                  </article>
     
     </section>
     
     </body>
     </html>