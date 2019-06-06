<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php 
$server= "localhost";
$username = "root";
$pass = "";
$db = "cinepolis";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
} 
$id_peli = $_GET['id'];
$sql = "SELECT * FROM peliculas WHERE id=$id_peli LIMIT 1";
$peli = $conexion->query($sql)->fetch_object();
?>

<div class="container">
<div class="row well">
<div class="col-md-6 col-md-offset-3">
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id_peli; ?>">

<div class="form-group">
<label for="nombre">nombre:</label>
<input type="text" name="nombre" class="form-control"
value="<?php echo $peli->nombre; ?>">

</div>
<div class="form-group">
<label for="precio">precio:</label>
<input type="text" name="precio" class="form-control" 
value="<?php echo $peli->precio; ?>">
</div>
<div class="form-group">
<label for="genero">genero:</label>
<input type="text" name="genero" class="form-control" 
value="<?php echo $peli->genero; ?>">
</div>
<div class="form-group">
  <label for="sala">sala:</label>
<input type="text" name="sala" class="form-control" 
value="<?php echo $peli->sala; ?>">

</div>
<div class="form-group text-center">
<input type="submit" name="btn btn-primary" value="Guardar">
</div>
</form>
</div>
</div>
</div>

</body>
</html>