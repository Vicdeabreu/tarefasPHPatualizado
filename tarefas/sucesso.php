
<?php 

$nomeUsuario = $_POST['nome'];
$emailUsuario = $_POST['email'];

echo "Hola $nomeUsuario, a sua compra foi realizada com sucesso baixo endereco $emailUsuario!";

echo "<h1>Resultados da pesquisa</h1>";

foreach ($_POST as $key => $value) {
    echo "$key : $value<br>";
}

// Resposta E: O resultado nao mudou como eu esperava, so retorno o valor 'on' como sinal de que tinha recibido os dados, mas nao o valor mesmo //

?>