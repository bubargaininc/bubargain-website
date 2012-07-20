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
    
    
    <article class="module width_3_quarter">
    <header><h3 class="tabs_involved">首次消费促销目标
    </h3>
    </header>
    <table class="tablesorter" >
    	<thead>
        	<th></th>
        	<th nowrap="nowrap">客户名</th>
            <th nowrap="nowrap">昵称</th>
            <th nowrap="nowrap">地址</th>
            <th nowrap="nowrap">生日</th>
            <th nowrap="nowrap">性别</th>
            <th nowrap="nowrap">职业</th>
            <th  nowrap="nowrap">公司</th>
            <th nowrap="nowrap">个人描述</th>                                       
        </thead>
        <!-- sample -->
    	 <tr>
         	<td> <input type="checkbox" /></td>
            <td> <a href="http://weibo.com/mayx">布八哥马宇翔</a> </td>
            <td> </td>
            <td> 北京市，海淀区</td>
            <td> 1985/04/30</td>
            <td> 男</td>
            <td> CEO</td>
            <td> 布八哥消费者精准营销有限公司</td>
            <td> 创业就是一步步坚持走下去！</td>
         </tr>
    </table>
    <div class=" module_content">
    	<h3>备注：</h3>
        <p> 根据中华人民共和国个人隐私管理的相关条例，我们无权公开消费者个人私密数据</p>
        <p> 我们仅利用这些数据作为接触消费者的渠道</p>
    </div>
    
                <div class="submit_link">
					
					<input type="submit" value="促销精准投放" class="alt_btn"> 
					
				</div>
   
   </article>
   
   </section>
   
   </body>
   
   </html>