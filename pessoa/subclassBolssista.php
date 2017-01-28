<?php
  require_once 'absPessoa.php';

  class Bolssista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
      echo "Bolsa Renovada";
    }
    public function pagarMensalidade(){
      echo "<p>$this->nome É Bolssista paga com desconto</p>";
    }

    public function getBolsa(){
      return $this->bolsa;
    }
    public function setBolsa($bolsa){
      $this->bolsa = $bolsa;
    }


  }
