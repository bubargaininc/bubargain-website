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
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">消费者关系管理</a> <div class="breadcrumb_divider"></div> <a class="current">客户列表</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class=" alert_info">  <strong style=" color:red">“2/8原则”：20%的客户为企业创造80%的利润！</strong>
           <p> 重点维护老客户实现口碑营销才是最有效的营销方式！</p>
     </h4>
	
    <form class="quick_search">
			</label><input  type="text" value="输入客户名称或VIP卡号" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
   
   
    <article class="module width_full" >
    	<head> 
        	<h3>
            	事件管理
            </h3>
        </head>
        <table class="tablesorter">
        	<thead>	
            	<tr>
                	<th>客户名称</th>
                    <th>事件描述</th>
                    <th>紧急程度</th>
                    <th>起始时间</th>
                    <th>截止时间</th>
                    <th>状态</th>
                    <th>备注</th>
                </tr>
            </thead>
             <!-- sample 2 -->
             <tr>
            	<td><a href="dealHistory.php">邓珊</a></td>
                <td><a href="#">微博投诉</a></td>
                <td><strong style="color:red">紧急</strong></td>
            
                <td>2012/07/01</td>
                <td>2017/07/02</td>
                <td><a href="#">未处理</a></td>
                <td>微博提到"启明视嘉"</td>
                
                
            </tr>
           
            <!-- sample 1 -->
            <tr>
            	<td><a href="dealHistory.php">马宇翔</a></td>
                <td>配镜三个月固定回访</td>
                <td><strong style="color:blue">中等</strong></td>
            
                <td>2012/07/01</td>
                <td>2017/07/15</td>
                <td><a href="#">未处理</a></td>
                <td>备注</td>
                
                
            </tr>
           
            <!-- sample 3 -->
            <tr>
            	<td><a href="dealHistory.php">张三</a></td>
                <td>优惠券到期</td>
                <td><strong style="color:blue">中等</strong></td>
            
                <td>2012/06/01</td>
                <td>2017/06/05</td>
                <td><a href="#">已处理</a></td>
                <td>VIP用户</td>
                
                
            </tr>
           
        </table>
       <footer >
			<input align="right" type="submit" class="alt_btn" value="添加事件提醒" />
       </footer>
    </article>	
    
    <article class=" module width_full" >
		<head> <h3>客户列表</h3></head>   
        <table class="tablesorter" >
			<thead>
            	<th>客户名称</th>
                <th>VIP等级</th>
                <th>上次购买时间</th>
                <th>单次消费额</th>
                <th>总消费额</th>
                <th>备注</th>
            </thead>
            
            <tr>
            	<td>马宇翔1</td>
                <td><a href="#">3</a></td>
                <td>2012/07/01 12:30</td>
                <td><a href="#">100元</a></td>
                <td>2000</td>
                <td></td>
   
            </tr>
            <tr>
            	<td>马宇翔2</td>
                <td><a href="#">3</a></td>
                <td>2012/07/01 12:30</td>
                <td><a href="#">100元</a></td>
                <td>2000</td>
                <td></td>
   
            </tr>
            <tr>
            	<td>马宇翔3</td>
                <td><a href="#">3</a></td>
                <td>2012/07/01 12:30</td>
                <td><a href="#">100元</a></td>
                <td>2000</td>
                <td></td>
   
            </tr>
            <tr>
            	<td>马宇翔4</td>
                <td><a href="#">3</a></td>
                <td>2012/07/01 12:30</td>
                <td><a href="#">100元</a></td>
                <td>2000</td>
                <td></td>
   
            </tr>
        </table>     
        <footer>
        	<input type="submit" class="alt_btn" value="添加客户资料" />
        </footer>
          
    </article>
    
    
        
    
</section>
    
    </body>
    
    </html>
    