<?php
  session_start();
    $nome = $_SESSION["usuario"];
    $coment = $_POST["coment"];
    $id = $_SESSION['idusuario'];

    $conexao = mysqli_connect("localhost", "root", "", "bd_ecsus");

    $result = mysqli_query($conexao, "INSERT INTO comentario VALUES(DEFAULT, '$nome', '$coment', '$id')") or die(mysqli_error($conexao));

    $quantidade = mysqli_affected_rows($conexao);

    mysqli_close($conexao);

      if($quantidade >= 1){
          header('Location: logado.php?comentok');
      }
      else {
          header('Location: logado.php?notcoment');
      }
?>
