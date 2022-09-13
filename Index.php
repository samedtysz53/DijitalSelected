<!doctype html>
 
<html><!-- InstanceBegin template="/Templates/User.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kontrol paneli</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="../../../Style/bootstrap-4.1.3/css/bootstrap.min.css">
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
		<a class="nav-link" href="../../../Index.php">Anasayfa</a>
		</li>
 
      
      <li class="nav-item">
        <a class="nav-link" href="../../../Sonuc.php">Sonuç sayfası</a>
      
		</li>
    
    </ul>
   
  </div>
</nav>
	</div>
	 
	
	<div><!-- InstanceBeginEditable name="EditRegion3" -->
		
		<div class="w-50 bg-white Top">
	<form method="post" class="form-group" action="Control/UserLogin.php">
		<input type="text" name="tc" class="form-control" placeholder="Tc"><br>
	<input type="text" name="Ad" class="form-control" placeholder="Ad"><br>
	<input type="text" name="Soyad" class="form-control" placeholder="Soyad"><br>
	<input type="text" name="Yıl" class="form-control" placeholder="Doğum yılı"><br>
		<button class="btn btn-success">Mernis ile Giriş</button>
		</form>
		
	</div>
	 
		
		<!-- InstanceEndEditable --></div>
	 
 

</body>
<!-- InstanceEnd --></html>
