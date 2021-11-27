<?php

require __DIR__ . '/../vendor/autoload.php';

use Model\Usuario;

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sexo=$_POST['sexo_r'];
$nacimiento=$_POST['nacimiento'];

$user=new Usuario($nombre, $apellido, $contrasena, $telefono, $email, $sexo, $nacimiento);


$file_nombre="usuario.txt";
$file_modo="a+";
//$file_contenido=print_r($user);

$file=fopen($file_nombre, $file_modo);

fwrite($file, $user->toString());

fclose($file);

//echo $user->toString();

echo "<br> Metodo toString=> ".$user->toString();

echo "<br><br>";

echo "JSON: ".$user->toJson();

