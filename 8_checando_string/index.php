<?php

//pode ser declarada tanto com aspas duplas ou simples

if(is_string("felipe gatao")) {
    echo "é uma string 1 <br>";
}

$string = "Felipe o melhor";

if(is_string($string)) {
    echo "$string é uma string 2 <br>";
}

if(is_string('asdasda')) {
    echo "é uma string 3 <br>";
}
?>