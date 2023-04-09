<?php

class Pessoa {
    // ATRIBUTOS, CARACTERÍSTICAS = variáveis;
    public string    $nome;
    public int       $idade;

    // COMPORTAMENTOS, MÉTODOS = funções;
    // MÉTODO MÁGICO CONSTRUTOR;
    public function __construct(string $nome, int $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // MÉTODOS ACESSORES = dão acesso ao métodos: get e set;
    public function getName() {
        return $this->nome;
    }

    public function setName(string $nome): void {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }
}

?>