<?php
session_start();
if(isset($_SESSION['admin'])=="")
{
	header("location:index.php?m2=2");
	exit(0);	
}
include("connection.php");
$i=$_REQUEST['did'];

$conn = openCon();
mysqli_query($conn,"delete from foodcategory_management where f_id=$i")or die ("Delete Query Fail");
header("location:view_menu_cat.php?fcmsd=1");
?>