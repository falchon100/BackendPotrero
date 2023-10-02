<?php

//1. Mostrar los números del 1 al 100.
$i=1;
print "mostrando numeros del 1 al 100 <br>";
while ($i <= 100) {
   
 print "$i <br> ";
 $i++;
}


//2. Mostrar los números del 100 al 1.
$in =100;
print "mostrando numeros del 100 al 1 <br>";
while ($in >= 1){
    print "$in <br>";
    $in--;
}

//3. Mostrar los números pares del 1 al 100.

$ind = 1;
print "mostrando los numeros pares del 1 al 100<br>";
while($ind <= 100){
    if ($ind % 2 == 0){
        print "$ind <br>";
    }
    $ind++;
}


//4. Mostrar los números impares del 1 al 100.
$inde =1;

print "mostrando los numeros impares  del 1 al 100<br>";
while($inde <= 100){
    if ($inde % 2 !== 0){
        print "$inde <br>";
    }
    $inde++;
}


//5. Mostrar la suma de los números de 1 a 20
$sum=  0;
print "mostrando la suma de los numeros del 1 al 20<br>";
for ($i=1; $i <= 20; $i++) { 
    $sum = $sum + $i;
  print  "$sum <br>";
}


//6. Mostrar la suma de números pares de 1 a 20

$suma = 0;
print "mostrando la suma de los numeros pares del 1 al 20 <br>";
for ($in=1; $in <= 20; $in++) { 
    if($in%2 === 0){
        $suma = $suma + $in;
        print  "$suma <br>";
    }
 
}


?>