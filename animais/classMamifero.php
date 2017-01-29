<?php require_once 'AbsClassAnimal.php';

  class Mamifero extends Animal{
    //
    //
    // Atributos
    private $corPelo;
    //
    //
    // Por extender da classe abstrata Animal, deve-se Obrigatoriamente herdar todos os metodos da mae, Então:
    public function alimentar(){
      echo "<p>Mamando</p>";
    }
    public function emitirSom(){
      echo "<p>Som de mamifêro</p>";
    }
    public function locomover(){
      echo "<p>Correndo</p>";
    }
    //
    //
    // Métodos Getters e Setters
    public function getCorPelo(){
      return $this->corPelo;
    }
    public function setCorPelo($corPelo){
      $this->corPelo = $corPelo;
    }


  }
