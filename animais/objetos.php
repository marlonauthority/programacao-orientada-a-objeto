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
    require_once  'subclassMamifero-Canguru.php';
    require_once  'subclassMamifero-Lobo.php';
    require_once  'subclassMamifero-Cachorro.php';

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

    $lobo = new Lobo();
    $lobo->emitirSom();
    print_r($lobo);

    $cachorro = new Cachorro();
    $cachorro->emitirSom();
    $cachorro->reagirFrase("Olá"); //Abanar e Latir
    $cachorro->reagirFrase("Vai apanhar"); //Rosnar
    $cachorro->reagirHora(11,45); // Abanar
    $cachorro->reagirHora(21,00); // Ignonar
    $cachorro->reagirDono(true); //Abanar
    $cachorro->reagirDono(false); // Rosnar e Latir
    $cachorro->reagirIdadePeso(2,12.5); //Latir
    $cachorro->reagirIdadePeso(17, 4.5); //Rosnar
    print_r($cachorro);

  ?>
</pre>
  </body>
</html>
