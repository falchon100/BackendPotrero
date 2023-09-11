<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*------------ 1. Imprima por pantalla: “Hola mundo”.-------------- */
echo 'hola mundo <br>';


    /*---------- 2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.----------- */
$saludo = "hola mundo";
echo "$saludo <br>";


    /* 3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera. */
$num1 = 4;
$num2 = 2;

print("los numeros elegidos son $num1 y $num2");

$suma = $num1+$num2;
$resta = $num1-$num2;
$multiplicacion = $num1*$num2;
$division = $num1/$num2;
$resto=$num1%$num2;

print("<p> la suma es $suma </p>");
print("<p> la resta es $resta </p>");
print("<p> la multiplicacion es $multiplicacion </p>");
print("<p> la division es $division </p>");
print("<p> el resto es $resto </p>");


/* -----------  4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.-------- */

$Celcius = 20;
$Fahrenheit = ($Celcius*9/5)+32;

print ("<p> $Celcius grados Celcius equivalen a $Fahrenheit grados Fahrenheit</p>");

/* 5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
*/


$base=18;
$altura=12;

$perimetroRectangulo = 2*($base+$altura);
$areaRectangulo = $base * $altura;
print("<p>si la base de un rectangulo es de $base cm y la altura es de $altura cm el perimetro es de $perimetroRectangulo cm </p>");
print("<p>si la base de un rectangulo es de $base cm y la altura es de $altura cm el area del rectangulo es de $areaRectangulo cm</p>");
/* b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.  */

$radio = 30;

$perimetroCirculo = 2 * 3.14159 * $radio; 
$areaCirculo = 3.14159 * ($radio ** 2);

print("<p>el perimetro de un circulo con radio de $radio cm es de $perimetroCirculo cm</p>");
print("<p>el area de un circulo con radio de $radio cm es de $areaCirculo cm</p>")
?>
</body>
</html>