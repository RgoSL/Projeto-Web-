<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/PWCRUD/controller/conexao.php'; // Import do Arquivo "Conexao.php"
class Pessoa { // Classe Pública
    private $id; // Váriaveis
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    //Gets e Sets Nas Váriaveis
    public function getId (){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public funciton setEndereco($endereco){
        $this->endereco = $endereco;
    }

}

?>