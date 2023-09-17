<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


/* Crear una variable n y validar que sea un número positivo. */
$n = 2;

print("el numero elegido fue $n <br><br>" );

if ($n>0 ){
    print("$n es un numero positivo <br><br>");
}else{
    print("$n no un numero positivo <br><br>");
}

/* Crear una variable n y validar que sea un número mayor a 1 y menor a 10 */
$n2 = 3 ;
print("_______________________________<br><br>" );

print("el numero elegido fue $n2 <br><br>" );

if ($n2>1 && $n2<10){
    print("$n2 es un numero mayor a 1 y menor a 10 <br><br>");
}else{
    print("$n2 no es un numero mayor a 1 y menor a 10 <br><br>");
}
print("_______________________________<br><br>" );

/* Crear una variable n y validar que sea un número mayor a 10 o menor a 2. */
$n3 = 4;
print("el numero elegido fue $n3 <br><br>" );

if ($n3>10 || $n3<2){
    print(" $n3 es un numero mayor a 10 o menor a 2 <br>");
}else{
    print("$n3 no es un numero mayor a 10 ni menor a 2<br>");
}
print("_______________________________<br><br>" );

/* Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales” */

$numero1= 4;
$numero2= 2;
print("el primer numero elegido fue $numero1 <br><br>" );
print("el segundo numero elegido fue $numero2 <br><br>" );
if($numero1>$numero2){
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    print("la suma es $suma y la resta es $resta ");

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




