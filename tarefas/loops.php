<?php 


// ---- Exercicio 1 ------ //

$numero = mt_rand(0,100);

for($i=0; $i <= $numero; $i++) {
    echo $i;
}

//------- Exercicio 3 -------//

$numero = 2;

for($i=1; $i <= 10; $i++) {
    $resultado = 2*$i;
    echo "$numero x $i = $resultado";
}

//---------- Exercicio 4 --------//

$caras = 0;
$totalJogadas = 0;
while ($caras <= 5) {
    $caraCoroa = mt_rand (0,1);
    if ($caraCoroa == 1 ) {
    $caras++;    
    }
    $totalJogadas++;
}
echo "Foram necessárias $totalJogadas jogadas para tirar 5 vezes cara";

// ---------- exercicio 5 ------ // 

$totalJogadas = 0;
do {
    $caraCoroa = mt_rand (0,1);
    $totalJogadas++;
} while ($caraCoroa == 1);
echo "Foram necessários $totalJogadas jogadas para tirar cara."

// ---------- exercicio 6 ------ //

// ----- Com o for -----//

$nomes = ["Marta", "Lislaine", "Yuri", "Alex", "Victor"];

for ($i=0; $i < count($nomes); $i++) {
    echo $nomes[$i];
}

//------ Com um foreach -----//

foreach ($nomes as $nome) {
    echo $nome." ";
}

//------  Com um while ----- //

$i = 0;
while ($i < count($nomes)) {
    echo $nomes[$i]." ";
    $i++;
}

//------  Com um do while ----- //

$i = 0;
do {
    echo $nomes[$i]." ";
    $i++;
}
    while ($i < count($nomes));
}

//------  Exercicio 8 ----- //

foreach (range('a', 'n') as $posicao => $letter) {
    echo "Na posicao $posicao está o valor $letter";
}

//------  Exercicio 9 ----- //

$mascote = ["animal" => "gato", "idade:" => "5", "altura:" => "0,60", "nome:" => "Beto"];

foreach ($mascote as $key => $mascote) { 
    echo "$key : $mascote";
}

//------  Exercicio 10 ----- //
$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
"Áustria" => "Viena", "Polônia"=>"Varsóvia"];

ksort($ceu);

foreach($ceu as $pais => $cidade) { 
    echo "A capital de $pais é $cidade <br>";
}

echo $ceu;

//------  Exercicio 11 y 12 ----- //

$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];

    foreach($ceu as $pais => $cidades) {
        echo "As cidades da $pais sao:";
        foreach($cidades as $key => $cidade) {
            echo "$cidade";
        }
    }

//------  Exercicio 13 ----- //


//EXERCÍCIO 13

$ceu = [
    "Argentina" => ["naAmerica" => true,
                    "cidades"=> ["Buenos Aires", "Córdoba", "Santa Fé"]],
    "Brasil" => ["naAmerica" => true,
                    "cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"]],
    "Colômbia" => ["naAmerica" => true,
                    "cidades" => ["Cartagena", "Bogotá", "Barranquilla"]],
    "França" => ["naAmerica" => false,
                    "cidades" => ["Paris", "Nantes", "Lyon"]],
    "Itália" => ["naAmerica" => false,
                    "cidades" => ["Roma", "Milão", "Veneza"]],
    "Alemanha" => ["naAmerica" => false,
                    "cidades" => ["Munique", "Berlim", "Frankfurt"]]
];
foreach($ceu as $pais => $detalles) 
    if ($detalles["naAmerica"]) {
    echo "As cidades da $pais sao:";
    foreach($detalles["cidades"] as $cidade) {
        echo " - ".$cidade;
    }
}
?>
