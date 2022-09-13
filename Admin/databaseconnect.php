 <?php
$servername = "localhost";
$database = "dijitalselection";
$username = "root";
$password = "12345";
ob_start();
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());
}
echo "Connected successfully";
 
function VeriGetir()
{
	
	
}
function Login()
{

 /*
$tc = $_POST['tc'];
$Kullanici = $_POST['Kullanıcı'];
 echo($Kullanici);
 echo($tc);
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
	*/
	echo "merhaba";
}

?>