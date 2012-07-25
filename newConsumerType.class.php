

<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
include_once ("config.php");


if( isset( $_REQUEST['title'] ))
{
	$consumerType = $_REQUEST['title'];
		print_r($consumerType);
		if(isset($_REQUEST['GenderGroup']))
			$gender = $_REQUEST['GenderGroup'];
		else
			$gender = 'both';
		print_r($gender);
	$province = $_REQUEST['lz_sf'];
		print_r($province);
	$city = $_REQUEST['lz_sx'];
		print_r($city);
	$loc =    $_REQUEST['location'];

	$startAge = $_REQUEST['age1'];
		print_r($startAge);
	$endAge   = $_REQUEST['age2'];
		print_r($endAge);
	$edu      = $_REQUEST['edu'];
		print_r($edu);
	$Tag      = $_REQUEST['liContent'];
	    print_r($Tag);
	$describe = $_REQUEST['describe'];
	
	// insert into database
		try {
 		
       $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8';"));
  	 	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    	}
   		 catch(Exception $e){
        	die(var_dump($e));
   	 	}
   	 	try
   	 	{
	   	 	$sql = "insert into consumertype(typeName,userGender,province,city,location,startAge,endAge,education,tags,description,merchantID)"
	   	 			." values ('$consumerType','$gender','$province','$city','$loc','$startAge','$endAge','$edu','$Tag','$describe','".$_SESSION['merchantID']."')";
	   	 	$stmt = $conn -> exec($sql);
	   	 	header ("location: incubator.php");
   	 	}
   	 	catch(Exception $e)
   	 	{
   	 		//header ("location: 404.php");
   	 		var_dump($e->getMessage());
   	 	}
}

