<?php

abstract class Pessoa {

    //CARACTERÍSTICAS, ATRIBUTOS = variáveis
    protected string      $nome;
    protected int         $idade;
    protected int         $telefone;
    protected float     $desconto; //será compartilhado

    //COMPORTAMENTOS, MÉTODOS = funções
    //CONSTRUTOR
    public function __construct(string $nome, int $idade, int $telefone) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->setDesconto(); //definindo desconto
    }

    //ACESSORES os métodos que dão acesso get = pegar, set = setar ou editar
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function getTelefone(): int {
        return $this->telefone;
    }

    public function setTelefone(int $telefone): void {
        $this->telefone = $telefone;
    }

    protected abstract function setDesconto(): void;

    public function getDesconto(): float {
        return $this->desconto;
    }

    public abstract function __toString(): string;

}


?>