<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'classCaneta.php'; // importa a classe (MODEL)

      $c2 = new Caneta;         // Objeto com nome c1 do tipo caneta
      $c2->modelo = "BIC cristal";
      $c2->cor="Azul";
      //$c2->ponta = 0.9;
      //$c2->carga = 99;
      echo"<pre>";            //apenas visual
        print_r($c2);         //mostra a estrutura do objeto
      echo"</pre>";           //apenas visual
        echo"<b>";


    $c2->rabiscar();








    
    ?>
  </body>
</html>
