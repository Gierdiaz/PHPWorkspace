<?php
class Pessoa {
    public string $nome = "Fulano";
/*     public string $idade = "258";
    public string $linguagem = "PHP"; */

    public function dados(/* string $nome, string $idade, string $linguagem */) {
/*         $this->nome = $nome;
        $this->idade = $idade;
        $this->linguagem = $linguagem;
        
        echo "Meu nome é $this->nome, tenho $this->idade e trabalho com a linguagem $this->linguagem"; */

        echo 'OLá';

    }

    protected function programadorPHP() {
        echo "Acessando o protected";
    }

    public function acessarProgramadorPHP() {
        $this->programadorPHP();
    }
}

class Programador extends Pessoa {

    public function acessarProgramadorPHP() {
        $this->programadorPHP();
    }
}

/* $pessoa = new Pessoa();
$pessoa->dados();
//chamando o protected
$pessoa->acessarProgramadorPHP();

$programador = new Programador();
echo $programador->nome; */




/* 
- Create a Human class with some properties and the speak method;
- Create another Professor class that inherits from human, also create the particular properties and methods of this class;
- Display values ​​of parent class properties and also use methods; 
*/

class Humano {
    public string $nome = "nome";
    public string $sobrenome = "sobrenome";

    public function pessoa() {
        echo "Sou uma pessoa e tenho $this->nome e $this->sobrenome";
    }
}

class Professor extends Humano {
    public string $formado = "bacharelado em matemática";
    public string $disciplina = "matemática";

    public function salaDeAula() {
        echo "Sou $this->formado e ensino $this->disciplina em sala de aula";
    }
}

/* $pessoa = new Humano();
$pessoa->pessoa(); */

$professor = new Professor();
$professor->nome;
$professor->formado;
$professor->pessoa();
$professor->salaDeAula();


?>