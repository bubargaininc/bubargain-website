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
			<p>Welcome,<?php echo $_SESSION['userName'] ?> !</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">新消费者培育</a> <div class="breadcrumb_divider"></div> <a class="current">新客户孵化器</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
    <h4 class="alert_info">新客户孵化器中的客户是由布八哥系统帮助您定位到的潜在客户，请珍惜潜在的商机，针对消费者群的偏好订制营销信息。
      <br /> &nbsp; &nbsp;&nbsp; 
      <br /> &nbsp; &nbsp;&nbsp; ※为防止骚扰用户，如用户未形成互动，你将在一个月后才能与其再次互动
      <br /> &nbsp; &nbsp;&nbsp; ※为遵守微博规则，“用户一次点击仅可触发一条微博"！<br /><br />“<strong style="color:red">精准营销，重质不重量，请用心为您的消费者订制营销方案！</strong>”
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
                
    	    	<th>客户群</th>
                
                <th>已接触</th>
                
                <th width="40%">营销策略</th>
                <th>客户响应率</th>
                <th width="100px">营销状态</th>
            </tr>
        </thead>
        
        
        
        <!-- Dynamic draw table -->
        <?php 
        	include_once("config.php");
        	
        	try {
	        	$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
	        	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	        	
        	
        	
        		$sql = "select * from consumertype where merchantID = " . $_SESSION['merchantID'];
        		$stmt = $conn -> query ($sql);
        		$res = $stmt -> fetchAll();
			}			
        	
			catch(Exception $e){
        		die(var_dump($e));
        	}
        
        ?>
        
        <tbody>
             <?php 
             if(isset( $res[0]['typeName']))
             {
             	foreach($res as $onerow)
             	{
             		?>
             		<tr id="tr<?=$onerow['idconsumerType']?>">
             		
             			<td>
             				<label name="label" ><?=$onerow['typeName']?></label>
             			</td>
             			<td>
             				<a href="#" >0</a>
             			</td>
             		    <td>
             		    	<a href = "incubator.php?setplan=<?=$onerow['idconsumerType']?> ">
             		    	<!-- select marketplan name by marketplanId if exsit -->
             		    		<?php 
             		    			if(!isset($onerow['marketPlanID']))
             		    			{
             		    				echo "无";
             		    			}
             		    			else
             		    			{
             		    				$sql2 = "select planName from marketplan where idmarketplan=".$onerow['marketPlanID'];
             		    				$res2 = $conn -> query ($sql2);
             		    				$planName = $res2 -> fetch();
             		    				echo $planName['planName'];
             		    			}
             		    		
             		    		
             		    		?>
             		    	
             		    	
             		    	</a>
             		    </td>
             		    <td>
             		    	
             		    </td>
             		    <td>
                 			<img id="pic2" src="/images/off.png"  onclick="picSwitch(this)" />	              	
             		    </td>
             		    
             		</tr>
             		
             		<?php 
             		
             	}
             }
             
             ?>    
  
       		
            
        </tbody>
        
    </table>
    
     
    </article>
     
      <script>
			function hide()
			{
				document.getElementById('atsetPlan').style.display = 'none';
			}

     </script>
     <?php 
     	if(isset($_REQUEST['setplan']))
     	{
     ?>
     
    
     
     <article class="module  width_half" id="atsetPlan" >
     	<header><h3 style="max-width:70%"> 设置营销策略 </h3>
     	 <a style="float:right; "  href="javascript:hide()" ><img src="images/del.png" /> </a>
     	 </header>
         <form action="incubator.class.php" method="post">
        <fieldset>
            <input name="idconsumertype" style="display:none" value="<?=$_REQUEST['setplan']?>" />
        	<select name="stbindPlan" >  
				<?php 
					
					include_once("class/MarketingPlan.php");
					$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
					$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
					
					$r = new MarketingPlan($conn);
					
					$plan =  $r -> getMarketingPlan($_SESSION['merchantID'],"知识小贴士");
					
					if( $plan != false )
					{
						foreach($plan as $oneplan)
						{
							?>
                            <option value="<?=$oneplan['idmarketplan'] ?>" > <?=$oneplan['planName'] ?></option>
                            
                            
                            <?php
						}
					}
				 ?>            
             </select>
             <div class="submit_link">
					
					<input type="submit" value="设置" class="alt_btn">
					
				</div>
        </fieldset>
        </form>
     </article>
     <?php }?>
  


</section>




</body>

</html>