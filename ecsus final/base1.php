<?php

  session_start();
  $conexao = mysqli_connect("localhost", "root", "", "bd_ecsus");

  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

  $query = "select idusuario, nm_usuario from usuario where nm_usuario = '{$usuario}' and senha = '{$senha}' ";

  $result = mysqli_query($conexao, $query);

  $row = mysqli_num_rows($result);

  $dados = mysqli_fetch_array($result);

  if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['idusuario'] = $dados['idusuario'];
    header('Location: logado.php');
    exit();
  }

  else {
    header('Location: formulario_login.php?errolog');
    exit();
  }

?>
