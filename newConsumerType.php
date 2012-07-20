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
			<p>Welcome,<?php echo $_SESSION['userName'] ?> !</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">控制面板</a><div class="breadcrumb_divider"></div><a class="current">新消费者培育</a> <div class="breadcrumb_divider"></div> <a class="current">添加消费者类型</a></article>
		</div>
	</section><!-- end of secondary bar -->
    
 <?php include_once ("leftNavi.php"); ?>



<section id="main" class="column">
    <h4 class="alert_info">在此页面中，你可以添加新的目标客户群体.  请尽可能详尽地填写以下信息，使系统能够更加准确的帮助您定位潜在消费者。</h4>
	
    <article class="module width_3_quarter">
    <header><h3 class="tabs_involved">添加新目标客户群
    </h3>
    </header>
    <table class="tablesorter" cellspacing="0">
    	
        <tr >
           <td nowrap="nowrap" width="20%">
           			<label >客户群命名:</label> 
           </td>
           <td width="45%" >
           		<input type="text" name="title" />
           </td>
           <td width="35%">
           		<label><strong style="color:red">*</strong> 请给该分类添加一个容易识别的名称，以供查看 </label>
           </td>      
        </tr> 
      <tr>  <!-- gender -->
        	  <td>
           			<label >性别:</label> 
        </td>
               <td>
                
                       <label>
                         <input type="radio" name="GenderGroup" value="male" id="GenderGroup_0" />
                         男</label>
                       <label>
                         <input type="radio" name="GenderGroup" value="female" id="GenderGroup_1" />
                         女</label>
                    </td>
               <td>
                    
               </td> 
      </tr>
      
      <!-- location -->
       <tr>  
        	  <td>
           			<label >位置:</label> 
        </td>
               <td>
                
                     <label > 国家： </label>
                     <select>
                     	<option value="china" >中国 </option>
                        <option value="other" >其他 </option>
                     </select>
                    
                      <label > 省份： </label> <select></select>
                    
                    <label> 城市：</label>  <select></select>
                    
                     <br />
                     <label> 县区：</label>  <select></select>
                     <label> 地址：</label>  <input type="text" />
               </td>
               <td>
                    
               </td> 
      </tr>
      
      <tr>  <!-- age -->
        	  <td>
           			<label >年龄段:</label> 
        </td>
               <td>
                
                       <select name="age">
                       	 <option value="0">小于10岁</option>
                         <option value="10">10</option>
                         <option value="18">18</option>
                         <option value="28">28</option>
                         <option value="38">38</option>
                         <option value="48">48</option>
                         <option value="58">58</option>
                         <option value="100">高于58岁</option>
                       </select>
                       到
                            <select name="age">
                       	 <option value="0">小于10岁</option>
                         <option value="10">10</option>
                         <option value="18">18</option>
                         <option value="28">28</option>
                         <option value="38">38</option>
                         <option value="48">48</option>
                         <option value="58">58</option>
                         <option value="100" selected="selected">高于58岁</option>
                       </select>
                    </td>
               <td>
                    
               </td> 
      </tr>
      
      <tr>  <!-- education -->
        	  <td>
           			<label >学历:</label> 
        </td>
               <td>
                
                       <select name="edu">
							<option value="primary"> 小学</option>
                            <option value="middle"> 中学</option>
                            <option value="high"> 高中</option>
                            <option value="unvi"> 本科</option>
                            <option value="grad"> 研究生</option>
                            <option value="post"> 博士</option>
                       </select>
                    </td>
               <td>
                    
               </td> 
      </tr>
      
      <tr>  <!-- school -->
        	  <td>
           			<label >学校:</label> 
        </td>
               <td>
                
                     <input type="text" name="school" />
                    </td>
               <td>
                    
               </td> 
      </tr>
      
      <tr>  <!-- career -->
        	  <td>
           			<label >职业:</label> 
        </td>
               <td>
                
                      <input type="text" name="career"  />
                    </td>
               <td>
                    <label> 暂时不支持分类选择 </label>
               </td> 
      </tr>
      
      <!--company -->
       <tr>  
        	  <td>
           			<label >公司:</label> 
        </td>
               <td>
                
                       <input type="text" name="company" />
                    </td>
               <td>
                    
               </td> 
      </tr>
      
         <!--tag -->
       <tr>  
        	  <td>
           			<label >标签:</label> 
        </td>
               <td>
                
                       <label  style="border:1px; border-color:black;color:red"> 动态添加标签插件</label>
                    </td>
               <td>
                    
               </td> 
      </tr>
      
       <!-- other -->
       <tr>  
        	  <td>
           			<label >其他描述:</label> 
        </td>
               <td>
                
                      <textarea name="describe"  rows="3"></textarea>
                    </td>
               <td>
                    <p><strong sytle="color:red">*</strong>其他对目标客户群的补充</p>
               </td> 
      </tr>
      
    </table>
    
    <div class="submit_link">
					
					<input type="submit" value="提交" class="alt_btn"> 
					<input type="submit" value="重置">
				</div>
    
</article>
	</section>


</body>
</html>