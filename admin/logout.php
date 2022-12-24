<?php
	session_start();

 	if(isset($_SESSION['admin']))
		{
		}
    else{
          header("location: index.php");
        }
	
	$_SESSION['admin']='';
	session_destroy();
	header("location: index.php");
?>