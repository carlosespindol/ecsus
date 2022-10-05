<?php

$conexao = mysqli_connect("localhost","root","","bd_ecsus");

$dados = mysqli_query($conexao,"SELECT * FROM comentario");

$arrEstudante = mysqli_fetch_all($dados, MYSQLI_ASSOC);

mysqli_close($conexao);

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECSUS - Comentários</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylevermais.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

            <div id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logado.php">Voltar ao Início</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h3 class="titulo text-center">Comentários</h3>

        <div class="container">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
         <?php
          foreach($arrEstudante as $chave => $valor){
            echo '<b>'.$valor["nm_usuario"].'</b>';
            echo "<br>";
            echo '<p class="comentario">'.$valor["comentario"].'</p>';
            echo "<hr>";
           }
         ?>
         </li>
          </ul>
        </div>

  </body>
  </html>
