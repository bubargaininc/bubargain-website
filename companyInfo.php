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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">系统设置</a> <div class="breadcrumb_divider"></div> <a class="current">公司信息</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class=" alert_success">  您的企业账户已经通过审核，并开启了全部功能权限，谢谢使用！
     </h4>
     
  
<article class="module width_3_quarter">
<header>
<h3>公司信息</h3>
</header>
 <div class="module_content">
<fieldset>
<label for="organization_display_name">公司名称</label>
<input   id="organization_display_name" name="organization[display_name]" placeholder="Company name" required="required"   type="text" />
<label for="lead_organization_size">公司雇员规模</label>
<select id="lead_organization_size" name="lead[organization_size]"><option value="1">1</option>
<option value="2-10">2-10</option>
<option value="11-50">11-50</option>
<option value="51-200">51-200</option>
<option value="201-500">201-500</option>
<option value="501-1000">501-1000</option>
<option value="1001-5000">1001-5000</option>
<option value="5001-10,000">5001-10,000</option>
<option value="10,000+">10,000+</option></select>

<label for="lead_industry">行业</label>
<select id="lead_industry" name="lead[industry]"><option value="Accounting">会计/审计</option>
<option value="Agriculture">农业</option>
<option value="Automotive">汽车</option>
<option value="Biotechnology">生物</option>
<option value="Business Services">企业服务</option>
<option value="Education">教育</option>
<option value="Entertainment">娱乐</option>
<option value="Financial Services">金融</option>
<option value="Food and Beverage">餐饮</option>
<option value="Government">政府部门/事业单位</option>
<option value="Healthcare">医疗健康</option>
<option value="Hospitality">酒店</option>
<option value="Insurance">保险</option>
<option value="Legal Services">法律</option>
<option value="Medical">医药</option>
<option value="Manufacturing">工业制造</option>
<option value="Non-Profit">非营利机构</option>
<option value="Packaged Goods">生产包装类企业</option>
<option value="Real Estate">房地产</option>
<option value="Retail">零售</option>
<option value="Technology (Hardware)">计算机硬件</option>
<option value="Technology (Software)" >计算机软件</option>
<option value="E-commerce" selected="selected">电子商务</option>
<option value="Telecommunications">电信</option>
<option value="Other">Other</option></select>
<br>
<label for="organization_address_province">省份</label>
<input   id="organization_address_province" name="organization[address][province]" placeholder="省份"   type="text" value="" />
<label for="organization_address_country">城市</label>
<input   id="organization_address_country" name="organization[address][country]" placeholder="城市"   type="text" value="" />
<label for="organization_address_country">地址</label>
<input   id="organization_address_country" name="organization[address][street]" placeholder="详细地址"   type="text" value="" />

<label for="open_time">营业时间</label>
<input name="open_time" type="text" placeholder="请输入公司的营业时间" />

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
     </html>