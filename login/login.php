<?php
$usuario = $_POST ['user'];
$contrasenia = $_POST ["password"];

$miuser = "angel";
$mipass = "san luis";

if ($usuario === $miuser && $contrasenia === $mipass){
    print 'correcto';
}else{
    echo 'Contraseña erronea';
}



?>