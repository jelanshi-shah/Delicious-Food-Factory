<?php
session_start();
if(isset($_SESSION['user'])=="") 
{
	header("location:login.php?msg=stop");
	exit();
}
	
	$_SESSION['user']='';
	session_destroy();
	header("location: login.php?m2=2");
?>