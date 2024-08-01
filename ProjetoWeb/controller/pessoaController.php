<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/ProjetoWeb/model/pessoas.php'; // Caminho local = '../model/pessoas.php';  Instanciando a Classe Pessoa na classe controller. O 'require_once' garante a prioridade dessa linha. 
 
class PessoaController{
    private $pessoa; // Declaração de uma propriedade privada $pessoa, que será uma instância da classe Pessoa.

    public function __construct(){ // Método construtor da classe PessoaController.
        $this->pessoa = new Pessoa(); // Instanciando um objeto da classe Pessoa e atribuindo-o à propriedade $pessoa.
        if($_GET['acao'] == 'inserir'){ // Condição do que o usuário pode fazer com o programa, no caso esta setado como "Inserir" informações.
            $this->inserir(); // Chamando o método inserir ao construir um objeto PessoaController.
        }else if($_GET['acao'] == 'atualizar'){
            $this->atualizar($_GET['id']);
        }else if ($_GET['acao'] == 'excluir') {
            $this->excluir($_GET['id']);
        }
    }
 
    public function inserir(){  //Método Inserir do código, ele fará a atribuição dos dados nos campos HTML;
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);   // Definindo os atributos da pessoa com base nos dados recebidos via POST.//
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        // Chamando o método inserir da instância da classe Pessoa para inserir os dados no Banco de Dados.//
        $this->pessoa->inserir();

  }

    public function listar(){
        return $this->pessoa->listar();
    }

    public function buscarPorId($id){
        return $this->pessoa->buscarPorId($id);
    }

    public function atualizar($id){
        $this->pessoa->setId($id);
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        $this->pessoa->atualizar($id);      
    }
    
    public function excluir($id) {
            $this->pessoas->excluir($id);
    }
}

new PessoaController(); // Criando uma nova instância da classe PessoaController.//

?>