<?php

require_once 'Conexion.php';

$conexion=Conexion::getInstance();

$query='select * from alumno';

$preparar= $conexion->prepare($query);

$preparar ->execute();

$usuario=$preparar->fetchAll();

for($i=0; count($usuario)>$i; $i++){
    print_r($usuario[$i]);
}


