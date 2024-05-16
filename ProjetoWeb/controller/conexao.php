<?php

class Conexao {
    private $host = "localhost";  //atributos de propriedade privada, apenas a classe consegue ver
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    public function _construct() { //metodo publico que é a função construtora
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