<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
    require_once 'classControleRemoto.php';
      $c = new ControleRemoto();
      $c->ligar();

      $c->maisVolume();
      
      $c->abrirMenu();
      print_r($c);


    ?>
  </pre>
  </body>
</html>
