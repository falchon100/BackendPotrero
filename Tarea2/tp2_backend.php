<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$n = 2;



print("el numero elegido fue $n <br><br>" );

if ($n>0 ){
    print('1.es un numero positivo <br><br>');
}else{
    print('PASO EQUIVOCADO <br><br>');
}

if ($n>1 && $n<10){
    print('2.es un numero mayor a 1 y menor a 10 <br><br>');
}else{
    print('PASO EQUIVOCADO <br><br>');
}


if ($n>10 || $n<2){
    print('es un numero mayor a 10 o menor a 2');
}else{
    print('es cualquier otro numero <br>');
}

$numero1= 4;
$numero2= 2;

if($numero1>$numero2){
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    print("la suma es $suma y la esta es $resta ");

}elseif($numero1 == $numero2){
    print("los numeros son iguales");
}

else{
    $multiplicacion = $numero1*$numero2;
    $division =$numero1/$numero2;
    print("la multiplicacion es de $multiplicacion y la divisiones de $division");
}

?>

</body>
</html>




<!-- 1. Crear una variable n y validar que sea un número positivo.
2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”. -->