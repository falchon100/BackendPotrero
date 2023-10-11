<?php
//ejercicio 1
$nombres = [2,4,6,8,10];

foreach ($nombres as $value) {
   print ($value);    
   print('<br>');
}


//Ejercicio 2

$var = ["<br> pedro","ana",34,1];

print('<br>');
print_r($var);


//Ejercicio 3

$variable = [
    "nombre"=>"Pedro",
    "apellido"=>"Torres",
    "direccion"=>"Av Mayor3703",
    "Telefono"=> 1122334455
];
print('<br>');
print_r($variable);


// Ejercicio 4

$ciudades = ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];

$i=0;
foreach ($ciudades as $value) {
 print("La ciudad con el indice $i  tiene el nombre $value <br>"); 
    $i++;
}

// Ejercicio 5

print("<br>");
$ciudades2 = ["MD"=>"Madrid","BCL"=>"Barcelona","LD"=>"Londres","NY"=>"New York","LA"=>"Los Angeles","CCG"=>"Chicago"];
foreach ($ciudades2 as $key => $value) {
    print("La ciudad con el indice $key  tiene el nombre $value <br>"); 
}
?>