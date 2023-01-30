<?php

$arr = ['Nome' => 'Felipe', 'Idade' => 18, 'Altura' => 1.80];
print_r ($arr);
echo "<br>";

//desafio

$idade = $arr ['Idade'];

if ($idade >= 18 ) {
    echo "O usuário é maior de idade <br>";
}

if ($idade < 18 ) {
    echo "O usuário é menor de idade <br>";
}


?>