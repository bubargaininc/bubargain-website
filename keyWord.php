  <?php
  include_once("session.php");
 
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta charset="utf-8"/>
	<title>布八哥消费者关系营销系统</title>
	
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=297024590" type="text/javascript" charset="utf-8"></script>
	<!--<script src="ajax.js"></script> -->

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
			<p>Daniel Ma (<a href="#">3 SMS</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">社交管理</a> <div class="breadcrumb_divider"></div> <a class="current">商机舆情</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>

<section id="main" class="column">
		
    <article class="module width_3_quarter">
     <header>
             <form method="get">
           
             <input type="text" id="ipsearch" name="q"  value="输入您要搜索的关键词组合" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;"> 
           
             <input type="submit"  value="添加关键词"  />
             <input type="submit"   value="查询"  />
             </form>
     </header>
     
    	<table class="tablesorter">
        	<header>
            	<tr>
                	<th width="10%">自动评论</th>
                	<th>关键词</th>
                    <th>评论内容</th>
                    <th>统计</th>
                    <th>操作</th>
                </tr>
                
               
                
                
                <?php 
				// get data from db
				  include_once("config.php");
				

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
							$sql = " select * from keyword where merchantID =$merchantID " ;
							$result = $conn->query($sql);
							$row = $result->fetchAll();
							if( count($row) > 0 )
							{
								foreach( $row as $onerow )
								{
									// dynamic add table columns
									?>
									<tr>
                                        <td align="center"><input name="checked" type="checkbox"   <?php if($onerow['autoTrack']) echo ("checked=\"checked\"");?> /></td>
                                    	<td align="center"><a href="?q=<?=$onerow['words']?>"  >
										<?=$onerow['words'] ?> </a>
                                        </td>
                                    	<td align="center"><?=$onerow['contentID'] ?></td>
                                        <td align="center"></td>
                                        <td align="center"><input type="submit" value="delete" name="del<?=$onerow['idkeyWord']?>" /></td>
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
    
    <article class="module width_full">
		<wb:livestream skin="silver" publish="n" appkey="297024590" id="wbkeyWord" topic="<?=urlencode($_GET["q"])."|".urlencode($_GET["q"])?>" width="auto" height="700" ></wb:livestream>
	</article>
</section>

</body>
</html>