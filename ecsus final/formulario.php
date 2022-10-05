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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Voltar ao Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario_login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="caixa-login p-3">

                <div class="container">
                  <?php
                  if(isset($_GET["erro01"])):
                  ?>
                      <div class="red">
                          <strong class="mr-auto">
                          Usuário já existe!
                          </strong>
                      </div>
                    <?php
                  endif;
                        unset($_SESSION["erro01"]);
                     ?>

                     <?php
                     if(isset($_GET["erro02"])):
                     ?>
                         <div class="red">
                             <strong class="mr-auto">
                             As senhas não coincidem!
                             </strong>
                         </div>
                       <?php
                     endif;
                           unset($_SESSION["erro02"]);
                        ?>
            <form method="post" action="base.php">

                <div class="mx-auto corsa">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usuário</label>
                    <input type="text" required class="form-control" name="user" placeholder="Usuário(max. 12 dígitos)"pattern="^(?![0-9]{6})[0-9a-zA-Z]{3,12}$">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" required class="form-control" name="cademail" aria-describedby="emailHelp" placeholder="Seu email">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" required class="form-control" name="cadsenha" placeholder="Senha(6-12 dígitos números e letras)" pattern="^(?=.*\d).{6,12}$">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirme sua Senha</label>
                    <input type="password" required class="form-control" name="cadconsenha" placeholder="Senha" pattern="^(?=.*\d).{6,12}$">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" required class="form-check-input" name="aceito">
                    <label class="form-check-label" for="exampleCheck1"><i>Aceito os <a href="termos.pdf" target="_blank"><u>termos de serviço</u></a> para uso da fonte "ecsus" fonte sustentável.</i></label>
                  </div>
                  <button type="submit" class="btn btn-success borda_quadrada">Cadastrar</button>
              </form>



              </div>


        	</div>

        </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
  </body>
</html>
