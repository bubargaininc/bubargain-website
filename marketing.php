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
			<p>Welcome,<?php echo $_SESSION['userName'] ?> !</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a> <div class="breadcrumb_divider"></div> <a class="current">营销拓展</a><div class="breadcrumb_divider"></div> <a class="current">营销计划</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class="  alert_info">  营销计划汇总页
     </h4>
     
     <article class=" module width_full">
     	<header ><h3 class="tabs_involved"> 营销计划</h3>
        </header>
        <table class=" tablesorter">
        	<thead>
            	<th  nowrap="nowrap">类别</th>
                <th  nowrap="nowrap">营销计划名称</th>
                <th  style="max-width:50%">内容</th>
                <th  nowrap="nowrap">图片</th>
                <th  nowrap="nowrap">发送渠道</th>
                <th  nowrap="nowrap">累计发送数量</th>
                <th  nowrap="nowrap">备注</th>
                <th  nowrap="nowrap">操作</th>
            </thead>
            <tr>
            	<td><strong>品牌宣传</strong></td>
                <td>盟邦新剧演员模特海选</td>
                <td>
                	1.#活出全新的自己#舞台剧首次公开招募剧中所有演员和模特！张德芬同名小说改编，由华联集团，奥迪A1携手盟邦戏剧重磅推出。内部推荐您来参与，也可推荐你的朋友参加

，谢谢支持：http://t.cn/zWf4BGk <br />

2. #活出全新的自己#奥迪携手盟邦戏剧合力打造时尚话剧之张德芬 经典著作#活出全新的自己》，即日起至7月19日，演员及模特海选火热进行！详见：http://t.cn/zWf4BGk

 <br />3 .#戏剧微海选#2012奥迪A1携手@盟邦戏剧 BHG Mall倾情打造张德芬小说#活出全新的自己#同名舞台剧。现面向社会诚招模特、演员。您想参与其中的角色么？您想圆自己一

个舞台梦吗？您想展示自己的风采吗？您想活出全新的自己吗？参加活动，在线填写报名表即可报名参加海选！http://t.cn/zWf4BGk


              
                
                </td>
                <td> 无</td>
                <td> 微博</td>
                <td> 4000</td>
                <td>及时活动，7-10到7-19结束</td>
                <td><a href="#">删除</a></td>
            </tr>
            
            <tr>
            	<td><strong>促进销售</strong></td>
                <td>【全国】美梦成真：360特供机“海尔超级战舰”W910，免费送</td>
                <td>【全国】美梦成真：超级战舰，风雨无阻！360特供机“海尔超级战舰”W910，共10台，美团网免费送。大金刚二代触摸屏加视网膜屏，防水、防尘、防刮擦，国内首发28纳米Krait 1.5G双核CPU。邀请1个新用户参加或绑定腾讯/新浪微博多1个抽奖号码，中奖概率翻倍！</td>
                <td><img src="#" /></td>
                <td>直邮</td>
                <td>1000</td>
                <td>无</td>
                <td><a href="#">删除</a></td>
            </tr>
        </table>
          <div class="submit_link">
					
					<input type="submit" value="添加营销计划" class="alt_btn"> 
					
			</div>
    </section>
     </article>  
     
     
     </section>
     
     </body>
     </html>