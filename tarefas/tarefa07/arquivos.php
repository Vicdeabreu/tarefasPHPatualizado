<?php 
  function existeTextoTxt(){
    if (file_exist("texto.txt")) {
      return fopen("texto.txt", "r+");
    } else {
      return fopen("texto.txt", "x+");
    }
  }

  //* Exercicio 3.B *//
  $arquivo = existeTextoTxt();
  for ($i=1; $i<=50; $i++){
    fwrite($arquivo,"Olá Mundo! testando.\n");
}
fclose($arq);

//* Exercicio 3.C *//
$arquivo = fopen('texto.txt', 'r');
$tamanho = filesize('texto.txt');
$conteudo = fread($arquivo, $tamanho);
fclose($arquivo);
echo $conteudo."<br><br>";

//* Exercicio 3.D *// 
$arquivo = fopen('texto.txt', 'r');
while ($linha = fgets($arquivo)) {
    echo $linha;
}
fclose($arq);

//* Exercicio 3.E *//
unlink("texto.txt");
file_put_contents("texto2.txt","Olá novamente, mundo!");
file_put_contents("texto2.txt","Esse texto sobreescreve o anterior?");
file_put_contents("texto2.txt","NÃO!",FILE_APPEND);

?>