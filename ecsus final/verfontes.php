<?php

$conexao = mysqli_connect("localhost","root","","bd_ecsus");

$dados = mysqli_query($conexao,"SELECT * FROM fonte");

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

        <h3 class="titulo text-center">Fontes</h3>
        <div class="container">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
            <?php
            foreach($arrEstudante as $chave => $valor){

              echo	'<div class="col-md-4">';
              echo '<div class="text-center">';
              echo '<div class="card" style="width: 18rem;">';
              echo	'<img class="card-img-top img-fluid" src="img/logo.jpg">';
              echo	'<div class="card-body">';
              echo	'<p class="card-text"><b>' .$valor["nome_font"]. '</b><br>';
              echo  $valor["descricao"].'</p>';
              echo	'<b>'.$valor["link"].'</b><br>';

              echo	'</div>';
              echo	'</div>';
              echo '<br>';
              echo '</div>';
              echo '</div>';


            }
           ?>
         </div>
         </li>
          </ul>
        </div>
  </body>
  </html>
