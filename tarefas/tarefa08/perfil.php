<?php 
  $nomeArquivo = "usuarios.json";

  function cadastrarUsuario($nome, $sobrenome, $img, $cv) {
    global $nomeArquivo;

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
    $endImagem = $direccion."/".$nomeImagen;

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

    // Fazer associacao do array que vai ser convertido em json depois.
    
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

 $dadosPerfil = json_decode(file_get_contents($nomeArquivo), true); 

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
  <h1>Perfil do usuario</h1>

  <?php for($i=0; $i < count($dadosPerfil); $i++) {
      if ($i == count($dadosPerfil) - 1) {
        echo "<label for=''>Nome</label>
        <input type='text' value='".$dadosPerfil[$i]["nome"]."'><br>
        <label for=''>Sobrenome</label>
        <input type='text' value='".$dadosPerfil[$i]['sobrenome']."'><br>
        <label for=''>Imagem</label>
        <input type='text' value='".$dadosPerfil[$i]['imagem']."'><br>
        <label for=''>CV</label>
        <input type='text' value='".$dadosPerfil[$i]['cv']."'>";
        echo  "<a href=".$dadosPerfil[$i]['imagem']." download=".$dadosPerfil[$i]['imagem'].">Baixar imagem</a>
        <a href=".$dadosPerfil[$i]['cv']." download=".$dadosPerfil[$i]['cv'].">Baixar CV</a>";
      }
  } ?>

 
</body>
</html>