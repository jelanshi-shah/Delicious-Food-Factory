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
mysqli_query($conn,"delete from  registration_table where rid=$i")or die ("Delete Query Fail");
header("location:view_customers.php?fcmsd=1");
?>