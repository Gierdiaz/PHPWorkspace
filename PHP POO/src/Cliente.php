<?php


class Cliente extends Pessoa {
    
    private string $dataNascimento;
    private float  $renda;

    public function __construct(string $nome, int $idade, int $telefone, string $dataNascimento, float $renda) {
        parent::__construct($nome, $idade, $telefone);
        $this->dataNascimento = $dataNascimento;
        $this->renda = $renda;
    }

    public function getdataNascimento(): string {
        return $this->dataNascimento;
    }

    public function setdatNascimento(string $dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }

    public function getrenda(): float {
        return $this->renda;
    }

    public function setrenda(float $renda): void {
        $this->renda = $renda;
    }

    //IMPLEMENTAÇÃO DO MÉTODO ABSTRATO setDesconto
    public function setDesconto(): void {
        $this->desconto = 0.05;
    }
    
    //Polomorfismo
    //SOBRESCREVER ou SOBRESCRITA de método: É necessário que o class mãe seja protected
    public function __toString(): string {
        return  "<p>Nome : "                     . $this->nome . 
                "<br>Idade : "                   . $this->idade .  
                "<br>Telefone : "                . $this->telefone . 
                "<br>Data de Nascimento : "      . $this->dataNascimento . 
                "<br>Renda : "                   . $this->renda . 
                "</p>";
    }
}


?>