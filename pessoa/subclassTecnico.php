<?php
  require_once 'absPessoa.php';

  class Tecnico extends Aluno{

    private $registroProfissional;

    public function getRegistro(){
      return $this->registroProfissional;
    }
    public function setRegistro($registro){
      $this->registro = $registro;
    }

    public function praticar(){
      echo "<p>praticando $this->nome</p>";
    }


  }
