<?php

try {
    $singleton = new PDO("mysql:dbname=colegio;host=localhost;charset=utf8", "root", "");
}catch (PDOException $e){
    print_r("No se ha conectado a la base de datos");
    die();
}

$id=null;

if(empty($_POST['id'])){
    return print_r(json_encode([
        'succes'=>false,
        'message'=>"Usuario no encontrado",
        'data'=>null
    ]));
}else{
    $id=$_POST['id'];
}

$conn=$singleton->prepare("select * from alumno where id=:id");
$conn->bindParam(':id', $id);
$conn->execute();

$user=$conn->fetch();

if(empty($user)){
    return print_r(json_encode([
        'succes'=>false,
        'message'=>"Usuario no encontrado",
        'data'=>null
    ], JSON_PRETTY_PRINT));
}

$delete=$singleton->prepare("DELETE FROM alumno WHERE id=".$id);
$delete->execute();


return print_r(json_encode([
    'succes'=>true,
    'message'=>"Usuario borrado correctamente",
    'data'=>[
        "nombre"=>$user['nombre'],
        "apellidos"=>$user['apellidos']
    ]
], JSON_PRETTY_PRINT));