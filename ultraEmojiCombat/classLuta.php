<?php
  require_once 'classLutador.php';
  class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
      if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
          $this->aprovada = true;
          $this->desafiado = $l1;
          $this->desafiante = $l2;
      } else {
        $this->aprovada = false;
        $this->desafiado = NULL;
        $this->desafiante = NULL;
      }
    }
    public function lutar(){
      if ($this->aprovada) {
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0,2); //gera numero randomicos entre 0 até 2
        switch ($vencedor) { //faz as escolhas geradas pelo rand
          case 0: //empate
            echo "EMPATE";
            $this->desafiado->empatarLuta();
            $this->desafiante->empatarLuta();
            break;
          case 1: //desafiado vence
            echo "<p>".$this->desafiado->getNome()." venceu </p>";
            $this->desafiado->ganharLuta();
            $this->desafiante->perderLuta();
            break;
          case 2: //desafiante vence
          echo "<p>".$this->desafiante->getNome()." venceu </p>";
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
            break;
        }
      } else {
        echo "<p>Luta não pode Acontecer.</p>";
      }
    }

    public function getDesafiado(){
      return $this->desafiado;
    }
    public function getDesafiante(){
      return $this->desafiante;
    }
    public function getRounds(){
      return $this->rounds;
    }
    public function getAprovada(){
      return $this->aprovada;
    }

    public function setDesafiado($desafiado){
      $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante){
      $this->desafiante = $desafiante;
    }
    public function setRounds($rounds){
      $this->rounds = $rounds;
    }
    public function setAprovada($aprovada){
      $this->aprovada = $aprovada;
    }

  }


 ?>
