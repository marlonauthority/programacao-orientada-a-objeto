<?php
  require_once 'superclassPessoa.php';

  class Funcionario extends Pessoa {
    //Atributos
    private $setor;
    private $trabalhando;

    //Metodos
    public function mudarTrabalho(){
      $this->trabalhando = ! $this->trabalhando;
    }

    public function getSetor(){
      return $this->setor;
    }
    public function getTrabalhando(){
      return $this->trabalhando;
    }
    public function setSetor($s){
      $this->setor = $s;
    }
    public function setTrabalhando($t){
      $this->trabalhando = $t;
    }



  }
