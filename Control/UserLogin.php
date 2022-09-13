<?php  
$tc=$_POST["tc"];
$Name=$_POST["Ad"];
$SurName=$_POST["Soyad"];
$Year=$_POST["Yıl"];

 
$client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
try
{
	$result=$client->TCKimlikNoDogrula([
		
		'TCKimlikNo' => $tc,
        'Ad' => $Name,
        'Soyad' => $SurName,
        'DogumYili' => $Year
	]);
	if ($result->TCKimlikNoDogrulaResult) {
		
		  setcookie('tc', $tc, time() + (86400 * 30), "/"); // 86400 = 1 day
         setcookie('UserName', $Name, time() + (86400 * 30), "/"); // 86400 = 1 day
       header("Location:../SecimYap.php");
    } else {
       header("Location:../Index.php");
    }
}
catch (Exception $e) {
    echo $e->faultstring;
}
 

?>