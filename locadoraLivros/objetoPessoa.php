<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
    require_once 'classLivro.php';
    require_once 'classPessoa.php';

    $p[0] = new Pessoa ("Pedro", 22, "M");
    $p[1] = new Pessoa ("Maria", 31, "F");

    $l[0] = new Livro ("PHP", "José da Silva", 300, $p[0]);
    $l[1] = new Livro ("POO", "Silva SOuza", 800, $p[1]);

    $l[0]->detalhes();
    ?>
  </pre>
  </body>
</html>
