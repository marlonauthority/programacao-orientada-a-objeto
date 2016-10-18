<?php

  class Caneta{ // inicia a classe com Atributos abaixo
    public $modelo; //atributo
    public $cor; //atributo
    private $ponta; //atributo
    protected $carga; //atributo
    protected $tampada; //atributo

      public function rabiscar(){ //metodo
        if($this->tampada == true) {
          echo "<p>Error, não posso rabiscar!</p>";
        }else {
          echo "<p>Estou rabiscando..</p>";
        }
      }
      private function tampar(){ //metodo
        $this->tampada = true;
      }
      private function destampar(){ //metodo
        $this->tampada = false;
      }
  }

?>
