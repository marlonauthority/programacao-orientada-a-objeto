<?php require_once 'AbsClassAnimal.php';

  class Peixe extends Animal{
    //
    //
    // Atributos
    private $corEscama;
    //
    //
    // Por extender da classe abstrata Animal, deve-se Obrigatoriamente herdar todos os metodos da mae, Então:
    public function alimentar(){
      echo "<p>Comendo Substancias</p>";
    }
    public function emitirSom(){
      echo "<p>Peixe não faz Som</p>";
    }
    public function locomover(){
      echo "<p>Nadando</p>";
    }
    //
    //
    // Método de Sobreposicao
    public function soltarBolha(){
      echo "<p>Soltou uma bolha</p>";
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
