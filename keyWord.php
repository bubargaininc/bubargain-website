  <?php
  include_once("session.php");
 
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta charset="utf-8"/>
	<title>布八哥消费者关系营销系统</title>
	<?php 
	include_once( 'config.php' );
	//weibo SDK
	include_once( 'saetv2.ex.class.php' );
	
	 if( !isset($_SESSION['token']))
	 {
	 	header("location: reAuther.php");
	 	
	 }
	
	
	
	
	
	?>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=297024590" type="text/javascript" charset="utf-8"></script>
	<!--<script src="ajax.js"></script> -->
   <script src="class/keyWord_autoCheck.js" type="text/javascript" charset="utf-8" ></script>
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
	$merchantID = 1;
	
?>
<section id="secondary_bar">
		<div class="user">
			<p>Welcome,<?php echo $_SESSION['userName'] ?> !</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">社交管理</a> <div class="breadcrumb_divider"></div> <a class="current">商机舆情</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php

 include_once ("leftNavi.php");

 
 ?>

 
 
<section id="main" class="column">
	<h4 class="alert_info"> 添加您希望关注的关键词，系统会自动收录相关的信息，并将目标用户添加到<strong style="color:red">“进化空间”</strong>
    </h4>



		
    <article class="module width_full">
     <header>
             <form method="post" action="class/keyWord.class.php">
           
             <input type="text" id="ipsearch" name="word"  value="" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" /> 
           
             <input type="submit"  value="添加关键词"  />
             
             </form>
     </header>
     
     <script >
		function reload(id)
		{
			
			window.location.href = "class/keyWord.class.php?del=" + id;
		}
     </script>
     
    	<table class="tablesorter">
        	<header>
            	<tr>
                	<th width="10%">自动评论</th>
                	<th>关键词</th>
                    <th width="40%">评论内容</th>
                    <th width="10%">添加/修改</th>
                    <th>统计</th>
                    <th>操作</th>
                </tr>
                
               
                
                
                <?php 
				// get data from db
				  include_once("config.php");
				

				//connect to db
				try {
					$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
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
							$sql = " select * from view_reply_by_merchantid where merchantID =$merchantID " ;
							$result = $conn->query($sql);
							$row = $result->fetchAll();
							if( count($row) > 0 )
							{
								foreach( $row as $onerow )
								{
									// dynamic add table columns
									?>
									<tr>
                                        <td align="center"><input name="checked" type="checkbox"  onchange="changeAutoCheck('<?=$onerow['idkeyWord']?>','<?=$onerow['autoTrack']?>')" <?php if($onerow['autoTrack']) echo ("checked=\"checked\"");?> /></td>
                                    	<td align="center"><a href="?q=<?=$onerow['words']?>"  >
										<?=$onerow['words'] ?> </a>
                                        </td>
                                       
                                    	<td align="center"><?=$onerow['content'] ?></td>
                                    	<td><input type='submit' onclick="addNewReply('<?=$onerow['idkeyWord']?>')" /></td>
                                        <td align="center"></td>
                                        <td align="center"><input type="submit"  onclick="reload('<?=$onerow['idkeyWord']?>')" value="delete"  /></td>
                                    </tr> 
                                   
                                    <?php
									
								}
							}
						}
				
				
				?>
    
            </header>
        </table>
    </article>



                
                
                
                
                
            
    <div class="clear"></div>
    <div>
    	<?php 
		if( isset($_GET['q']))
		{
	    	$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
	    	$ms = $c->search_statuses(urlencode($_GET['q']),'20');
	    	$uid_get = $c->get_uid();
	    	$uid = $uid_get['uid'];
	    	$user_message = $c->show_user_by_id( $uid);//
	    	print_r($ms);
		}
    	?>
    </div>
  
	
	
</section>

</body>
</html>