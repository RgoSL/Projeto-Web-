<?php 

class Conexao { //Clase de Conexão do arquivo, responsável por ligar a tabela do Banco de Dados ao arquivo PHP. // 
    private $host = "localhost"; //Host do Banco.//
    private $usuario = "root";  //Usuario identificado como "Root", por padrão.//
    private $senha = ""; //Campo de senha do Host, não utilizada nesta tarefa em questão.//
    private $banco = "exemplo_aula_pw"; // Nome do Banco de Dados criado no MySQL//
    private $conexao;

    public function __construct() {  //Método Construtor da ligação SQL.//
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco); //Função externa chamada "msyqli", recebe os valores declarados acima.//

        if ($this->conexao->connect_error) { //Estrutura de Comparação do êxito da conexão do Banco.//
            die("Falha na conexão: " . $this->conexao->connect_error); 
        }
    }

    public function getConexao() { //Método Get, retorna os valores passados no Método Construtor.//
        return $this->conexao;
    }
}

?>
