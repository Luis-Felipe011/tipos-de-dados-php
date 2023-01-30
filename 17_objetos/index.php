<?php

class Pessoa {
function falar(){

    echo "Ola pessoal! <br>";
}
}

$felipe = new Pessoa ();

$felipe->nome  = "Felipe";

echo $felipe->nome;

echo "<br>";

$felipe->falar();


?>