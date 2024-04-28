<?php

class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    public function _construct() {
        $this ->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if($this->conexao->connect_error) {
            die("Falha na Conexão : " . $this->conexao->connect_error);
        }
    }

    public function getConexao() {
        return $this->conexao;
    }    
}

?>