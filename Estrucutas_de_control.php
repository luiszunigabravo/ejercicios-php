<?php

$edad = 20;
$opcion = 2;
$opcion2=10;
$numeros = [1,2,3,4,5];
$numeros2= [6,7,8,9,10];

if ($edad < 18) {
    echo "juanita es menor de edad";
} elseif ($edad == 18) {
    echo "juanita tiene 18";
} else {
    echo "juanita es mayor de edad";
}

echo "<br/>";
echo "<br/>";
switch ($opcion) {
    case 1:
        echo "escogiste opcion 1";
        break;
    case 2:
        echo "escogiste opcion 2";
        break;
    case 3:
        echo "escogiste opcion 3";
        break;
}

echo "<br/>";
echo "<br/>";

for ($i=1; $i<6; $i++){
   

    echo $i . "<br />";  // para que realice un salto de linea entre cada iteracion
    
}

echo "<br/>";
echo "<br/>";

while ($opcion2 ==10){ // mientras opcion 2 sea = 10, el ciclo continua
    echo "este ciclo no acaba hasta que llegue a 10";
    $opcion2++;
}

echo "<br/>";
echo "<br/>";

//Nos deja crear un ciclo que terminará cuando la condición no consiga más datos, hay que recalcar que este solo funciona con Arrays o Objetos. Ejemplo:


foreach ($numeros as $indice =>$valor){  // nombre del array, luego imprime el indice y el valor
    echo "{$indice} =>{$valor}";
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";

foreach ($numeros2 as $valor2){  // nombre del array, luego el valor
    echo "{$valor2}";
    echo "<br/>";
}