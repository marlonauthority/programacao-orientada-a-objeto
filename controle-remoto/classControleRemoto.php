<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    function __construct(){
      $this->volume = 50;
      $this->ligado = false;
      $this->tocando = false;
    }
    private function getVolume(){
      return $this->volume;
    }
    private function getLigado(){
      return $this->ligado;
    }
    private function getTocando(){
      return $this->tocando;
    }
    private function setVolume($volume){
      $this->volume = $volume;
    }
    private function setLigado($ligado){
      $this->ligado = $ligado;
    }
    private function setTocando($tocando){
      $this->tocando = $tocando;
    }

    public function ligar(){
      $this->setLigado(true);
    }

    public function desligar(){
      $this->setLigado(false);
    }

    public function abrirMenu(){
      echo "<br>Está ligado?: ".($this->getLigado()?"SIM ":"NÂO");
      echo "<br>Está tocando?: ".($this->getTocando()?"SIM ":"NÂO");
      echo "<br>Volume: ". $this->getVolume();
      for ($i=0; $i <= $this->getVolume(); $i+=10) {
        echo " |";
      }
      echo "<br><br>";
    }

    public function fecharMenu(){
      echo "<br>fechando Menu..";
    }
    public function maisVolume(){
      if ($this->getLigado()) {
        $this->setVolume($this->getVolume() + 5);
      }
    }
    public function menosVolume(){
      if ($this->getLigado()) {
        $this->setVolume($this->getVolume() - 5);
      }
    }
    public function ligarMudo(){
      if ($this->getLigado() && $this->getVolume() > 0) {
        $this->setVolume(0);
      }
    }
    public function desligarMudo(){
      if ($this->getLigado() && $this->getVolume() == 0) {
        $this->setVolume(50);
      }
    }
    public function pause(){
      if ($this->setLigado() && $this->getTocando()) {
        $this->setTocando(false);
      }
    }
    public function play(){
      if ($this->setLigado() && !($this->getTocando())) {
        $this->setTocando(true);
      }
    }
  }
?>
