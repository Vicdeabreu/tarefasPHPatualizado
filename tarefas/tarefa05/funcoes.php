<?php 

//--------------- Ejercicio 1.A ------- //

 function eMaior($a, $b, $c) {
    $funcoesExecutadas;
    if($a > $b && $a > $c) {
        return $a;
    } elseif ($b > $a && $b > $c) {
        return $b;
    } else {
        return $c;
    }
} 

//----------------- Ejercicio 1.B --------------//


function tabela($numeroMinimo, $numeroMaximo) {
    $funcoesExecutadas; 
    if ($numeroMinimo < $numeroMaximo) {
    $arr = [];
    for($i = $numeroMinimo; $i <= $numeroMaximo; $i++) {
    array_push($arr,$i);
    } 
    } else {
        return "o $numeroMinimo nao e maior que o $numeroMaximo";
    } 
    return ($arr);
    
}  

var_dump(tabela(5,15));

// echo "[".join(",",tabela(5,15))."]";

//tabela(1,10));

//--------------- Ejercicio 1.C ----------------//


$numeroMagico = mt_rand(0,20);

 function Maior($a, $b) {
    $funcoesExecutadas;
    global $numeroMagico;
    if($a > $b && $a > $numeroMagico) {
        return $a;
    } elseif ($b > $a && $b > $numeroMagico) {
        return $b;
    } else {
        return $numeroMagico;
    }
}

 echo Maior(2,7);

// -------------- Ejercicio 1.E ------------------//


function tabelaNova($numeroMinimo) { 
    $funcoesExecutadas;
    global $numeroMagico;
    if ($numeroMinimo < $numeroMagico) {
    $arr = [];
    for($i = $numeroMinimo; $i <= $numeroMagico; $i++) {
    array_push($arr,$i);
    } 
    } else {
        return "o $numeroMinimo nao e maior que o $numeroMagico";
    } 
    return ($arr);
}  

var_dump(tabelaNova(5));



// ----- Exercicio 6 ----- //

$fraseFinal = "Adoro php! -Eu também adoro php!";

strpos($fraseFinal, "php");

?>