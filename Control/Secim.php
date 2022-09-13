<?php 
 
 
include("../Admin/Control/databaseconnect.php");
$topla;
$sql="SELECT * FROM  party  WHERE PartiName='".$_POST["select"]."'";
 $vote=1;
$sorgu=mysqli_query($conn,$sql);
  while($sonuc=mysqli_fetch_array($sorgu))
  { 
	   $topla=$sonuc["Vote"]+$vote;
	  echo $topla;
  }	
$update="UPDATE party SET Vote ='".$topla."'  WHERE PartiName='".$_POST["select"]."'";
 echo($_POST["select"]);
if(mysqli_query($conn,$update))
{
	$tc=$_COOKIE['tc'];
$sql="Insert Into peoplecheck(tc) values('".$tc."')";
if (mysqli_query($conn, $sql))
{
	 header("Location:../sonuc.php");
	 
}
	
}else{ echo "hata";}


 

?>