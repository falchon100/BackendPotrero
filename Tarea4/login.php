<?php
//Guardo el usuario y contraseña enviado en el form
$user = $_POST ["user"];
$pass = $_POST ["pass"];

//Variables correctas para login

$userCorrecto = "prueba@gmail.com";
$passCorrecta = "asd123";


if($user == $userCorrecto && $pass == $passCorrecta){
    header("Location: home.html");
    exit;
}else{
    header("location:https://www.figma.com/error");
    exit;
}

?>