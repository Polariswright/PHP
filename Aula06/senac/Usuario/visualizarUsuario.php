<?php

include "../adm/conexao.php";

$erro = 0;
if (isset($_GET['login'])) {
  $login = $_GET['login'];

  $sql = "select * from usuario where login = '$login'";
  $seleciona = mysqli_query($conexao, $sql);
  $exibe = mysqli_fetch_array($seleciona);

  $nome = $exibe['nome'];
  $login = $exibe['login'];
  $senha = $exibe['senha'];
  $email = $exibe['email'];
  $nivel = $exibe['nivel'];
  $foto = $exibe['foto'];
} else {
  $erro++;
}


?>


<body>
  <?php
  include "../adm/controle.php";
  ?>
  <div class="container text-light pag" id="grad">
    <div class="text-end">
      <a href="listarUsuario.php"><button type="button" class="btn btn-success btn-sm">LISTAR USUÁRIO</button></a>
    </div>
    <h2>Usuário</h2>
    <hr>
    <div class="container text-start bg-gradient p-3 ">
      <div class="row">
        <div class="col-2 text-center">
          <img src="<?php echo $foto ?>" alt="">
          <p><a href="editarFoto.php?login=<?php echo $login; ?>">Editar Foto</a></p>
        </div>

        <div class="col-10">


          <?php
          if (!$erro) {
            echo "
                      
                      <p>Nome: $nome </p>
                      <p>Login: $login </p>
                      <p>Email: $email </p>
                      <p>senha: $senha </p>
                      <p>Nivel: $nivel </p>";
          } else {
            echo "
                  <p>Nenhum Usuário foi selecionado.</p>
                  <p>Clique em Listar Usuários para selecionar um Usuário.</p>
                  
                  ";
          }
          ?>
        </div>

      </div>
      <div class="row">
        <div class="col text-start">

          <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sm">VOLTAR</button></a>

        </div>
        <div class="col text-center">

          <a href="editarSenha.php?login=<?php echo $login?>"><button type="button" class="btn btn-danger btn-sm">ALTERAR SENHA</button></a>

        </div>

        <div class="col text-end">
          <a href="editarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-primary btn-sm">EDITAR DADOS</button></a>
        </div>
      </div>
    </div>
    <?php
    include "../adm/footer.php";
    ?>

    </html>