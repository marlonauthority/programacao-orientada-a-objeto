<?php

  class Caneta{ // inicia a classe com Atributos abaixo
    public $modelo; //atributo
    public $cor; //atributo
    private $ponta; //atributo
    protected $carga; //atributo
    protected $tampada; //atributo

    public function Caneta($m, $c, $p){ //metodo contrutor pode ser __construct ou o nome da classe
      $this->setModelo($m);
      $this->setCor($c);
      $this->setPonta($p);
      $this->tampar();
    }

    public function getModelo(){
      return $this->modelo;
    }
    public function setModelo($m){
      $this->modelo = $m;
    }
    public function getPonta(){
      return $this->ponta;
    }
    public function setPonta($p){
      $this->ponta = $p;
    }
    public function getCor(){
      return $this->cor;
    }
    public function setCor($c){
      $this->cor = $c;
    }


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
