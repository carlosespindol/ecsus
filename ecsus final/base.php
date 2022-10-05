<?php

$user = $_POST["user"];
$email = $_POST["cademail"];
$senha = $_POST["cadsenha"];
$confirma = $_POST["cadconsenha"];

if($senha == $confirma) {

  $conexao = mysqli_connect("localhost", "root", "", "bd_ecsus");

  $pegaEmail = mysqli_query($conexao, "SELECT * FROM usuario WHERE nm_usuario = '$user'");

  if(mysqli_num_rows($pegaEmail) >= 1){

    header('Location: formulario.php?erro01');

    }
  else{

    mysqli_query($conexao, "INSERT INTO usuario VALUES(DEFAULT, '$user', '$email', '$senha' )");

    $quantidade = mysqli_affected_rows($conexao);

    mysqli_close($conexao);

    header('Location: formulario_login.php?cadastrado');

    }


}

else{
  header('Location: formulario.php?erro02');
}

?>
