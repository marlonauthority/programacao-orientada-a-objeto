<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
    //require_once 'superclassPessoa.php';
    require_once 'subclassAluno.php';
    require_once 'subclassProfessor.php';
    require_once 'subclassTecnico.php';
    require_once 'subclassVisitante.php';
    require_once 'subclassBolssista.php';

    $v1 = new Visitante();
    $t1 = new Tecnico();
    $a1 = new Aluno();
    $b1 = new Bolssista();
    $p1 = new Professor();

    $p1->setNome("Professor Pedro");
    $p1->setEspecialidade("Geografia");
    $p1->setSalario(3000);
    $p1->receberAum(500);
    $p1->getSalario();

    print_r($p1);

    $b1->setMatr(1212);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Administração");
    $b1->pagarMensalidade();
    print_r($b1);



    $t1->setMatr(1213);
    $t1->setNome("Gerson");
    $t1->setRegistro(1234);
    $t1->praticar();
    print_r($t1);


    $v1->setNome("Juvenal");
    $v1->setIdade(33);
    $v1->setSexo("M");
    print_r($v1);

    $a1->setNome("Pedro");
    $a1->setMatr(1111);
    $a1->setCurso("Analise e Desenv de Sistemas");
    $a1->setIdade(18);
    $a1->setSexo("M");
    $a1->pagarMensalidade();
    print_r($a1);




    ?>
  </pre>
  </body>
</html>
