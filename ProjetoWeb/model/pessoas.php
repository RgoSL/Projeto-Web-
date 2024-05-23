<?php
require_once '../controller/conexao.php';  // Instanciando a Classe Conexão na classe Pessoa. O 'require_once' garante a prioridade dessa linha.//

class Pessoa{ // Definindo a Classe Pessoa.//
    private $id; //Atributos do Banco de Dados sendo definidos agora em PHP.//
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    public function getId(){ //Método Get, puxando puxa as informações dos Atributos acima.//
        return $this->id;
    }
    public function setId($id){ //Método Set, "define como", as informações dos Atributos acima.//
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
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(){ //Método Inserir, transferindo os valores da tela de cadastro das informações para a Tabela Cliente no Banco de Dados.//
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); //Processos para mascarar as informações dos campos.//
        return $stmt->execute();
    }
}

?>
