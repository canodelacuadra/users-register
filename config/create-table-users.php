<?php 
include '../db/conexion-db.php';
$sql=file_get_contents('../sql/create-table-users.sql');
$resultado = $conexion->multi_query($sql);
if ($resultado){
    echo 'Aplicacion instalada con éxito';
}else{
    echo 'Ha ocurrido un error...';
}
$conexion->close();

