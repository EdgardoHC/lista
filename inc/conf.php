<?php
$servidor = "localhost";
$usuario = "";
$clave = "";
$nombreBD = "";
$bd = new mysqli($servidor, $usuario, $clave, $nombreBD);


if ($bd->connect_error) {
  die("La conexión ha fallado: " . $bd->connect_error);
}
//echo "ok";
?>
