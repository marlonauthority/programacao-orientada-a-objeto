<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Youtube</title>
  </head>
  <body>
    <pre>
      <?php
      require_once  'classVideo.php';
      require_once  'classGafanhoto.php';
      require_once  'classVisualizacao.php';

        $v[0] = new Video("Aula 01");
        $v[1] = new Video("Aula 02");

        $g[0] = new Gafanhoto("Jubileu", 22, "F", "juba");

        $vis[0] = new Visualizacao($g[0], $v[1]);
        $vis[1] = new Visualizacao($g[0], $v[0]);

        print_r($vis);



       ?>
    </pre>
  </body>
</html>
