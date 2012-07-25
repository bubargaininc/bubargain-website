<?php
		session_start();
		header('Content-Type: text/html; charset=UTF-8');
		include_once( 'config.php' );
		include_once( 'saetv2.ex.class.php' );
		
		$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );
		
		$token ='';
		
		if (isset($_REQUEST['code'])) {
			$keys = array();
			$keys['code'] = $_REQUEST['code'];
			
			$keys['redirect_uri'] = CANVAS_PAGE;
			try {
				$token = $o->getAccessToken( 'code', $keys ) ;
				//print_r($token);
			} catch (OAuthException $e) {
			}
		} 
		
		if ($token) {
			$_SESSION['token'] = $token;
			
			echo "<script>window.location =\"index.php\";</script>";
			
		}
	
?>


