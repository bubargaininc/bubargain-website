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
	<script src="class/keyWord_autoCheck.js" type="text/javascript" charset="utf-8" ></script>
	

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
					<form action="/class/weiboTrack.class.php" method="post">
						<fieldset>
							<label>添加微博地址</label>
					
							<input name="newWeiboAdd" type="text">
                            <label style=" white-space:nowrap">完整的微博地址链接如：http://weibo.com/1248688065/yrXkf71ms</label>
                            <div class="submit_link">
                            	<input type="submit" value="添加" >
                            </div>
						</fieldset>    
						</form>
                        <fieldset>
                        	<table class="tablesorter" id="TBweibo">
                            	<thead>
                                	<th width="55%">微博内容</th>
                                    <th align="center">发送时间</th>
                                    <th>发送平台</th>
                                    <th>转发数</th>
                                    <th>评论数</th>
                                    <th>操作</th>
                                </thead>
                                
                             
		               <?php 
						// get data from db
						  include_once("config.php");
						  include_once("/class/queryParticipateNo.class.php");
						  include_once ("saetv2.ex.class.php");

						//connect to db
						try {
							$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
							$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
						}
						catch(Exception $e){
							die(var_dump($e));
						}
						
			
						
						if( ! $conn )
						{
							die('注册出现问题，请稍后再试'.mysql_error() );
						}
						else
						{
							$sql = "select * from fetchWeibo where merchantID =". $_SESSION['merchantID'] . " Limit 0,100";
							$result = $conn->query($sql);
							$row = $result->fetchAll();
							$queryRes = queryCommentsAndForwardNumber($row);
						    
							if( count($row) > 0 )
							{
								foreach( $row as $onerow )
								{
									// dynamic add table columns
									?>
									<tr id="tr<?=$onerow['idfetchWeibo']?>">
                                        <td align="center"> <a href="http://weibo.com/<?=$onerow['userID']?>/<?=$onerow['weiboID']?>" target="target="new"><?=$onerow['weiboContent']?></a> </td>
                                    	<td align="center"> <?=$onerow['time']?> </td>
										
                                       
                                    	<td align="center">新浪微博</td>
                                    	 <?php 
                                    	 	$tag = '0';
                                    	 	if($queryRes != false)
                                    	 	{
	                                    		for($i=0; $i<count($queryRes); $i++)
	                                    	 	{
	                                    	 		if($queryRes[$i]['id'] == $onerow['realWeiboID'])
	                                    	 		{
	                                    	 			echo "<td>".$queryRes[$i]['reposts']."</td>"
															 ."<td>".$queryRes[$i]['comments']."</td>";
	                                    	 			$tag = '1';
	                                    	 			break;
	                                    	 		}
	                                    	 	
	                                    	 	}
                                    	 	}
                                    	 	if( $tag == '0')
                                    	 	{
                                    	 		echo "<td></td><td></td>";
                                    	 	}
                                    	 ?>
                                        <td align="center"><input type="submit"  onclick="deleteLine(<?=$onerow['idfetchWeibo']?>)" value="delete"  /></td>
                                    </tr> 
                                   
                                    <?php
									
								}
							}
						}
				
				
				?>
    
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            </table>
                        </fieldset>
                        </div>
                        </article>
                        
    </section>
    
    </body>
    
    </html>