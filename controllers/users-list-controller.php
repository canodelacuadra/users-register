<?php
include '../db/conexion-db.php';
$sql = file_get_contents('../sql/users-list.sql');

$resultado = $conexion->query($sql);
//echo $resultado->num_rows;

while($fila = $resultado ->fetch_assoc() ){
    $filas[] = $fila;
}

include '../views/users-list-vista.php';

//$conexion->close();