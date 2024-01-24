<?php

require './conf.php';

$sSQL = "SELECT id, nombre FROM categorias";
$result = $bd->query($sSQL);

$row = $result->fetch_all(MYSQLI_ASSOC);
$dataFinal = [
    'datos' => $row
];
$bd->close();

// Mostrar el resultado:
header('Content-type: application/json; charset=utf-8');
echo json_encode($dataFinal);
exit();
