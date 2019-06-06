<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "cinepolis";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$nombre =$_POST["nombre"];
$precio = $_POST["precio"];
$genero =$_POST["genero"];
$sala =$_POST["sala"];

$sql = "INSERT INTO peliculas (nombre, precio, genero, sala)
VALUES('$nombre', '$precio', '$genero', '$sala')";

if ($conexion->query($sql) === TRUE){
	header("Location:index.php");
} else {
	echo "Error: " .$sql. "<br>" . $conexion->error;

}

?>