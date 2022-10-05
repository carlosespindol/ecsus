<?php
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECSUS - Login</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="csslogin_form.css">
    <link rel="icon" href="img/favicon.png">
    <style type="text/css">
      </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

            <div id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Voltar ao Início</a>
                    </li>
                </ul>
            </div>
        </nav>

<div class="caixa-login p-3">

        <div class="container">



          <?php

          if(isset($_GET["cadastrado"])):
          ?>
              <div class="verde">
                  <strong class="mr-auto">
                  Cadastro efetuado com sucesso!
                  </strong>
              </div>
            <?php
          endif;
                unset($_SESSION["cadastrado"]);
             ?>

             <?php

             if(isset($_GET["errolog"])):
             ?>
                 <div class="red">
                     <strong class="mr-auto">
                     Usuário e/ou Senha Incorretos!
                     </strong>
                 </div>
               <?php
             endif;
                   unset($_SESSION["erroLog"]);
                ?>
        <form method="post" action="base1.php">
        <div class="mx-auto corsa">
        <div class="form-group">
        <label for="exampleFormControlInput1">Usuário</label>
        <input type="text" required class="form-control" name="usuario">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Senha</label>
        <input type="password" required class="form-control" name="senha">
        </div>
        <div class="form-group">
          <a href="formulario.php"> <u>Não tenho uma conta</u> </a>
        </div>

        <button type="submit" class="btn btn-success borda_quadrada">Enviar</button>
      </form>



      </div>


	</div>

</div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    </body>
</html>
