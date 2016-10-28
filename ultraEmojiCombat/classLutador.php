<?php
  class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar(){
      echo "<p>-------------------------------</p>";
      echo "<p>CHEGOU A HORA! O Lutador " . $this->getNome();
      echo "</p><p>Veio diretamente de " . $this->getNacionalidade();
      echo ", tem " . $this->getIdade() . " anoes e pesa " . $this->getPeso() . " KG.";
      echo "<br>Ele tem  tem " . $this->getVitorias() . " Vitorias, ";
      echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates! </p>";
    }
    public function status(){
      echo $this->getNome();
      echo $this->getVitorias();
    }
    public function ganharLuta(){
      $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
      $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
      $this->setEmpates($this->getEmpates() + 1);
    }

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
      $this->setNome($no);
      $this->setNacionalidade($na);
      $this->setIdade($id);
      $this->setAltura($al);
      $this->setPeso($pe);
      $this->setVitorias($vi);
      $this->setDerrotas($de);
      $this->setEmpates($em);
    }

    public function getNome(){
      return $this->nome;
    }
    public function getNacionalidade(){
      return $this->nacionalidade;
    }
    public function getIdade(){
      return $this->idade;
    }
    public function getAltura(){
      return $this->altura;
    }
    public function getPeso(){
      return $this->peso;
    }
    public function getCategoria(){
      return $this->categoria;
    }
    public function getVitorias(){
      return $this->vitorias;
    }
    public function getDerrotas(){
      return $this->derrotas;
    }
    public function getEmpates(){
      return $this->empates;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setNacionalidade($no){
      $this->nacionalidade = $no;
    }
    public function setIdade($id){
      $this->idade = $id;
    }
    public function setAltura($al){
      $this->altura = $al;
    }
    public function setPeso($pe){
      $this->peso = $pe;
      $this->setCategoria();
    }
    private function setCategoria(){
      if ($this->peso < 52.2) {
        $this->categoria = "Inválido";
      }
        elseif ($this->peso <= 70.3) {
          $this->categoria = "Leve";
        }
          elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
          }
            elseif ($this->peso <= 120.2) {
              $this->categoria = "Pesado";
            }
              else {
                $this->categoria = "Invalido";
              }
      }
    public function setVitorias($vi){
      $this->vitorias = $vi;
    }
    public function setDerrotas($de){
      $this->derrotas = $de;
    }
    public function setEmpates($em){
      $this->empates = $em;
    }
}
