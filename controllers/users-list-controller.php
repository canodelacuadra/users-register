<?php
include '../db/conexion-db.php';
$sql = file_get_contents('../sql/users-list.sql');
//var_dump($sql);
$resultado = $conexion->query($sql);
//
if($resultado->num_rows > 0){

    while($fila = $resultado ->fetch_assoc() ){
       $filas[] = $fila;
      
    }


}

include '../views/users-list-vista.php';

$conexion->close();