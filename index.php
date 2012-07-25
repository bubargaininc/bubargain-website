<?php
  include_once("session.php");
  
  //if not get access_token from sina weibo, jump to reAuther.php Page
  if(empty($_SESSION['token']))
  {
  	header("location: reAuther.php");
  	exit;
  }
  
?>



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
			<article class="breadcrumbs"><a href="index.php">控制面板</a> <div class="breadcrumb_divider"></div> <a class="current">首页</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class=" alert_warning"> 欢迎光临布八哥消费者关系营销系统！看看今天又有什么新发现吧
     </h4>
     
     <table border="30px" width="100%" 	 bordercolor="#F6F6F6"> 
     		<tr>
            	<td width="33%">
               		 <article style="float:left; width:90%; " class="stats_overview" >
					<div class="overview_today">
						<p class="overview_day">今天</p>
						<p class="overview_count">1,876</p>
						<p class="overview_type">消费者</p>
						<p class="overview_count">2,103</p>
						<p class="overview_type">互动</p>
					</div>
					<div class="overview_previous">
						<p class="overview_day">昨天</p>
						<p class="overview_count">1,646</p>
						<p class="overview_type">消费者</p>
						<p class="overview_count">2,054</p>
						<p class="overview_type">互动</p>
					</div>
				</article>
                </td>
                <td width="33%">
                	 <article  style="float:left; width:90% " class="stats_overview">
					
						<table width="98%" align="center">
                        	
                            <thead>
                            	<th  align="center"  height="30%" colspan="2"><h2 style="font-size:20px">销售额</h2></th>
                            </thead>
                          
                            <tr>
                            	<td width="30%"><p style="font-size:18px; font:bold">当日</p></td>
                                <td width="65%" ><p class="overview_count">1,876</p></td>
                            </tr>
                            <tr>
                            	<td ><p style="font-size:18px; font:bold">当月</p></td>
                                <td ><p class="overview_count">1,876 </p></td>
                            </tr>
                        </table>
                        
                      
				</article>

                </td>
                <td width="33%" rowspan="2">
                	  <div style="float:right; height:98%; width:90%" class="module width_quarter_2" >
                        <header><h3>事件提醒</h3></header>
                        <div style="height:90%" class="message_list">
                            <div class="module_content">
                                <div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
                                <p><strong>John Doe</strong></p></div>
                                <div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
                                <p><strong>John Doe</strong></p></div>
                                <div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
                                <p><strong>John Doe</strong></p></div>
                                <div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
                                <p><strong>John Doe</strong></p></div>
                                <div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
                                <p><strong>John Doe</strong></p></div>
                           </div>
                        </div>
                        <footer>
                            <form class="post_message">
                                <input type="text" value="Message" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
                                <input type="submit" class="btn_post_message" value=""/>
                            </form>
                        </footer>
                    </div><!-- end of messages article -->
                </td>
            </tr>
            
            
            <tr>
            	<td colspan="2">
                	<article style="width:90%; min-height:300px" class="module  width_half">
						<header><h3>用户量统计</h3></header>
						<div class="module_content">
							<article class="stats_graph">
									<img src="http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30" width="520" height="250px" alt="" />
							</article>
                            </div>
                     </article>
                </td>
               
            </tr>
            
     </table>
     
     
	<!--  <a href="javascript:" id="wb_connect_btn"></a> -->

		
                
                
               
					
                

	  



</section>

</body>
</html>