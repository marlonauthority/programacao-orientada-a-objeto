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
    public function setTitulo($titulo){
      $this->titulo = $titulo;
    }
    public function setAutor($autor){
      $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas){
      $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($pagAtual){
      $this->pagAtual = $pagAtual;
    }
    public function setAberto($abeto){
      $this->aberto = $abeto;
    }
    public function setLeitor($leitor){
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
