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
      <h1>Descargar o arquivo</h1>
      <a href="uploads/<?php echo $nomeArquivo ?>" download><p>Descargar</p></a>

       <?php // ---- Outro jeito de fazer echo "<a href='uploads/$nomeArquivo' download><p>Descargar</p></a>" ?>
      
</body>
</html>