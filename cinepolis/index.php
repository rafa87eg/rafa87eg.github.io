<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cinepolis</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>

</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">


            <a class="navbar-brand" href="#"></a>
      <ul class="nav navbar-nav" style="margin-left: 235px">
        

                <li><a href="#"><a class="navbar-brand" >
        <img src="cinepolisbarra.png" style="margin-top: -40px" height="60px" width="200px">
      </a></a></li>

        
      
        <li><a href="#">  <select name="" id="" class="form-control">
      <option value="0" selected="">Seleccione Una Ciudad</option>
        <option value="">Culiacan</option>
        <option value="">Mazatlán</option>
        <option value="">Los Mochis</option>
        <option value="">CDMX</option>
        <option value="">Guadalajara</option>
        <option value="">Tijuana</option>
      </select></a></li>
      <li><a href="#"><select name="" id="" class="form-control">
        <option value="0" selected="">Seleccione Un Cine</option>
        <option value="">Centro</option>
        <option value="">Norte</option>
        <option value="">Este</option>
        <option value="">Sur</option>
        <option value="">Oeste</option>
        <option value="">Plaza Cinepolis</option>
    </select></a></li>
       <li><a href="http://www.cinepolis.com/cartelera/cdmx-norte/" ><button type="submit" class="btn btn-default" style="background: rgba(240, 218, 30  ); color: black">VER CARTELERA</button> </a></li>

       
      </ul>
  </nav>
  <div style="margin-left: 480px">
  <a  class="btn btn-primary" role="button" style="background: rgb(240, 218, 30 ); color:  black ">MENU</a>
  <a  href="index3.html" class="btn btn-primary" role="button" style="background:  rgb(240, 218, 30 ); color: black">PROXIMOS ESTRENOS</a>  
  <a  href="https://cinepolis.com/preventas" class="btn btn-primary" role="button" style="background:  rgb(240, 218, 30 ); color: black">PREVENTAS</a>     
</div>
  <p></p>
     <?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "cinepolis";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$sql="SELECT * FROM peliculas";
$data= $conexion->query($sql);
echo '<table class="table table-hover" style="background-color: black; margin-top: 100px">';
echo '<thead>';
echo '<tr>';
echo '<th><a class="btn btn-xs btn-primary" href="registro.php">Agregar</a></th>';
echo '<th>Nombre</th>';
echo '<th>Precio</th>';
echo '<th>Genero</th>';
echo '<th>Sala</th>';
echo '<th>ID</th>';
echo '</tr>';
echo '</thead';
echo '<tbody> ';
while ($obj=$data->fetch_object()) {
echo '<tr><td><a class="btn btn-xs btn-primary" href="editarPeli.php?id='.$obj->id.'">Editar</a><a class="btn btn-xs btn-primary"style="margin-left:20px;"  href="eliminar.php?id='.$obj->id.'">Eliminar</a></td>';
echo '<td>'.$obj->nombre.'</td>';
echo '<td>'.$obj->precio.'</td>';
echo '<td>'.$obj->genero.'</td>'; 
echo '<td>'.$obj->sala.'</td>';
echo '<td>'.$obj->id.'</td></tr>';


} echo '</tbody> </table>'
?>




<script src="js/bootstrap.js"></script>
</body>
</html>