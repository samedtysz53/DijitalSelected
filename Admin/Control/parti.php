<?php 
include("databaseconnect.php");
$PartyName=$_POST["PartiName"];
$PartyLeader=$_POST["PartyLeader"];
$vote=0;
 echo("data");

$sql="Insert Into party(PartiName,partyLeaderName,Vote) values('".$PartyName."','".$PartyLeader."','".$vote."')";
if(mysqli_query($conn,$sql))
{
 header("Location:../PartiAdd.php");
}




?>