<?php 
    $numeroEntero = "43";
    $numeroDecimal = 2.5;
    $caracterDupla = " ";
    $caracterSimple = ' ';
    $stringA = 'Victor';
    $stringB = "De Abreu";
    $numeroEntero = "StringCaracteres";
    $caracterSimple = 3.5;
    $ditado = ["Tres","pratos","de","trigo","para","tres","tigres","tristes"];

    echo $numeroEntero;
    echo $caracterSimple;

    var_dump($ditado);

    $um = "Tres";
    $dois = "pratos";
    $tres = "de";
    $quatro = "trigo";
    $cinco = "para";
    $seis = "tres";
    $siete = "tigres";
    $ocho = "tristes";
    $nueve = "son";
    $diez = "alegres";
    
    echo $um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$siete." ".$ocho;
    
    echo $um." ".$siete." ".$nueve." ".$diez;

    $variable01 = true;
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 = "true";
    $variable09 = 'false';
    $variable10 = null;
    
    $meuDado = 7;
    
    function tipoDado($varN) {
        if ( $varN == true )
        {
        echo 'o valor ' . $varN . ' é verdadeiro.';
        }
        else
        {
        echo 'o valor ' . $varN . ' é falso.';
        }
        }
        tipoDado($meuDado);
        
    $animais = ["Manson","Hachi","Beto","Sasha","Nachua"];
    
    array_push($animais, "Toby", "Lola");
    
    var_dump($animais);
    
    $palaA = "Eu";
    $palaB = "gosto";
    $palaC = "de";
    $palaD = "animais:";
    
    echo $palaA." ".$palaB." ".$palaC." ".$palaD.$animais[0]." ".$animais[1]." ".$animais[2]." ".$animais[3]." ".$animais[4]." ".$animais[5]." ".$animais[6];

    $animalNuevo = ["Bobby"];
    
    $comoQueda = array_replace($animais,$animalNuevo);
    
    print_r($comoQueda);

    $animais[99]="Neron";
    var_dump($animais);
    
    $animais[16]="Canela";
    var_dump($animais);
    
    echo "Animais: $animais[0], $animais[1], $animais[2], $animais[3], $animais[4], $animais[5], $animais[6], $animais[16], $animais[99]";
    
    $carros = ["Marca"=>"Toyota","Modelo"=>"Corolla","Cor"=>"Negro","Ano"=>"2019","Placa"=>"YYY-222"];
    
    var_dump($carros);

    array_unshift($carros,["Dono"=>"Victor"]);
    print_r($carros);

    $carros[14]=["Aseguradora"=>"Mapfre"];
    var_dump($carros);

    $inteiro = 17;
    $decimal = 0.7;

    echo $inteiro + $decimal;
    echo $inteiro - $decimal;
    echo $inteiro / $decimal;
    echo $inteiro * $decimal;

    $resultadoA = ($inteiro / $decimal);
    echo $resultadoA;

    $soma = ($inteiro+1);
    echo $soma;
    
    $somaDecimal = ($decimal+1);
    echo $somaDecimal;
    
    echo ($inteiro +5 +$decimal -0.6);
    echo "<br>";

    $resultado = (($inteiro * 2 + $decimal) / ($inteiro% 2));
    echo $resultado;

    $hola = "Olá";
    $gente = "Mundo";

    $frase = $hola." ".$gente;
    echo $frase;

    $frasePHP = "PHP é o máximo";

    echo $hola." ".$gente." ".$frasePHP;
?>
