<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'classCaneta.php'; // importa a classe (MODEL)
      $c1 = new Caneta;          // Objeto com nome c1 do tipo caneta
      $c1->cor = "Azul";         // altera um atributo do objeto
      $c1->ponta = 0.5;          // altera um atributo do objeto

      $c1->destampar();            //chama o metodo destampar

        echo"<pre>";            //apenas visual
          print_r($c1);         //mostra a estrutura do objeto
        echo"</pre>";           //apenas visual
          echo"<br>";           //apenas visual quebra linha

      $c2 = new Caneta;         // Objeto com nome c1 do tipo caneta
      $c2->cor = "Verde";       // altera um atributo do objeto
      $c2->carga = 50;          // altera um atributo do objeto
      $c2->tampar();            //chama o metodo tampar

      echo"<pre>";            //apenas visual
        print_r($c1);         //mostra a estrutura do objeto
      echo"</pre>";           //apenas visual
        echo"<br>";           //apenas visual quebra linha

    ?>
  </body>
</html>
