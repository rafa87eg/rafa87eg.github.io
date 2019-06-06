<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de peliculas</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
</head>
<body>
	<div class="container">
	<div class="row well">
	<div class="col-md-6 col-md-offset-3">
	<form action="guardar.php" method="POST">
	<div class="form-group">
	<label for="nombre">nombre:</label>
	<input type="text" name="nombre" class="form-control">
</div>
<div class="form-group">
	<label for="">precio:</label>
	<input type="text" name="precio" class="form-control">
	</div>
<div class="form-group">
<label for="genero">genero:</label>
<input type="text" name="genero" class="form-control">
</div>
<div class="form-group">
	<label for="sala">sala:</label>
	<input type="text" name="sala" class="form-control">
	</div>
	
</div>
<div class="form-group text-center">
	<input type="submit" name="btn btn-primary" value="Registrar">
</div>
</form>
</div>
</div>
</div>
</body>
</html>