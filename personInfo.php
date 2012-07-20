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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">系统设置</a> <div class="breadcrumb_divider"></div> <a class="current">公司信息</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class=" alert_success">  个人信息页面
     </h4>
     
     <article class="module width_3_quarter" >
     <header> <h3>个人信息 </h3> </header>
     <div class="module_content">
     
<fieldset>
<label for="person_first_name">姓</label>
<input   id="person_first_name" name="person[first_name]"  required="required" type="text" />
<label for="person_last_name">名</label>
<input   id="person_last_name" name="person[last_name]"  required="required"  type="text" />
<label for="person_last_name">证件号码</label>
<input   id="Identity" name="person[Identity_num]"  required="required"  type="text" />
<label for="person_email">邮箱</label>
<input id="person_email" name="person[email]" placeholder="请输入您的邮箱" required="required" type="text"  />
<label for="person_title">职位</label>
<input  id="person_title" name="person[title]" placeholder="您的职位" required="required"   type="text" />
<label for="person_first_phone_number">手机</label>
<input   id="person_first_phone_number" name="person[first_phone_number]" placeholder="请留下您的手机号，以便及时联系您"   type="text" />
<label for="person_first_phone_number">电话（可选）</label>
<input   id="person_first_phone_number" name="person[Tel_number]"  type="text" />
<label for="lead_primary_contact_method">首选联系方式</label>
<select id="lead_primary_contact_method" name="lead[primary_contact_method]" >
<option value="Email">邮箱</option>
<option value="Phone">手机</option>
<option value="Phone">电话</option>
<option value="Weibo">微博</option></select>
 </fieldset>
 </div>


     <footer>
				<div class="submit_link">
					
					<input type="submit" value="修改并提交" class="alt_btn">
					<input type="submit" value="重置">
				</div>
			</footer>
     </article>
     
     </section>
     
         <div style="height:20px">
         </div>
     </body>
     </html>y