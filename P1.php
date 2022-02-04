<?php
$notas = array("Pedro" => 7, "Maria" => 8, "Bienvenido" => 9, "Ramon" => 4, "Carolina" => 6);
asort ($notas);
$keys = array_key_first($notas);
echo "La nota más baja es la de ".$keys ." con un " .$notas[$keys];
echo "<br>";
$keys = array_key_last($notas);
echo "La nota más alta es la de ".$keys ." con un " .$notas[$keys];
echo "<br>";
$size = count($notas);
foreach ($notas as $clave => $valor){
    $suma += $valor;
}
$suma /= $size;
echo "La nota media de la clase es " .$suma;
echo "<br>";
foreach ($notas as $clave => $valor){
    echo "<br>".$clave.": ".$valor;
}