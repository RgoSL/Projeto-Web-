<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title> <!-- Título da página -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Importação do framework Bootstrap para estilização -->
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2> <!-- Título da seção de cadastro -->
        <form method="POST" action="controller/pessoaController.php"> <!-- Formulário de envio de dados para o controlador PHP -->
            <div class="form-group">
                <label for="nome">Nome:</label> <!-- Campo de entrada para o nome -->
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"> <!-- Campo de texto para inserção do nome -->
            </div>
            <!-- Repetições similares para os outros campos de entrada: endereço, bairro, CEP, cidade, estado, telefone, celular -->
            <button type="submit" class="btn btn-primary">Cadastrar</button> <!-- Botão de envio do formulário -->
        </form>
    </div>
</body>
</html>
