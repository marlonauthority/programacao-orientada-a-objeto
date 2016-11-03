<?php
class Pessoa {
  //ATRIBUTOS
  private $nome;
  private $idade;
  private $sexo;

  // METODOS
  public function getNome(){
    return $this->nome;
  }
  public function getIdade(){
    return $this->idade;
  }
  public function getSexo(){
    return $this->sexo;
  }
  public function setNome(){
    $this->nome = $nome;
  }
  public function setIdade(){
    $this->idade = $idade;
  }
  public function setSexo(){
      $this->sexo = $sexo;
    }

  function __construct($nome, $idade, $sexo){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
  }

  public function fazerAniver(){
    //$this->getIdade($this->getIdade + 1);
    $this->idade ++; // outra forma de fazer;
  }

}
