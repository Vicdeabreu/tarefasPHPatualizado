<?php

// ----  Exercicio 1  ----- // 
    $numeroA = 15;
    $numeroB = 18;

    if ($numeroA > $numeroB) {
        echo "O maior número é $numeroA";
    } else {
        echo "O maior número é $numeroB";
    }

    // ----  Exercicio 2  ----- // 

    $numeroAleatorio = mt_rand(1,5); 

    if ($numeroAleatorio == 3 || $numeroAleatorio == 5) {
        echo $numeroAleatorio;
    } else {
        echo "Nao tem número aleatorio";
    }

    // ----  Exercicio 3  ----- // 

    $numeroAleatorio = mt_rand(1,5); 

    if ($numeroAleatorio != 3) {
        echo "O número nao é 3";
    } else {
        echo $numeroAleatorio;
    }

    // ----  Exercicio 4  ----- // 

    $numeroGrande = mt_rand(1,100);

    if ($numeroGrande >= 50) {
        echo "O número é maior que 50";
    } else {
        echo "O número é menor que 50";
    }

    // ----  Exercicio 5  ----- // 

    $numeroEntero = mt_rand(0,100);
        if ($numeroEntero > 50 && $numeroEntero%2 == 0) {
            echo "O número cumpre a condicao";
        } else {
            echo "O número nao cumpre a condicao";
        }

    // ----  Exercicio 6  ----- // 

    $idade = 27;
    $casado = true;
    $sexo = ["Masculino", "Feminino", "Outro"];
    $excepcion = "outro";

        if ($idade > 18 && !$casado && $excepcion) {
        echo "Boas-vindas";
        }

    // ----  Exercicio 7  ----- // 

    $quantidadeDeAlunos = 42;

    if ($quantidadeDeAlunos) {
        echo "true";
    }   else {
        echo "false";
    }

    //variável 0 e "" sao nulas, porém falsas. Variável " " é verdadeira por ocupar espacio

    if ($i == 1 ) {
        echo “true”;
        } else {
        echo “false”;
        }

       // PHP Notice:  Undefined variable: i in /workspace/Main.php on line 4
       // PHP Warning:  Use of undefined constant “false” - assumed '“false”' (this will throw an Error in a future version of PHP) in /workspace/Main.php on line 7

    // ----  Exercicio 8  ----- // 
    $numero = mt_rand(1,100);

    echo $numero%2 == 0 ? "$numero é um número par" : "$numero é um número impar";

    // ----  Exercicio 9  ----- // 

    $i = mt_rand(1,5);
    
    switch ($i) {
        case '1':
            echo "$i é igual a 1";
            break;
            
        case '2':
            echo "$i é igual a 2";
            break;
        
        case '3':
            echo "$i é igual a 3";
            break;
        
        case '4':
            echo "$i é igual a 4";
            break;
        
        default:
            echo "$i é igual a 5";
            break;
    }

    // ----  Exercicio 10  ----- // 

    $i = mt_rand(1,5);
    
    switch ($i) {
        case '1':
            echo "$i é igual a 1";
            break;
            
        case '2':
            echo "$i é igual a 2";
            break;
        
        default:
            echo "$i nao é igual a 1 ou 2";
            break;

    // ----  Exercicio 11  ----- // 

    $X = mt_rand(1,100);
    $Y = mt_rand(1,100);

    switch($X>$Y) {
        case "1":
        echo "$X é maior que $Y";
        break;

        case "2":
        echo "$Y é maior que $X";

        default:
        echo "Os números são iguais";
        break;
    }
?>
