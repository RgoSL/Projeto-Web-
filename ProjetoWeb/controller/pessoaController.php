<?php

require_once 'model/pessoa.php'; // Equivalente ao Import do Java, necessário para fazer a linha 9 funcionar por exemplo. Require = import, once = import prioritário

class PessoasController{
    private $pessoa;

    public function _construct(){
        $this->pessoa = new Pessoa(); 
    }

    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
    }
}
    

?>