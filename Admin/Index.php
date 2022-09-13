<!doctype html>
 	
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	<link rel="stylesheet" href="../Style/bootstrap-4.1.3/css/bootstrap.min.css">
	<style>
		.mtop
		{
			margin-top: 25%;
			margin-left: 25%;
			height: 250px;
			width: 50%;
			 
			background: #FFFFFF;
			 
			
		}
	</style>
</head>

<body class="container bg-info">
	 
	 
<div class="mtop form-control">
    
		<form action="Control/Login.php"  method="post" name="LData">
        <label for="fname">TC:</label><br>
        <input type="text" pattern="\d{11}" class="form-control" maxlength="11" id="tc" name="tc"><br>
        <label for="lname">Şifre:</label><br>
        <input type="text" class="form-control" id="Kullanıcı" name="Kullanıcı"><br>
        <button class="btn btn-success" >Giriş</button>
</form>
		 
</div>
	
</body>
</html>