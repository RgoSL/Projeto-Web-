<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ProjetoWeb/controller/conexao.php';  // Instanciando a Classe Conexão na classe Pessoa. O 'require_once' garante a prioridade dessa linha.//

class Pessoa{ // Definindo a Classe Pessoa, responsável por definir os atributos que a "pessoa" precisa ter, e manda-los para a sua tabela no Banco de Dados.//
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
    
    public function __construct(){ //Método que inicia a conexão com o BD.
        $this->conexao = new Conexao(); //instânciando a classe conexão.
    }

    public function inserir(){ //Método Inserir, transferindo os valores da tela de cadastro das informações para a Tabela Cliente no Banco de Dados.//
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); //Processos para mascarar as informações dos campos.//
        return $stmt->execute();
    }

    public function listar(){
        $sql = "SELECT * FROM cliente";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $pessoas = [];
        while($pessoa = $result->fetch_assoc()){  //Função do sqli, fetch_assoc capta dados de um array list.
            $pessoas[] = $pessoa;
        }
        return $pessoa;
       // print_r($pessoas);//
        //return $pessoas;
        
    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM cliente WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); 
    }

    public function atualizar($id){
        $sql = "UPDATE pessoas SET nome = ?, endereco = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, telefone = ?, celular = ? WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssssi',$this->nome,$this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular, $id);
        return $stmt->execute();
    }

    public function excluir($id){
        $sql = "DELETE FROM pessoas WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
    
?>