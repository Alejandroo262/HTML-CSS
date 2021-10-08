<?php
include 'interfaces/IToJson.php';
include 'models/User.php';

$user = new User("alejandro", "baeza", 644378389,
    "alejandrobaeza02@hotmail.com", 02062002, "hombre");

echo $user->toJson();
