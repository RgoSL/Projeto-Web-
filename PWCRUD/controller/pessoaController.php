<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/PWCRUD/model/pessoa.php'; //Import do Arquivo "Pessoa.php"

class PessoaController { // Classe Pública
    private $pessoa; // Valor da Váriavel Indefinido

    public function __construct(){
        $this->pessoa = new Pessoa(); // Acesso Utilizando o This
        if ($_GET['acao'] == 'inserir') { // Get Identificado Através da URL da Página, Condicionamento Para Executar Caso Seja Utilizado
            $this->inserir();
            header('Location: ../index.php');
        } else if ($_GET['acao'] == 'atualizar') { // Get Identificado Através da URL da Página, Condicionamento Para Executar Caso Seja Utilizado
            $this->atualizar($_GET['id']);
            header('Location: ../consultar.php?acao=consultar');

        } else if ($_GET['acao'] == 'excluir') {
            $this->excluir($_GET['id']);
            header('Location: ../consultar.php?acao=consultar');
        }
    }

    public function inserir() { // Método Utilizado Para Definir Parâmetros
        $this->pessoa->setNome($_POST['nome']); //Set de Váriaveis de Acordo Com Informações da Página Com o Formulário
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        $this->pessoa->atualizar($id);
    }

    public function excluir($id){
        $this->pessoa->excluir($id);
    }
}
new PessoaController(); // Istância de um Objeto

?>