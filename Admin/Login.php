<?php 
 
include("databaseconnect.php");
ob_start();
if(!isset($_SESSION)) 
    { 
	ini_set('session.cookie_samesite', 'None');
	 
        session_start(); 
    } 
 
$tc = $_POST['tc'];
$Kullanici = $_POST['Kullanıcı'];
 
$sql_check = mysqli_query($conn,"select * from admin where TC='".$tc."' and UserName='".$Kullanici."'") or die(mysqli_error());
 
if($sorgu=mysqli_fetch_array($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["tc"] = $sorgu['TC'];
    $_SESSION["name"] = $sorgu['UserName'];
	
	 
    header("Location:control.php");
}
else {
    if($tc=="" or $Kullanici=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>