<?php

class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
    public function getNome(): string {
        return $this->nome;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function getEmail(): string {
        return $this->email;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }
    public function getSenha(): string {
        return $this->senha;
    }
}