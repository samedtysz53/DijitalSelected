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
		
	
	<div><!-- InstanceBeginEditable name="EditRegion3" --><div class="bg-white Top">
		
		<div class="container">
			
			<form class="form-group "  method="post" action="Control/parti.php">
				 
			<input type="text" name="PartiName" class="form-control" placeholder="Parti adı" maxlength="20">
				<br>
			<input type="text" name="PartyLeader" class="form-control" placeholder="Parti Lideri" maxlength="20">
				<br>
				<button class="btn btn-success">Ekle</button>
			</form>
			
			<table class="table">
			<tr>
				<th class="table-secondary">#</th>
				<th class="table-secondary">Parti adı</th>
				<th class="table-secondary">Parti Lideri</th>
				<th class="table-secondary">Oy</th>
			</tr>
		 
				<?php 
					include("Control/databaseconnect.php");
					 $sql="Select * from party";
					 $sorgu=mysqli_query($conn,$sql);
					  while($sonuc=mysqli_fetch_array($sorgu))
							{
							 
							 $PartyN=$sonuc["PartiName"];
							 $LeaderN=$sonuc["partyLeaderName"];
							 $ID=$sonuc["ID"];
							 $Vote=$sonuc["Vote"];
							 
						  echo "<tr>
						  <td>$ID</td>
						  <td>$PartyN</td>
						  <td>$LeaderN</td>
						  <td>$Vote</td>
						 
						  </tr>";
							}
					?>
				
			</table>
			 
		</div>
		</div><!-- InstanceEndEditable --></div>
	 
 

</body>
<!-- InstanceEnd --></html>
