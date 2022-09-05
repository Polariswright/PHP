<?php

include "controle.php";
?>
<style>
    img{
        width: 100%;
    }

    .quadro a img{
        opacity: 0.5%;
        width: 50%;
    }

    .quadro a:hover img{
        opacity: 1;
    }

    a{
        text-decoration: none;
    }
</style>
<div class="container mt-3">
    <div class="row text-center">
        <div class="col">
            <a href="Usuario/listarUsuario.php">
            <img src="img/usuario.png" >
            <p>Usuário</p>
            </a>
        </div>
        <div class="col">
            <a href="Professor/listarProfessor.php">
            <img src="img/professor.png" >
            <p>Professor</p>
            </a>
        </div>
        <div class="col">
            <a href="aluno/listarAluno.php">
            <img src="img/aluno.png" >
            <p>Aluno</p>
            </a>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>