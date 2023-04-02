<?php
//Using interfaces, we can write some code which can work for all of the animals even if each animal behaves differently:
/* interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bark";
    }
}

class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
}

//Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = [$cat, $dog, $mouse];

//Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
} */

use Funcionario as GlobalFuncionario;

interface Autenticar {
    public function login(Funcionario $funcionario, string $senha): void;
}

class Funcionario implements Autenticar{

    public string $senha;
    public string $nome;

    public function login($nome, $senha): void {
        if ($this->nome === $nome && $this->senha === $senha ) {
            echo "[LOGIN: Usuário ". $this->nome . "autenticado com sucesso!";
        }else {
            echo "[ERRO! Usuário ou senha incorreta.";
        }
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }
}

//$funcionario = new GlobalFuncionario();
$funcionario->setSenha("123");
$funcionario->login("Allison", "123");


?>
