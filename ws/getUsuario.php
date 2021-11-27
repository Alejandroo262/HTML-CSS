<?php


try {
    $singleton = new PDO("mysql:dbname=colegio;host=localhost;charset=utf8", "root", "");
} catch (PDOException $e) {
    print_r("No se ha conectado a la base de datos");
    die();
}

$id = null;
$query = "select * from alumno";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query .= " where id=:id";
}

$conn = $singleton->prepare($query);
$conn->bindParam(':id', $id);
$conn->execute();

$user = $conn->fetchAll();

$output = [];

for ($i = 0; count($user) > $i; $i++) {
    $output['nombre'][] = $user[$i]['nombre'];
}

for ($i = 0; count($user) > $i; $i++) {
    $output['apellido'][] = $user[$i]['apellidos'];
}

$data = [];
$contador=0;
foreach ($user as $currentUser) {
    $data[] = [
        "id"=> $contador,
        "nombre" => $currentUser['nombre'],
        "apellido" => $currentUser['apellidos'],
        "telefono" => $currentUser['telefono'],
        "email" => $currentUser['email'],
        "sexo" => $currentUser['sexo']
    ];
    $contador++;
}

if (count($user) == 0) {
    return print_r(json_encode([
        'succes' => false,
        'message' => "Usuario no encontrado",
        'data' => null
    ], JSON_PRETTY_PRINT));

} elseif (count($user) >= 1) {
    return print_r(json_encode([
        'succes' => true,
        'message' => "usuarios obtenidos correctamente",
        "data" => $data
    ], JSON_PRETTY_PRINT));
}
/*
echo json_encode([
    'succes' => true,
    'message' => "usuarios obtenidos correctamente",
    "data" => [
        "id"=> 12345,
        "Nombre" => '',
        "Apellido" => '',
        "Telefono" => 'telefono',
        "Email" => 'email',
        "Sexo" => 'sexo',
    ]
]);*/