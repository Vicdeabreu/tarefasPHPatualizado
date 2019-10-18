<?php

$arquivo = $_FILES["imagem"];
  if($_FILES){

    $nomeArquivo = $arquivo["name"];
    $tmpLocal = $arquivo["tmp_name"];
    $direccion = "uploads";
    $caminhoCompleto = $direccion."/".$nomeArquivo;

      //salvar em caso de o arquivo nao existir

    if (!file_exists($direccion.$nomeArquivo)) {
        $deuCerto = move_uploaded_file($tmpLocal, $caminhoCompleto);
        // var_dump($nomeArquivo);
        // exit;
          if ($deuCerto){
              echo "Seu arquivo foi salvo.";
          } else {
              echo "Não foi possível salvar o arquivo.";
          }
      } else {
          echo "Já existe um arquivo com esse nome. Favor enviar outro arquivo.";
      }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="download.php" method="post" enctype="multipart/form-data">
    <input type="file" name="imagem">
    <button type="submit">Upload</button> 
    <?php 
      var_dump($_FILES)
    ?>
  </form>


</body>
</html>