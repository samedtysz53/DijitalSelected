<!doctype html>
<?php  if (!isset($_SESSION)) { session_start(); }  ?>
<html><!-- InstanceBegin template="/Templates/Templates.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kontrol paneli</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="../Style/bootstrap-4.1.3/css/bootstrap.min.css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
	<style>
		.Menu
		{
			height: 250px;
			
		}
		.Top{margin-top: 5%; 
			height: 500%;
		  border-radius: 25px;
          border: 2px;
          padding: 20px;
 
		}
	</style>
</head>
 
<body class="container bg-info">
	 <div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	 <li class="nav-item active">
		<a class="nav-link" href="Control.php">Anasayfa</a>
		</li>
 
      <li class="nav-item ">
        <a class="nav-link" href="PartiAdd.php">Parti ekle<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Sonuclar.php">Sonuç sayfası</a>
      </li>   
		<li class="nav-item">
        <a class="nav-link" href="PersonelAdd.php">Personel ekle</a>
      </li>
		 
    
    
    </ul>
   
  </div>
</nav>
	</div>
		
	
	<div><!-- InstanceBeginEditable name="EditRegion3" -->
		 
	 
		 
	 <div class="container bg-white rounded-bottom rounded-left rounded-right rounded-top Top">
	    
		<div class="w-25 m-auto"><img class="img-thumbnail" src="../İmage/profile.png"></div>
		 
			 <div class="font-weight-bold"><label>Ad:<?php  echo $_COOKIE['UserName'];?></label></div>
			 <div class="font-weight-bold"><label>Soyad:<?php  echo $_COOKIE['yourname'];?></label></div>
			 <div class="font-weight-bold"><label>TC:<?php  echo $_COOKIE['tc']; ?></label></div>
			 <div class="font-weight-bold"><label>Yetki düzeyi:<?php  echo $_COOKIE['authority']; ?></label></div>
			 
		</div>
		<!-- InstanceEndEditable --></div>
	 
 

</body>
<!-- InstanceEnd --></html>
