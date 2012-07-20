<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ȩҳ</title>
</head>


<body>
<?php 
include_once( 'config.php' );
//weibo SDK
include_once( 'saetv2.ex.class.php' );


//get authorize if not

	   
		 $c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
	 	 $ms = $c->search_statuses(urlencode('眼镜'),'20');
	 	 $uid_get = $c->get_uid();
	 	 $uid = $uid_get['uid'];
	 	 $user_message = $c->show_user_by_id( $uid);//
	  	 print_r($ms);
?>


</body>

</html>