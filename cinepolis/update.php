<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
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

$id = $_POST["id"];
$nombre =$_POST["nombre"];
$precio = $_POST["precio"];
$genero =$_POST["genero"];
$sala =$_POST["sala"];

$sql = "UPDATE peliculas SET nombre='$nombre', precio='$precio', genero='$genero', sala='$sala' WHERE id=$id";
echo $sql;
 if ($conexion->query($sql)== TRUE){
 	header("Location:index.php");
}else{
	echo "error";
}
$conexion->close();
?>
</body>
</html>