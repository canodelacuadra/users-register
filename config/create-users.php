<?php 
include '../db/conexion-db.php';
$sql=file_get_contents('../sql/create-users.sql');
$resultado = $conexion->multi_query($sql);
if ($resultado){
    echo 'Usuarios agregados con éxito ';
}else{
    echo 'Ha ocurrido un error... ';
}
echo '<br>';
