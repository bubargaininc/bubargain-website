
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">

<head>
	<meta charset="utf-8"/>
    </head>

<?php


//数据库新建用户  
  
  
  

	$con = mysql_connect('localhost','root','root');

	$pass = md5($_POST["Pass"]);
	if( ! $con )
	{
		die('注册出现问题，请稍后再试'.mysql_error() );
	}
	else
	{
		
		mysql_select_db("bubargain_db",$con);
		
		$sql = " select loginUserName from loginuser where loginusername ='$_POST[userName]' ";
		$result = mysql_query($sql,$con);
		
		$row = mysql_fetch_array($result);
		
		if( $row['loginUserName'] != NULL )
		{
			
			echo ("用户名已被注册，请重新注册");		
			exit;
		}
		
		
		$querySentence = "Insert into loginuser(loginUserName, loginUserPass, email, company ,title, comments,purpose,userName,regtime) value(
		'$_POST[userName]', '$pass', '$_POST[email]', '$_POST[company]', '$_POST[title]', '$_POST[comments]', '$_POST[purpose]', '$_POST[name]', '".date("Y/m/d",time())."')";
		
		if(!mysql_query($querySentence,$con))
		{
			die('Error:'.mysql_error());
		}
		else
		{
			header("Location: wait.php");
		}
	}
	mysql_close($con);


//jump to wait page

?>