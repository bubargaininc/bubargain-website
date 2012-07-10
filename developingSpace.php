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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">新消费者培育</a> <div class="breadcrumb_divider"></div> <a class="current">进化空间</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class="alert_info"> 恭喜您！您已经与如下消费者建立了初步联系，让我们继续努力，增强企业的品牌认知度吧！
      <br /> &nbsp; &nbsp;&nbsp; ※消费者的经验值范围从1-100，满分则进入“促销目标”库
      <br /> &nbsp; &nbsp;&nbsp; ※计分规则：被动接收一条讯息，经验+2； 消费者转发，评论了您的讯息，经验+5 ~ 100（取决于内容）；
      <br />  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 进入APP应用，经验+10； 参与线上活动，经验+20； 其他待补充；
      <br  />&nbsp; &nbsp;&nbsp; ※请合理分配发送渠道和发送频率，避免用户投诉
    </h4>
    
    
    <article class="module width_3_quarter">
    <header><h3 class="tabs_involved">进化空间
    </h3>
    </header>
    
    <table class="tablesorter" cellspacing="0" >
    <thead>
        <tr>
    	<th colspan="4" align="center" style="border-right:1px solid grey">基本信息</th>
    	<th colspan="6" align="center">数量统计</th>
    	</tr>
        
        <tr >
        <th ></th>
        <th >客户名</th>
        <th >所属分类</th>
    	<th y>经验值</th>
            <th>讯息</th>
            <th>电邮</th>
            <th>转发</th>
            <th>评论</th>
            <th>活动</th>
            <th>其他</th>
        </tr>
    </thead>
    
    <!-- sample row -->
    
    	<tr>
       		 <td>
        	   <input name="checked" type="checkbox" value="" />
        	</td>
   			<td>
            	<a href="http://weibo.com/mayx" target="new">布八哥马宇翔</a>
            </td>
            <td>
            	海淀白领
            </td>
            <td>
            	50
            </td>
            <td>
            	<a href="#">5</a>
            </td>
            <td>
            	5
            </td>
             <td>
             	<a href="#">1</a>
            </td>
             <td>
             	<a href="#">2</a>
            </td>
             <td>
             	0
            </td>
             <td>
             	0
            </td>
           
        </tr>
    
    <!-- sample row2 -->
    	
 	    <tr>
       		 <td>
        	   <input name="checked" type="checkbox" value="" />
        	</td>
   			<td>
            	<a href="http://weibo.com/U/1498466074" target="new">伟忠启明</a>
            </td>
            <td>
            	海淀白领
            </td>
            <td>
            	40
            </td>
            <td>
            	<a href="#">5</a>
            </td>
            <td>
            	0
            </td>
             <td>
             	<a href="#">2</a>
            </td>
             <td>
             	<a href="#">0</a>
            </td>
             <td>
             	1
            </td>
             <td>
             	0
            </td>
           
        </tr>
   
   <!-- sample row3 -->
        <tr>
       		 <td>
        	   <input name="checked" type="checkbox" value="" />
        	</td>
   			<td>
            	<a href="http://weibo.com/iamwangdan" target="new">围着围脖的王丹</a>
            </td>
            <td>
            	高富帅
            </td>
            <td>
            	40
            </td>
            <td>
            	<a href="#">4</a>
            </td>
            <td>
            	1
            </td>
             <td>
             	<a href="#">1</a>
            </td>
             <td>
             	<a href="#">1</a>
            </td>
             <td>
             	1
            </td>
             <td>
             	0
            </td>
           
        </tr>
        
       
    
      <!-- sample row3 -->
        <tr>
       		 <td>
        	   <input name="checked" type="checkbox" value="" />
        	</td>
   			<td>
            	<a href=" http://weibo.com/111850305" target="new">委鬼山争</a>
            </td>
            <td>
            	高富帅
            </td>
            <td>
            	30
            </td>
            <td>
            	<a href="#">4</a>
            </td>
            <td>
            	1
            </td>
             <td>
             	<a href="#">1</a>
            </td>
             <td>
             	<a href="#">0</a>
            </td>
             <td>
             	1
            </td>
             <td>
             	0
            </td>
           
        </tr>    
        
    </table>
    
     <div class="submit_link">
					
					<input type="submit" value="营销定向投放" class="alt_btn"> 
					
				</div>
    </section>
    
    </body>
    </html>