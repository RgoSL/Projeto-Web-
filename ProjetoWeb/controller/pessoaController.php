<?php

require_once '../model/pessoas.php'; // Requerindo o arquivo que contém a definição da classe Pessoa. O 'require_once' garante que o arquivo seja incluído apenas uma vez.

class PessoaController{
    private $pessoa; // Declaração de uma propriedade privada $pessoa, que será uma instância da classe Pessoa.

    public function __construct(){ // Método construtor da classe PessoaController.
        $this->pessoa = new Pessoa(); // Instanciando um objeto da classe Pessoa e atribuindo-o à propriedade $pessoa.
        $this->inserir(); // Chamando o método inserir ao construir um objeto PessoaController.
    }

    public function inserir(){ // Método inserir para inserir uma nova pessoa no banco de dados.
        // Definindo os atributos da pessoa com base nos dados recebidos via POST.
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        // Chamando o método inserir da instância da classe Pessoa para inserir os dados no banco de dados.
        $this->pessoa->inserir();

    }
}

new PessoaController(); // Criando uma nova instância da classe PessoaController.

?>
