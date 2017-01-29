<?php require_once 'AbsClassAnimal.php';

  class Reptil extends Animal{
    //
    //
    // Atributos
    private $corEscama;
    //
    //
    // Por extender da classe abstrata Animal, deve-se Obrigatoriamente herdar todos os metodos da mae, Então:
    public function alimentar(){
      echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom(){
      echo "<p>Som de Réptil</p>";
    }
    public function locomover(){
      echo "<p>Rastejando</p>";
    }
    //
    //
    // Métodos Getters e Setters
    public function getCorEscama(){
      return $this->corEscama;
    }
    public function setCorEscama($corEscama){
      $this->corEscama = $corEscama;
    }
  }
