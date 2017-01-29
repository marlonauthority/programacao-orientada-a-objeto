<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Objetos Animais</title>
  </head>
  <body>
    <pre>
  <?php
    require_once  'classMamifero.php';
    require_once  'classReptil.php';
    require_once  'classPeixe.php';
    require_once  'classAve.php';
    require_once  'subclassMamifero.php';

    $mamifero = new Mamifero();
    $mamifero->setPeso(33.2);
    $mamifero->setMembros(4);
    $mamifero->locomover();
    $mamifero->setCorPelo("preto");
    $mamifero->setIdade(2);
    print_r($mamifero);

    $reptil = new Reptil();
    $reptil->setPeso(0.82);
    $reptil->setMembros(0);
    $reptil->locomover();
    $reptil->setCorEscama("trigrado");
    $reptil->setIdade(11);
    print_r($reptil);


    $ave = new Ave();
    $ave->setPeso(0.45);
    $ave->setMembros(2);
    $ave->locomover();
    $ave->setCorPena("Azul");
    $ave->setIdade(4);
    $ave->fazerNinho();
    print_r($ave);

    $peixe = new Peixe();
    $peixe->setPeso(0.15);
    $peixe->setMembros(0);
    $peixe->locomover();
    $peixe->setCorEscama("Verde");
    $peixe->setIdade(1);
    $peixe->soltarBolha();
    print_r($peixe);

    $canguru = new Canguru();
    $canguru->setPeso(15.15);
    $canguru->setMembros(4);
    $canguru->locomover();
    $canguru->setIdade(8);
    $canguru->setCorPelo("marrom");
    print_r($canguru);

  ?>
</pre>
  </body>
</html>
