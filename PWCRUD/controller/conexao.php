<?php

class Conexao { // Classe Com Visibilidade Pública
    private $host = "localhost"; // Não Declara o Tipo (Onde o Nosso Usuário Vai Entrar)
    private $usuario = "root"; // Atribui "Root" Para o Usuário
    private $senha = ""; // Sem Senha Definida
    private $banco = "exemplo_crud_pw"; // Nome do Banco Criado em SQL
    private $conexao; // Váriavel Ainda Indefinida

    public function __construct(){ // Exemplo de Método Construtor
        $this -> conexao = new mysqli($this -> host, $this->usuario, $this->senha, $this->banco);
        //Acessando Pelo This (This é Uma Espécie de Apontamento do "Onde" a Função Esta Sendo Executada), Instânciando a Classe "Mysqli" (Classe Padrão, Contém Informações de CRUD)
        if($this->conexao->connect_error) {
            die("Falha na Conexão: ". $this->conexao->connect_error); //Condicionamento, Cancela a Conexão Se Por Acaso Houver Falha na Execução do Primeiro Método.
        }
    }

    public function getConexao(){ // Função Para Retorno da Conexão Com o Banco de Dados
        return $this -> conexao;
    }
} 

?>