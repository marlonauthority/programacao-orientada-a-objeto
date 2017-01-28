<?php
  require_once 'absPessoa.php';

  class Professor extends Pessoa {
    //Atributos
    private $especialidade;
    private $salario;

    //Metodos
    public function receberAum($aum){
      $this->salario += $aum;
    }

    public function getEspecialidade(){
      return $this->especialidade;
    }
    public function getSalario(){
      return $this->salario;
    }
    public function setEspecialidade($e){
      $this->especialidade = $e;
    }
    public function setSalario($s){
      $this->salario = $s;
    }

  }
