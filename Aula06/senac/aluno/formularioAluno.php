

<?php
include "../adm/controle.php";
?>
<div class="container text-light pag" id="grad">
    <h1>Cadastro de Alunos</h1>
    <form method="post" action="incluirAluno.php" name="form">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="mb-3">
            <label for="turma" class="form-label">Turma</label>
            <input type="text" class="form-control" id="turma" name="turma" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<?php
include "../footer.php";
?>

</html>