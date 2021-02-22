<?php

class Usuario {
    private $nome;
    private $email;
    private $senha;

    function setNome($nome) {
        $this->nome = $nome;
    }
    function getNome() {
        return $this->nome; 
    }

    function setEmail($email) {
        $this->email = $email;
    }
    function getEmail() {
        return $this->email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    function getSenha() {
        return $this->senha;
    }
}

?>