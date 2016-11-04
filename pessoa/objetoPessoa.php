<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
    require_once 'superclassPessoa.php';
    require_once 'subclassAluno.php';
    require_once 'subclassProfessor.php';
    require_once 'subclassFuncionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Cláudio");
    $p4->setNome("Fabiana");

    $p2->setCurso("Informática");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
  </pre>
  </body>
</html>
