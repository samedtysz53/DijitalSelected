<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	<link rel="stylesheet" href="Style/bootstrap-4.1.3/css/bootstrap.min.css"/>
	<style>
	.Top{
		 margin-top: 5%; 
		 height: 500%;
		 border-radius: 25px;
         border: 2px;
         padding: 20px;
		 width: 75%;
 
		}
	</style>
</head>

<body class="container bg-info">
	<div class="w-50 bg-white Top">
	<form method="post" class="form-group" action="Control/UserLogin.php">
		<input type="text" name="tc" class="form-control" placeholder="Tc"><br>
	<input type="text" name="Ad" class="form-control" placeholder="Ad"><br>
	<input type="text" name="Soyad" class="form-control" placeholder="Soyad"><br>
	<input type="text" name="Yıl" class="form-control" placeholder="Doğum yılı"><br>
		<button class="btn btn-success">Giriş</button>
		</form>
		
	</div>
</body>
</html>