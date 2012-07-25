<?php
   include_once("session.php");
?>
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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">营销拓展</a> <div class="breadcrumb_divider"></div> <a class="current">新营销计划</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class="alert_info"> 我们帮助您将市场营销计划进行整合，使您能够方便的管理和统计营销计划
       <br /> &nbsp; &nbsp;&nbsp; ※为了便于多渠道使用，请控制营销信息的字数
       <br /> &nbsp; &nbsp;&nbsp; ※我们建议新客户初次接触适合做“小贴士”式的知识分享，建立了品牌认知度以后再进行品牌宣传，最后为促成消费者转化订制营销方案     
    </h4>
 
    <article class="module width_3_quarter" >
    	<header><h3 class="tabs_involved">新营销计划</h3></header>
        <div class="module_content">
        <form action="newMarketingPlan.class.php" method="post">
        <fieldset > 
        	<label>营销计划名称</label>
			<input type="text" name="planName"/>
        </fieldset>
        <fieldset>
			<label>内容</label>
			<textarea name="planContent" rows="6"></textarea>
		</fieldset>
        <fieldset style="width:48%; float:left; margin-right: 3%;">
        	<label>类型</label>
            <select name="planType">
            	<option value="知识小贴士"> 知识小贴士</option>
             	<option value="品牌宣传"> 品牌宣传</option>
                <option value="销售策略"> 销售策略</option>
             </select>
             
        </fieldset>
        <fieldset style="width:48%; float:left;">
        	<label>图片地址链接</label>
            <input type="text" name="picLoc" />
        </fieldset>
        </div>
        <footer>
				<div class="submit_link">
					
					<input type="submit" value="添加新方案" class="alt_btn">
					
				</div>
		</footer>
		</form>
    </article>
    
 
 
 
 