
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">

<head>
	<meta charset="utf-8"/>
    </head>

<?php


//数据库新建用户  
  
  
  //数据库新建用户
    include_once("config.php");

	//connect to db
	try {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(var_dump($e));
    }
	
	$pass = md5($_POST["Pass"]);
	if( ! $conn )
	{
		die('注册出现问题，请稍后再试'.mysql_error() );
	}
	else
	{
		
		//mysql_select_db("bubargain_db",$conn);
		
		$sql = " select loginUserName from loginuser where loginusername ='$_POST[userName]' ";
		$result = $conn->query($sql);
		
		$row = $result->fetch($result);
		
		if( $row['loginUserName'] != NULL )
		{
			
			echo ("用户名已被注册，请重新注册");		
			exit;
		}
		
		
		$querySentence = "Insert into loginuser(loginUserName, loginUserPass, email, company ,title, comments,purpose,userName,regtime) value(
		'$_POST[userName]', '$pass', '$_POST[email]', '$_POST[company]', '$_POST[title]', '$_POST[comments]', '$_POST[purpose]', '$_POST[name]', '".date("Y/m/d",time())."')";
		
		if(!$conn->exec($querySentence))
		{
			die('Error:'.mysql_error());
		}
		else
		{
			header("Location: wait.php");
		}
	}
	


//jump to wait page

?>