<?php require_once 'AbsClassAnimal.php';

  class Ave extends Animal{
    //
    //
    // Atributos
    private $corPena;
    //
    //
    // Por extender da classe abstrata Animal, deve-se Obrigatoriamente herdar todos os metodos da mae, Então:
    public function alimentar(){
      echo "<p>Comendo Frutas</p>";
    }
    public function emitirSom(){
      echo "<p>Som da Ave</p>";
    }
    public function locomover(){
      echo "<p>Voando</p>";
    }
    //
    //
    // Método de Sobreposicao
    public function fazerNinho(){
      echo "<p>Construiu um ninho</p>";
    }
    //
    //
    // Métodos Getters e Setters
    public function getCorPena(){
      return $this->corPena;
    }
    public function setCorPena($corPena){
      $this->corPena = $corPena;
    }
}
