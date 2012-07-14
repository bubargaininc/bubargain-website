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
			<p>Daniel Ma (<a href="#">3 SMS</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">社交管理</a> <div class="breadcrumb_divider"></div> <a class="current">微博跟踪</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class=" alert_info">  本页用于跟踪您在社交网络上投放的微博信息，当您添加了某条微博后，我们会自动将相关的转发者和评论者加入到<a href="developingSpace.php"><strong style=" color:red">"进化空间"</strong></a>页内,并赋予初始经验值
         <br />&nbsp;&nbsp;&nbsp;※小贴士： <如何获得微博地址连接> 单击某条微博下面的”时间”，就会跳转到该微博页，拷贝地址栏吧 ~.~ 
     </h4>
	
		<article class="module width_full">
			<header><h3>微博投放管理</h3></header>
				<div class="module_content">
						<fieldset>
							<label>添加微博地址</label>
							<input type="text">
                            <label style=" white-space:nowrap">完整的微博地址链接如：http://weibo.com/2786901240/yrQZAlVBL</label>
                            <div class="submit_link">
                            	<input type="submit" value="添加" >
                            </div>
						</fieldset>    
                        <fieldset>
                        	<table class="tablesorter">
                            	<thead>
                                	<th width="55%">微博内容</th>
                                    <th>发送时间</th>
                                    <th>发送平台</th>
                                    <th>转发数量</th>
                                    <th>评论数量</th>
                                </thead>
                                
                             <tr>
                             	<td ><a href="http://weibo.com/2786901240/yrQZAlVBL"  target="_blank">这是来自@布八哥推荐 的一条微博，暂时你可以忽略它，但是我们以后会经常见面的  </a></td>
                                <td>2012/07/10 23:33</td>
                                <td>新浪微博</td>
                                <td>0</td>
                                <td>0</td>
                                
                             </tr>   
                              <tr>
                                <td> <a href="http://e.weibo.com/2374886105/yrQZDmGyl" target="_blank">#启明活动#那些拥有的、失去的、现在的、将来的都一点一点印在我们的脑海里，一天一絮语，一生一爱情！写下你们间的恋人絮语，就有机会参加抽取大奖，还有可能将你们的爱情故事拍成微电影，让我们一起见证你们的爱情！给情人们送上祝福吧，评论转发也可以获大奖哦，IPad等你拿！</a></td>
                              	<td>2012/07/10 23:30</td>
                                <td>新浪微博</td>
                                <td>0</td>
                                <td>0</td>
                              </tr>  
                            </table>
                        </fieldset>
                        </div>
                        </article>
                        
    </section>
    
    </body>
    
    </html>