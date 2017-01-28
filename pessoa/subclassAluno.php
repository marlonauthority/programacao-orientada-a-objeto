<?php
  //require_once 'superclassPessoa.php';
  require_once 'absPessoa.php';
  class Aluno extends Pessoa {

    //METODOS
    private $matr;
    private $curso;

    //METODOS
    public function cancelarMatr(){
      echo "<p>Matrículo cancelada.</p>";
    }
    public function pagarMensalidade(){
      echo "<p>Pegando Mensalidade do aluno $this->nome</p>";
    }

    public function getMatr(){
      return $this->matr;
    }
    public function getCurso(){
      return $this->curso;
    }
    public function setMatr($m){
      $this->matr = $m;
    }
    public function setCurso($c){
      $this->curso = $c;
    }
  }
