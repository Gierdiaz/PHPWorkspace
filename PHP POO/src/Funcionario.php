<?php


class Funcionario extends Pessoa{
    private string $cargo;
    private float  $salario;

    public function __construct(string $cargo, float $salario, string $nome, int $idade, int $telefone) {

        parent::__construct($nome, $idade, $telefone);
        $this->cargo = $cargo;
        $this->salario = $salario;
        
    }

    public function getCargo(): string {
        return $this->cargo;
    }
    
    public function setCargo(string $cargo): void {
        $this->cargo = $cargo;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    //IMPLEMENTAÇÃO DO MÉTODO ABSTRATO setDesconto
    public function setDesconto(): void {
        $this->desconto = 0.10;
    }

    //SOBRESCREVER ou SOBRESCRITA de método: É necessário que o class mãe seja protected
    public function __toString(): string {
        return  "<p>Nome : "        . $this->nome . 
                "<br>Idade : "      . $this->idade . "anos" . 
                "<br>Telefone : "   . $this->telefone . 
                "<br>Cargo : "      . $this->cargo . 
                "<br>Salario : "    . $this->salario . 
                "</p>";
    }
}


?>