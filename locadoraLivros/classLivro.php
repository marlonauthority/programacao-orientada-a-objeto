<?php
  require_once 'interfacePublicacao.php';
  require_once 'classPessoa.php';

  class Livro implements Publicacao {

    //ATRIBUTOS
    private $titulo; //ENSCAPSULANDO
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //METODOS
    public function getTitulo(){
      return $this->titulo;
    }
    public function getAutor(){
      return $this->autor;
    }
    public function getTotPaginas(){
      return $this->totPaginas;
    }
    public function getPagAtual(){
      return $this->pagAtual;
    }
    public function getAberto(){
      return $this->aberto;
    }
    public function getLeitor(){
      return $this->leitor;
    }
    public function setTitulo($t){
      $this->titulo = $titulo;
    }
    public function setAutor($a){
      $this->autor = $autor;
    }
    public function setTotPaginas($t){
      $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($p){
      $this->pagAtual = $pagAtual;
    }
    public function setAberto($a){
      $this->aberto = $abeto;
    }
    public function setLeitor($l){
      $this->leitor = $leitor;
    }

    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->aberto = true;
        $this->pagAtual = 10;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    // METODOS PERSONALIZADOS
    public function detalhes(){
      echo "O autor é: ".$this->getAutor();
      echo "<br>";
      echo "E o seu Título: ".$this->getTitulo();
    }

    // METODOS DA INTERFACE
    public function abrir(){
      $this->aberto = true;
    }
    public function fechar(){
      $this->aberto = false;
    }
    public function folhear($pagina){
      if ($pagina > $this->totPaginas){
        $this->pagAtual = 0;
      }else {
        $this->pagAtual = $pagina;
      }
    }
    public function avancarPag(){
      $this->pagAtual ++;
    }
    public function voltarPag(){
      $this->pagAtual --;
    }


  }
