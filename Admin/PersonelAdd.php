<!doctype html>
 
<html><!-- InstanceBegin template="/Templates/Templates.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kontrol paneli</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="../../../../Style/bootstrap-4.1.3/css/bootstrap.min.css">
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom rounded-left rounded-right rounded-top">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	 <li class="nav-item active">
		<a class="nav-link" href="../../../../Admin/Control.php">Anasayfa</a>
		</li>
 
      <li class="nav-item ">
        <a class="nav-link" href="../../../../Admin/PartiAdd.php">Parti ekle<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../../../Admin/Sonuclar.php">Sonuç sayfası</a>
      </li>   
		<li class="nav-item">
        <a class="nav-link" href="../../../../Admin/PersonelAdd.php">Personel ekle</a>
      </li>
		 	<li class="nav-item">
        <a class="nav-link btn btn-danger text-white" href="../../../../Index.php">Çıkış yap</a>
      </li>
    
    
    </ul>
   
  </div>
</nav>
	</div>
		
	
	<div><!-- InstanceBeginEditable name="EditRegion3" -->
		
		<div class=" bg-white Top">
		<form class="form-group" method="post" action="Control/AdminAdd.php">
		 
			<input type="text" pattern="\d{11}" class="form-control" placeholder="TC" name="tc" maxlength="11"> <br>
			<input type="text" class="form-control" placeholder="Kullanıcı adı" name="user"> <br>
			 
			<input type="text" class="form-control" placeholder="Kullanıcı Soyadı" name="yourname"><br>
			<input type="text" class="form-control" placeholder="Yetki" name="authority"> <br>
			 
			<button class="btn btn-success">Kaydet</button>
			 
			
			</form>
			
		
		</div>
		<div class="Top bg-white">
		
			<table class="table">
			<tr>
			<th class="table-secondary">TC</th>	
			<th class="table-secondary">Ad</th>	
			<th class="table-secondary">Soyad</th>	
			<th class="table-secondary">Yetki</th>	
			</tr>
				 
				<?php 
					include("Control/databaseconnect.php");
					 $sql="Select * from admin";
					 $sorgu=mysqli_query($conn,$sql);
					  while($sonuc=mysqli_fetch_array($sorgu))
							{
							 
							 $tc=$sonuc["tc"];
							 $UserName=$sonuc["UserName"];
							 $yourname=$sonuc["yourname"];
							 $authority=$sonuc["authority"];
						  echo "<tr>
						  <td>$tc</td>
						  <td>$UserName</td>
						  <td>$yourname</td>
						  <td>$authority</td>
						  </tr>";
							}
					?>
				 
			</table>
		
		</div>
		
		<!-- InstanceEndEditable --></div>
	 
 

</body>
<!-- InstanceEnd --></html>
