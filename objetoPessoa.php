<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
      require_once 'classContaBanco.php'; // importa a classe (MODEL)

      $p1 = new ContaBanco(); // Jubileu
      $p2 = new ContaBanco(); // Creuza

      $p1->abrirConta("CC"); // cria a conta corrente
      $p1->setDono("Jubileu"); // define o dono da conta
      $p1->setnumConta(1111);

      $p2->abrirConta("CP"); // cria a conta poupança
      $p2->setDono("Creuza");
      $p2->setnumConta(2222);

      $p1->depositar(300);
      $p2->depositar(500);

      $p2->sacar(100);

      $p1->fecharConta();



      print_r($p1);
      print_r($p2);
    ?>
  </pre>
  </body>
</html>
