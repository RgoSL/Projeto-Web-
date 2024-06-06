<!DOCTYPE html>
<html> <!--Estruturas HTML: DOC, Head, HTML, Body. -->
<head>
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Framework para estilização genérica do formulário. -->
</head>
<body>
    <div class="container">  <!--container, estrutura, do formulário. -->
        <h2>Cadastro</h2>
        <form method="POST" action="controller/pessoaController.php?acao=inserir"> <!-- Definindo a forma de receber as informações, via POST PHP.-->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"> <!--Campos do Formulário, e sua respectiva mensagem para o usuário. -->
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o celular">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button> <!--Botão do tipo submit, para enviar as informações recebidas pelos Inputs ao Banco de Dados. -->
        </form>
    </div>
</body>
</html>
