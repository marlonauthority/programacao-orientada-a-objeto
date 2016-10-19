<?php
  class ContaBanco{

    //ATRIBUTOS
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //METODOS
    public function abrirConta($t){ // primeiro recebe o parametro t = tipo de conta
      $this->setTipo($t); // seta o tipo de conta
      $this->setStatus(true); // seta o status
      if($t == "CC"){ // cria a conficao
        $this->setSaldo(50); // seta o novo valor
      }
      elseif ($t == "CP") {
        $this->setSaldo(150);
      }
    }

    public function fecharConta(){
      if ($this->getSaldo() > 0) {
        echo "Conta com dinheiro";
      }
      elseif ($this->getSaldo() < 0) {
        echo "Conta está em débito";
      }else{
        $this->setStatus(false);
      }
    }

    public function depositar($v){
      if ($this->getStatus() == true) {
        $this->setSaldo($this->getSaldo() + $v);
      }else{
        echo "Impossível depositar";
      }
    }

    public function sacar($v){
      if ($this->getStatus() == true) {
        if ($this->getSaldo() > $v) {
          $this->setSaldo($this->getSaldo() - $v);
          echo "Saque de $v autorizado na conta da ".$this->getDono();
        } else {
          echo "Impossível Sacar saldo insuficiente";
        }
      } else {
        echo "Conta fechada";
      }
    }

    public function pagarMensal(){
      if ($this->getTipo() == "CC") {
        $v = 12;
      }elseif ($this->getTipo() == "CP") {
        $v = 20;
      }
      if ($this->getStatus() == true) {
        if ($this->getSaldo() > $v) {
          $this->setSaldo($this->getSaldo() - $v);
        }else {
          echo "Impossível pagar";
        }
      }
    }

    public function __construct(){
      $this->setSaldo(0);
      $this->setstatus(false);
      echo "Conta Criada com sucesso <br>";
    }

    public function getnumConta(){
      return $this->numConta;
    }
    public function getTipo(){
      return $this->tipo;
    }
    public function getDono(){
      return $this->dono;
    }
    public function getSaldo(){
      return $this->saldo;
    }
    public function getStatus(){
      return $this->status;
    }
    public function setnumConta($n){
      $this->numConta = $n;
    }
    public function setTipo($t){
      $this->tipo = $t;
    }
    public function setDono($d){
      $this->dono = $d;
    }
    public function setSaldo($s){
      $this->saldo = $s;
    }
    public function setStatus($s){
      $this->status = $s;
    }
  }
?>
