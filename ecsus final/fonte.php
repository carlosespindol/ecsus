<?php
session_start();
$nome = $_SESSION["usuario"];
$nome_font = $_POST["nomefonte"];
$descri = $_POST["desc"];
$link = $_POST["linkfonte"];
$id = $_SESSION['idusuario'];

$conexao = mysqli_connect("localhost", "root", "", "bd_ecsus");

$result = mysqli_query($conexao, "INSERT INTO fonte VALUES(DEFAULT, '$nome', '$nome_font', '$descri', '$link', '$id')");

$quantidade = mysqli_affected_rows($conexao);
mysqli_close($conexao);

if($quantidade >= 1){
    header('Location: logado.php?fontecadastro');
  }
else {
    header('Location: logado.php?notfontecadastro');
}
?>
