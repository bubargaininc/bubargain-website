
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>weibo login</title>
</head>

<script src="http://tjs.sjs.sinajs.cn/t35/apps/opent/js/frames/client.js" language="JavaScript"></script>

<?php 

//get authorize if not

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY  );
$code_url = $o->getAuthorizeURL( CANVAS_PAGE );


?>

<script> 
function authLoad(){
 
	App.AuthDialog.show({
	client_id : '<?=WB_AKEY;?>',   
	redirect_uri : '<?=CANVAS_PAGE;?>',    
	height: 150   
	});
}
</script>
 
<body style="width:700px;height:1000px;"  >
	<a href="<?=$code_url?>"><img src="images/weibo_logo.png" title="点击进入授权页面" alt="点击进入授权页面" border="0" width="250" height="40" ></img>
</body>
</html>

