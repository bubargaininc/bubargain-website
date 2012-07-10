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
	<script language="javascript">
		function picSwitch(obj)
		{
			if (obj.id == "pic1")
			{
					
					obj.src = "images/on.png";
					obj.id = "pic2";
			}
			 else
			{	
					
					obj.src = "images/off.png";
					obj.id = "pic1";
			}
		}
	</script>
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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">新消费者培育</a> <div class="breadcrumb_divider"></div> <a class="current">新客户孵化器</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class="alert_info">新客户孵化器中的客户是由布八哥系统帮助您定位到的潜在客户，请珍惜潜在的商机，针对消费者群的偏好订制营销信息。
      经验建议： <br /> &nbsp; &nbsp;&nbsp; ※不要在首次接触时就推送广告性很强的信息
      <br /> &nbsp; &nbsp;&nbsp; ※如用户未形成互动，再次发送的周期建议在30天以上
      <br /> &nbsp; &nbsp;&nbsp; ※如用户对您投诉，我们会相应降低您的发送权限，以致封号！<br />请铭记“<strong style="color:red">精准营销，在质不在量，请用心为您的消费者订制营销方案！</strong>”
    </h4>
    
     <script>
		function openNewPage()
		{
			window.open("newConsumerType.php");
		}
	</script>
    
    <h4 class="alert_warning">
    <div >
					
					<input type="submit" value="新增消费者群体类型" onclick="openNewPage()"  style="color:black"> 
					
	</div>
    </h4>
    <article class="module width_3_quarter">
    <header><h3 class="tabs_involved">消费者孵化池
    </h3>
    </header>
    
    
   
    
    
    <table class="tablesorter" cellspacing="0">
    	<thead>
            <tr>
                <th></th>
    	    	<th>客户群</th>
                <th>总数量</th>
                <th>已发送数量</th>
                
                <th>营销策略</th>
                <th>客户响应率</th>
                <th width="100px">营销状态</th>
            </tr>
        </thead>
        <tbody>
       		 <!-- sample1 -->
        	<tr>
            	<td>
                	<input name="checkedBox" type="checkbox" value="" />
                </td>
                <td>
                	<a href="#"> 高富帅 </a>
                </td>
                <td>
                	<label >10000</label>
                </td>
                <td>
                	<a href="#"> 100</a>
                </td>
                <td>
                	<a href="#"> VIP 计划</a>
                </td>
                <td>
                	<label>20% </label>
                </td>
                <td>
                 	<img id="pic2" src="/images/off.png"  onclick="picSwitch(this)" />	
                </td>
            </tr>
            
            <!-- sample2 -->
            <tr>
            	<td>
                	<input name="checkedBox" type="checkbox" value="" />
                </td>
                <td>
                	<a href="#"> 海淀白领 </a>
                </td>
                <td>
                	<label >50000</label>
                </td>
                <td>
                	<a href="#"> 4330</a>
                </td>
                <td>
                	<a href="#"> 策略1</a>
                </td>
                <td>
                	<label>40% </label>
                </td>
                <td>
                	<img id="pic1" src="/images/on.png"   onclick="picSwitch(this)" />	
                </td>
            </tr>
        </tbody>
        
    </table>
    
    



</section>




</body>

</html>