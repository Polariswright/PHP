<?php

include "conexao.php";
$erro = 0;
if (isset($_GET['idAluno'])) {
  $idAluno = $_GET['idAluno'];

  $sql = "select * from usuario where id = $login";
  $seleciona = mysqli_query($conexao, $sql);
  $exibe = mysqli_fetch_array($seleciona);

  $nome = $exibe['nome'];
  $login = $exibe['login'];
  $senha = $exibe['senha'];
  $email = $exibe['email'];
} else {
  $erro++;
}


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SENAC MADUREIRA</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container text-light pag" id="grad">
    <div class="text-end">
      <a href="listarUsuario.php"><button type="button" class="btn btn-success btn-sm">LISTAR USUÁRIO</button></a>
    </div>
    <h2>Usuário</h2>
    <hr>
    <div class="container text-start bg-gradient p-3 ">
      <?php
      if (!$erro) {
        echo "
            
            <p>Nome: $nome </p>
            <p>Login: $login </p>
            <p>Email: $email </p>
            <p>senha: $senha </p>";
      } else {
        echo "
        <p>Nenhum Usuário foi selecionado.</p>
        <p>Clique em Listar Usuários para selecionar um Usuário.</p>
        
        ";
      }
      ?>
    </div>
    <div class="row">
      <div class="col text-start">

        <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>

      </div>

      <div class="col text-end">
        <a href="editarUsuario.php?login=<?php echo $login?>"><button type="button" class="btn btn-primary btn-sm">EDITAR DADOS</button></a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>