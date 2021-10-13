<?php
include 'interfaces/IToJson.php';
include 'models/User.php';

$nombre = $_POST["TextoNombre"];
$apellido = $_POST["TextoApellido"];
$telefono = $_POST["TextoTelefono"];
$email = $_POST["TextoEmail"];
$contrasena = $_POST["TextoContrasena"];
$sexo = $_POST["TextoSexo"];

$user = new User($nombre,$apellido,$telefono,$email,$contrasena,$sexo);

$fichero=fopen("fichero.txt","a");
fwrite($fichero,"---------------------".PHP_EOL);
fwrite($fichero,"Nombre: " .$user->nombre.PHP_EOL);
fwrite($fichero,"Apellido: " .$user->apellido.PHP_EOL);
fwrite($fichero,"Telefono: " .$user->telefono.PHP_EOL);
fwrite($fichero,"Email: " .$user->email.PHP_EOL);
fwrite($fichero,"Contraseña: " .$user->contrasena.PHP_EOL);
fwrite($fichero,"Sexo: " .$user->sexo.PHP_EOL);
fwrite($fichero,"---------------------".PHP_EOL);
fclose($fichero);

echo json_encode($user);

