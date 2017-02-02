<?php
  // Essa é a classe Mãe Abstrata, não gera objetos. Serve somente como base.
    abstract class Animal{
      //
      //
      //Atributos
      protected $peso, $idade, $membros;
      //
      //
      //Metodos Abstratos, so pode criar metodos abstratos dentro de classes abstratas!
      abstract function locomover();
      abstract function alimentar();
      abstract function emitirSom();
      //
      //
      // Métodos Getters e Setters
      public function getPeso(){
        return $this->peso;
      }
      public function getIdade(){
        return $this->idade;
      }
      public function getMembros(){
        return $this->membros;
      }
      public function setPeso($p){
        $this->peso = $p;
      }
      public function setIdade($i){
        $this->idade = $i;
      }
      public function setMembros($m){
        $this->membros = $m;
      }

  }
