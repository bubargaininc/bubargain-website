<?php
   include_once("session.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8"/>
	<title>布八哥消费者关系营销系统</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/addon.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php include_once ("js/layout.js");  ?>   <!-- include layout code -->
    
	
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
    
 <?php include_once ("leftNavi.php");include_once("js/city.js"); ?>


	<SCRIPT LANGUAGE = JavaScript>

	
	var s=["s1","s2"]; 
	var opt0 = ["请选择","请选择"]; 
	function setup() 
	{ 
	for(i=0;i<s.length-1;i++) 
	document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")"); 
	change(0); 
	} 
	
	</SCRIPT>


<section id="main" class="column">
    <h4 class="alert_info">在此页面中，你可以添加新的目标客户群体。<br/>  请尽可能详尽地填写以下信息，使系统能够更加准确的帮助您定位潜在消费者。</h4>
	
    <article class="module width_3_quarter">
    <header><h3 class="tabs_involved">添加新目标客户群
    </h3>
    </header>
    <form action="newConsumerType.class.php" method="post">
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
                      	    <label>
                         <input type="radio" name="GenderGroup" checked="checked" value="both" id="GenderGroup_2" />
                      	  两者均可</label>
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
                
                     
                    <select name="lz_sf" id="s1">
                    <option></option></select> 
                    <select name="lz_sx" id="s2">
                    <option></option></select>
                       <SCRIPT language="javascript"> 
                       setup() 
                       </SCRIPT>
                       <br/>
                     <label> 详细地址：</label>  <input name="location" type="text" />
               </td>
               <td>
                    
               </td> 
      </tr>
      
      <tr>  <!-- age -->
        	  <td>
           			<label >年龄段:</label> 
        </td>
               <td>
                
                       <select name="age1">
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
                            <select name="age2">
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
      
      
         <!--tag -->
       <tr>  
        	  <td>
           			<label >标签:</label> 
        </td>
               		<td>
                    <script language="javascript" type="text/javascript">
                   		function addNewTag()
						{
							if(document.getElementById("tag_input").value != '')
							{
								for( var i=1; i< 6; i++)
								{
									var name = "li"+i;
									
									if(!document.getElementById(name))
									{
										var ivalue = document.getElementById("tag_input").value
										var innerHTML = "<li node-type='li'   title='推荐'>"
										innerHTML +=    " <input type='text'id ='"+ name +"' style='display:none' name='"+ name +"' value='"+ ivalue +"' />"
										innerHTML +=    "<a class='a1'   node-type='text'>" + ivalue +"</a>"
										innerHTML +=    "<a class='a2' node-type='del' title='删除标签' onclick=\"delTagContent("+i+")\"   href='#' >"
										innerHTML +=    "<img src='images/del.png'  onmouseout=\"this.src='images/del.png'\" onmouseover=\"this.src='images/del_over.png'\"></a></li>"
										document.getElementById("tag_list").innerHTML += innerHTML ;
										break;
									}
								}
							}
							setHidden();
						}
						
						function delTagContent(id)
						{
							var name = "li" + id;
							var obj = document.getElementById(name);
								 obj.parentNode.removeChild(obj);
							
						}

						function setHidden()
						{
							var value="";
							for( var i =1; i <6 ;i++)
							{
								var name ="li"+i;
								
								
								if(document.getElementById(name))
								{
									
									value += document.getElementById(name).value+"|";
									
								}
							}
							  
								document.getElementById('liContent').value = value;
								
						}
						
						
                    </script>
                          <input type="text" style="display:none" id="liContent" name="liContent"  value=""/>
                         
                		  <div class="setupTag_box">
                                <div class="setupTag_boxL">
                                <div class="setupTag_input">
                            <input type="text" class="setupTag_txt" id="tag_input" value="" style=""><a id="add_tag" href="#" onclick="addNewTag()" class="btn_normal"><em>添加标签</em></a>
                          </div>
                          <div class="error_color" id="tip_or_error" style="display:none">含有非法字符，请修改</div>
                                  <div id="mytagshow2" class="setupTag_list02" style="">
                                    <ul id="tag_list" class="tagList">
                                       
                                        
                                        
                                    </ul>
                                   
                                    <div class="clear"></div>
                                    </div>
                      
                    </td>
               <td>
                    <p> <strong>关于标签：</strong>
                          <br/> ·标签是自定义描述职业、兴趣爱好的关键词，通过标签可以更加准确的找到目标消费者。
                          <br/> ·最多可添加5个标签。</p>
               </td> 
      </tr>
      
       <!-- other -->
       <tr>  
        	  <td>
           			<label >其他描述:</label> 
        </td>
               <td>
                
                      <textarea name="describe" rows="4" cols="50"></textarea>
                    </td>
               <td>
                    
               </td> 
      </tr>
      
    </table>
    
    <div class="submit_link">
					
					<input type="submit" value="提交" class="alt_btn"> 
					<input type="reset" value="重置">
				</div>
	</form>		
     <div class="clear" ></div>
    
</article>
	</section>


</body>
</html>