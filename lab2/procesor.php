<?php

function dodaj($x,$y){
    return $x+$y;
}
function odejmij($x, $y){
    return $x-$y;
}
function pomnoz($x, $y){
    return $x*$y;
}
function podziel($x, $y){
    return $x/$y;
}
function pierwiastek($x){
    return sqrt($x);
}

/*Zmodyfikuj rozwiązanie z 
poprzedniego zadania wprowadzając klasę Procesor z funkcjami statycznymi.
*/

class Procesor{

static function dodaj($x,$y){
    return $x+$y;
}
static function odejmij($x, $y){
    return $x-$y;
}
static function pomnoz($x, $y){
    return $x*$y;
}
static function podziel($x, $y){
    return $x/$y;
}
static function pierwiastek($x){
    return sqrt($x);
}
}

?>