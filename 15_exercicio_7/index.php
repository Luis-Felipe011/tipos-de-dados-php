<?php

$a = ['Marca' => 'Ferrari', 'Modelo' => '458 Italy', 'Cor' => 'Vermelha', 'Quilometragem' => '5000 KM'];

print_r ($a);
echo "<br>";
echo $a['Marca'];
echo "<br>";
echo $a['Modelo'];

$marca = $a ['Marca'];
$quilometragem = $a ['Quilometragem'];
echo "<br>";
echo " O Carro é da marca é da marca $marca e sua quilometagem é de $quilometragem ";

?>