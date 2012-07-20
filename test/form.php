<form id="weibo-search">				
				<p class="first-line">
				<strong>关键词:</strong><input class="text-input round3" type="text" name="keyword" id="postKeywords" value="请输入关键词">
				<button type="submit" class="green-btn">搜索</button></p>
				<p id="weibo-sina" style="">
				<span>微博类型：</span>
				<label><input type="radio" name="filter_ori" value="5">原创</label>
				<label><input type="radio" name="filter_ori" value="4">转发</label>
				<label><input type="radio" checked="" name="filter_ori" value="0">不限</label>
				<span>包含图片：</span>
				<label><input type="radio" value="1" name="filter_pic">是</label>
				<label><input type="radio" value="2" name="filter_pic">否</label>
				<label><input type="radio" checked="" value="0" name="filter_pic">不限</label>
				
				<label><span>时间范围</span><select id="starttime" name="starttime">
					<option value="">不限</option>
					<option value="24">1天内</option>
					<option value="72">3天内</option>
					<option value="168">7天内</option>
					</select>
				</label>	
				<span>地域：</span>
				<select preval="" id="province" name="province">
					<option value="">省/直辖市</option>
				<option value="11" rel="0">北京</option><option value="12" rel="1">天津</option><option value="13" rel="2">河北</option><option value="14" rel="3">山西</option><option value="15" rel="4">内蒙古</option><option value="21" rel="5">辽宁</option><option value="22" rel="6">吉林</option><option value="23" rel="7">黑龙江</option><option value="31" rel="8">上海</option><option value="32" rel="9">江苏</option><option value="33" rel="10">浙江</option><option value="34" rel="11">安徽</option><option value="35" rel="12">福建</option><option value="36" rel="13">江西</option><option value="37" rel="14">山东</option><option value="41" rel="15">河南</option><option value="42" rel="16">湖北</option><option value="43" rel="17">湖南</option><option value="44" rel="18">广东</option><option value="45" rel="19">广西</option><option value="46" rel="20">海南</option><option value="50" rel="21">重庆</option><option value="51" rel="22">四川</option><option value="52" rel="23">贵州</option><option value="53" rel="24">云南</option><option value="54" rel="25">西藏</option><option value="61" rel="26">陕西</option><option value="62" rel="27">甘肃</option><option value="63" rel="28">青海</option><option value="64" rel="29">宁夏</option><option value="65" rel="30">新疆</option><option value="71" rel="31">台湾</option><option value="81" rel="32">香港</option><option value="82" rel="33">澳门</option><option value="100" rel="34">其他</option><option value="400" rel="35">海外</option></select>
				<select preval="" id="city" name="city">
				</select>	
				</p>
				<p id="weibo-tencent" style="display: none; ">由于接口限制，暂时不支持条件搜索</p>
			</form>