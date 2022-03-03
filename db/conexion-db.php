<?php
include 'datos-conexion.php';
$conexion =new mysqli($servidor,$usuario,$password,$basedatos);

if($conexion -> connect_error){
    echo 'Ha habido un error en la base de datos...';
}

