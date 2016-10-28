<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>

    <?php
      require_once 'classLutador.php'; // importa a classe (MODEL)
      require_once 'classLuta.php';
      $l = array();
      $l[0] = New Lutador("Pretty Boy", "Franca", 30,1.75,90.9,11,2,1);
      $l[1] = New Lutador("Putscript", "Brasil", 29,1.68,57,14,2,3);
      $l[2] = New Lutador("SnapShadow", "EUA", 35,1.65,80.9,12,2,1);
      $l[3] = New Lutador("Dead Code", "Australia", 28,1.93,81.6,13,0,2);
      $l[4] = New Lutador("UFOCobol", "Brasil", 37,1.70,119.3,5,4,3);
      $l[5] = New Lutador("Nerdaart", "EUA", 30,1.81,105.7,12,2,4);

      $UEC01 = New Luta();
      $UEC01->marcarLuta($l[0], $l[4]);
      $UEC01->lutar();







      print_r($l);

    ?>

  </pre>
  </body>
</html>
