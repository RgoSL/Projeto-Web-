<?php require_once $_SERVER['DOCUMENT_ROOT'] . 'ProjetoWeb/controller/pessoaController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Etec <strong>ZL</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar.php">Visualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="editar.php">Editar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Excluir</h2>
        <?php 
            $pessoaController = new PessoaController();
            $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>
        <form method="POST" action="controller/pessoaController.php?acao=excluir&id<?php echo $pessoa['id'] ?>">
    <div class="form-group">
        <label for="nome">Nome : </label>
        <input type="text" class="form-control" id="nome"  name= "nome"  value = "<?php echo $pessoa['nome']; ?>">
    </div>
    <div class="form-group">
        <label for="endereco">Endereço : </label>
        <input type="text" class="form-control" id="endereco"  name= "endereco" value = "<?php echo $pessoa['endereco']; ?>">
    </div>
    <div class="form-group">
        <label for="bairro">Bairro :</label>
        <input type="text" class="form-control" id="bairro"   name= "bairro" value = "<?php echo $pessoa['bairro']; ?>">
    </div>
    <div class="form-group">
        <label for="cep">CEP :</label>
        <input type="text" id="cep"  name= "cep" value = "<?php echo $pessoa['cep']; ?>">
    </div>
    <div class="form-group">
        <label for="cidade">Cidade :</label>
        <input type="text" id="cidade"  name= "cidade" value = "<?php echo $pessoa['cidade']; ?>">
    </div>
    <div class="form-group">
        <label for="estado">Estado :</label>
        <input type="text" id="estado"  name= "estado" value = "<?php echo $pessoa['estado']; ?>">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone :</label>
        <input type="text" id="telefone"  name= "telefone" value = "<?php echo $pessoa['telefone']; ?>">
    </div>
    <div class="form-group">
        <label for="celular">Celular :</label>
        <input type="text" id="celular"  name= "celular" value = "<?php echo $pessoa['celular']; ?>">
    </div>
        <button type="submit" class="btn btn-primary">Excluir</button>
      </form>
   </div>
</body>
</html>