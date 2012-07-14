<?php
   session_start();
   
   if(!isset($_SESSION['userName']))
   {
	   include_once("login.php");
	   exit;
   }
?>