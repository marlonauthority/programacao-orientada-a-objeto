<?php

  class Caneta{ // inicia a classe com Atributos abaixo
    var $modelo; //atributo
    var $cor; //atributo
    var $ponta; //atributo
    var $carga; //atributo
    var $tampada; //atributo

      function rabiscar(){ //metodo
        if($this->tampada == true) {
          echo "<p>Error, não posso rabiscar!</p>";
        }else {
          echo "<p>Estou rabiscando..</p>";
        }
      }
      function tampar(){ //metodo
        $this->tampada = true;
      }
      function destampar(){ //metodo
        $this->tampada = false;
      }
  }

?>
