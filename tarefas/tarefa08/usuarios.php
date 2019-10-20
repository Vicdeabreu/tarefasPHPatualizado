<?php 
  $nomeArquivo = "usuarios.json";

  function cadastrarUsuario($nome, $sobrenome, $img, $cv) {
    global $nomeArquivo;
    $usuarios = [];
    if (!file_exists($nomeArquivo)){
      $usuarios = [];
    } else {
      $usuarios = json_decode(file_get_contents($nomeArquivo), true);
    }
    
    // imagen 
    $id = count($usuarios)+1;
    $nomeImagen = $img['name'];
    $tempName = $img['tmp_name'];
    $direccion = "img";
    $endImagem = $direccion."/".$nomeImagen.$id;

    // Curriculum

    $nomeCV = $cv['name'];
    $tempCV = $cv['tmp_name'];
    $direccionCV = "cv";
    $endCV = $direccionCV."/".$nomeCV;

    // Nova informacao 
    $usuarios[] = ["id"=>$id,
                    "nome" => $nome,
                    "sobrenome" => $sobrenome,
                    "imagem" => $endImagem,
                    "cv" => $endCV];
    
    $json = json_encode($usuarios);
    $deuCerto = file_put_contents($nomeArquivo, $json);

    if ($deuCerto) {
      if (move_uploaded_file($tempName, $endImagem)) {
        if (move_uploaded_file($tempCV, $endCV)) {
          return "Salvo com sucesso";
        } else {
          return "Nao foi possivel salvar o cv";
        } 
      } else {
        return "Nao foi possivel salvar a imagem.";
        }
      } else {
        return "Nao foi possivel salvar.";
      }
    }
  

  if ($_POST) {
    echo cadastrarUsuario($_POST["nome"],$_POST["sobrenome"],$_FILES['img'], $_FILES['cv']);
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
  
  <?php 

    if(file_exists($nomeArquivo)) {
      $usuarios = json_decode(file_get_contents($nomeArquivo), true);
      echo "<br><br>";
      foreach ($usuarios as $usuario) {
        echo $usuario["id"]."|".$usuario["nome"]."|".$usuario["sobrenome"]."|".$usuario["imagem"]."|".$usuario["cv"];
      }
    } 
  ?>

</body>
</html>