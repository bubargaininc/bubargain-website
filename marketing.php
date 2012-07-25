<?php session_start();?>

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
            	<th style="width:6%"  nowrap="nowrap">类别</th>
                <th style="width:16%" nowrap="nowrap">营销计划名称</th>
                <th  style="max-width:50%">内容</th>
                <th  nowrap="nowrap">图片</th>
               
                <th  nowrap="nowrap">累计效果</th>
                
                <th  nowrap="nowrap">操作</th>
            </thead>
            
            <!--  dynamic draw tables from DB -->
            <?php 
            	include('config.php');
            	//connect to db
            	try {
            			
            		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
            		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            		
            		$sql = "select * from marketplan where merchantID=".$_SESSION['merchantID'];
            		$stmt = $conn -> query ($sql);
            		$res = $stmt -> fetchAll();
            		
            		
            	}
            	catch(Exception $e){
            		die(var_dump($e));
            	}
            	
            	// get correct data from db
            	if(isset($res[0]['planName']))
            	{
            		foreach($res as $onerow)
            		{
            			?>
            			<tr id="tr".<?=$onerow['idmarketplan']?>>
            				<td><?=$onerow['planType']?></td>
            				<td><?=$onerow['planName']?></td>
            				<td><?=$onerow['planContent']?></td>
            				<td>
            				<?php 
            				if($onerow['picLoc']!= null)
            					 echo "<a href='".$onerow['picLoc']."' target='new'>有 </a>"; 
            				else echo "无" 
            				?>
            				</td>
                           
            				<td></td>
            				<td><a href="#" >delete</a></td>
            			
            			</tr>
            			
            			
            			<?php 
            			
            			
            		}
            	}
            	
            
            ?>
            
            
            
        </table>
      
          <div class="submit_link">
					<form action="newmarketingPlan.php" method="post">
						<input type="submit" value="添加营销计划" class="alt_btn"> 
					</form>
			</div>
    </section>
     </article>  
     
     
     </section>
     
     </body>
     </html>