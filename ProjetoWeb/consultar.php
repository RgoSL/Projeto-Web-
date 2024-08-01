<?php
    require_once $_SERVER['DOCUMENT_ROOT'] .'/ProjetoWeb/controller/pessoaController.php';
?>
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
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <table class ="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pessoaController = new PessoaController();
                    $pessoas = $pessoaController->listar();

                   // print_r($pessoas);
                    foreach($pessoas as $pessoa ) {
                         ?>
                    <tr>
                        <th><?php echo $pessoa['nome']; ?> </th>
                        <th><?php echo $pessoa['telefone']; ?></th>
                        <th><?php echo $pessoa['celular']; ?></th>
                        <th> <a href ="editar.php?id =<?php echo $pessoa['id']; ?>">Editar</a></th>
                        <th> <a href ="excluir.php?id =<?php echo $pessoa['id']; ?>">Excluir</a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>