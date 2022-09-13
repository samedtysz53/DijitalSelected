<?php 

include("databaseconnect.php");
ob_start();
$tc=$_POST['tc'];
$Name=$_POST['user'];
$yourname=$_POST['yourname'];
$authority=$_POST['authority'];
$sql="Insert Into admin(tc,UserName,yourname,authority) values('".$tc."','".$Name."','".$yourname."','".$authority."')";
if (mysqli_query($conn, $sql))
{
	 header("Location:../PersonelAdd.php");
	 
}
else{ echo("hata");}

?>