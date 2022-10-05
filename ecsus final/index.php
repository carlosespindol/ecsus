<?php

$conexao = mysqli_connect("localhost","root","","bd_ecsus");

$dados = mysqli_query($conexao,"SELECT * FROM comentario ORDER BY idcomentario DESC LIMIT 3");
$dadosfont = mysqli_query($conexao,"SELECT * FROM fonte ORDER BY idfonte DESC LIMIT 3");

$ecsusfetch = mysqli_fetch_all($dados, MYSQLI_ASSOC);
$fontefetch = mysqli_fetch_all($dadosfont, MYSQLI_ASSOC);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ECSUS - Fonte Sustentável</title>
		<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="img/favicon.png">
	</head>
	<body data-spy="scroll" data-target="#navbarResponsive">

		<!-- Início -->
		<div id="inicio">

		<!-- Nav -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#inicio">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#beneficios">Benefícios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#sobre">Sobre Nós</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#download">Download</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#comentarios">Comentários</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#fontes">Fontes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contato">Contato</a>
					</li>
				</ul>
				<a class="btn btn-success ml-auto borda-quadrada" href="formulario_login.php">Fazer Login</a>
			</div>
		</nav>

		<!-- Fim Nav -->

			<div class="landing">
				<div class="home-wrap">
					<div class="home-inner">
					</div>
				</div>
			</div>

			<div class="texto-banner text-center">
				<h1 class="logo">ECSUS</h1>
				<h3>Fonte Sustentável</h3>
				<a class="btn btn-success btn-lg" href="#download">Download</a>
			</div>
		</div>

		<!-- Benefícios -->
		<div id="beneficios" class="offset">
			<div class="meiocinza">
		<div class="narrow text-center">
			<div class="col-md-12">
			<h3 class="heading">Por que usar ECSUS?</h3>
			<div class="heading-underline"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="beneficio">
						<img class="beneficio-img img-fluid" src="img/cartucho.jpg" alt="cartucho-icon" width="170px">
						<h4>Economia de cartuchos de tinta!</h4>
					</div>
			</div>

			<div class="col-md-4">
					<div class="beneficio">
						<img class="beneficio-img img-fluid" src="img/checkverde.png" alt="checkmark-icon" width="170px">
						<h4>Fácil e rápido de utilizar!</h4>
					</div>
			</div>

			<div class="col-md-4">
					<div class="beneficio">
						<img class="beneficio-img img-fluid" src="img/arvore.jpg" alt="arvore-icon" width="170px">
						<h4>Ajuda o meio ambiente!</h4>
					</div>
			</div>
			<br>
			</div>
			</div>
			</div>
		</div>
		<div class="narrow text-center">
			<div class="col-md-12">
			<div class="row justify-content-between">
			<div class="col-md-6"><img class="imagem-letra img-fluid" src="img/ecsusletra.png" alt="letra" width="370px"></div>
			<div class="col-md-6">
			<p class="justificado">Diariamente, milhões de papéis são impressos no mundo todo, já parou pra pensar o quanto de tinta isso deve gastar? Sem falar da poluição que os cartuchos das tintas causam para o planeta e a economia financeira que a fonte proporciona. Em média 11 cartuchos de tinta por segundo e 1 milhão de cartuchos por dia são jogados fora. Isso é um desperdício que devemos parar.</p>
			<br>
			<p class="justificado">E pensando nisso, nós da equipe ECSUS resolvemos desenvolver nossa própria fonte eco-sustentável. A fonte ECSUS é uma fonte que economiza tinta na impressão. A fonte usa um sistema de linhas quase imperceptível em seu design, esse é o grande diferencial da nossa fonte para as outras, que na maioria das vezes preenchem 100% de uma letra durante a impressão, utilizando muita tinta.</p>
			<br>
			<p class="justificado">A fonte é gratuita, basta baixar e usar. Ela apresenta uma melhor eficiência em impressoras à laser. </p></div>
	</div>
</div>
</div>
</div>



		<!-- Sobre -->
		<div id="sobre" class="offset">
		<div class="meiocinza">
		<div class="narrow text-center">
			<div class="col-md-12">
				<h3 class="heading">Sobre nosso trabalho</h3>
				<div class="row justify-content-between">
					<div class="col-md-6">
						<h4><b>Equipe Ecsus</b></h4>
						<br>
						<p class="justificado">A ECSUS é uma pequena equipe de programadores em processo de aprendizado, formada por Carlos, Kaio, Lucas, Nicholas e Rafaela. Somos estudantes da instituição Senac, de Joinville – Santa Catarina.</p>
						<br>
						<p class="justificado">Foi nos passado um projeto no qual deveríamos elaborar um site com a temática “sustentabilidade”. No entanto, resolvemos ir um pouco além de apenas um site. Depois de algumas ideias, chegamos em uma fonte sustentável.</p>
						<br>
						<p class="justificado">O site foi elaborado com tudo que aprendemos nas aulas, o básico de HTML, Bootstrap, PHP, Banco de Dados, Publicação de Sites. Nos aprofundamos mais em desenvolvimento de fontes e concluímos o projeto em cerca de 4-5 meses, este é nosso primeiro grande projeto.</p>
					</div>
					<div class="col-md-6"><img class="sobre-logo img-fluid" src="img/logo.jpg" alt="ecsus" width="300px"></div>
				</div>

			</div>
		</div>
		</div>
		</div>

		<!-- Download -->
		<div id="download" class="offset">
				<div class="narrow text-center">
					<div class="col-md-12">
						<div class="download-info">
						<h3 class="heading">Download</h3><br>
						<h4>Baixe a versão mais recente da fonte ECSUS!</h4><br>
					</div>
					<div class="download-botao">
					<a href="fonte/ecsus.ttfs" download><button type="button" class="btn btn-lg btn-success botao-down">Download</button></a>
				</div>
					<hr class="hr-download">
					<h4>Como instalar: Passo a Passo</h4>

					<div class="row">
					<div class="col-md-4">
						<div class="card" style="width: 18rem;">
  						<img class="card-img-top img-fluid" src="img/download1.png" alt="">
  						<div class="card-body">
   		 				<p class="card-text">Após clicar no botão de download, a fonte começará a ser baixada. Quando terminar, clique em cima do arquivo. </p>
  						</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card" style="width: 18rem;">
  						<img class="card-img-top img-fluid" src="img/download2.png" alt="">
  						<div class="card-body">
   		 				<p class="card-text">Irá abrir uma janela com uma prévia da fonte, clique em "instalar". A fonte vai para a pasta "Downloads".</p>
  						</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card" style="width: 18rem;">
  						<img class="card-img-top img-fluid" src="img/download3.png" alt="">
  						<div class="card-body">
   		 				<p class="card-text">Já está pronta para uso, acima tem um exemplo de como usá-la no Word. Vá em fontes e pesquise "ecsus".</p>
  						</div>
						</div>
					</div>
				</div>
				</div>

				</div>

			</div>

			<!-- Comentários -->
	        <div id="comentarios" class="offset">
	            <div class="meiocinza">
	            <div class="col-12 text-center">
	                        <h3 class="heading">Comentários</h3>
	                    </div>
	                    <div class="container">
	          <div class="row">
	            <div class="col-md-6">
	                    <div class="form-group">
	                        <label for="exampleFormControlTextarea1"></label>
													<b>Deixe seu comentário!</b>
	                        <textarea style="resize: none" class="form-control comentae" id="comentae" rows="9" cols="2"></textarea>
	                      </div>
	                        <button class="direitavolver btn btn-success borda-quadrada disabled">Enviar</button>
													<p><i>Você precisa estar logado para fazer comentários</i></p>
	                    </form>
	            </div>
	            <div class="col-md-6">
							<b>Alguns comentários recentes</b>

							<ul class="list-group list-group-flush">
<li class="list-group-item">
<?php
foreach($ecsusfetch as $chave => $valor){
echo '<b>'.$valor["nm_usuario"].'</b>';
echo "<br>";
echo '<p class="comentario">'.$valor["comentario"].'</p>';
echo "<hr>";
}
?>
</li>
</ul>
				<a href="comentarios.php"><button class="direitavolver btn btn-success borda-quadrada ver-com">Todos os Comentários</button></a>
	            </div>
	          </div>
	        </div>
	    </div>

	    <!-- Fontes -->

			<div id="fontes" class="offset">
    <div class="col-12 text-center">
    <h3 class="heading">Envie suas próprias fontes aqui!</h3>
<p><i>Você precisa estar logado para cadastrar fontes.</i></p>
    <h4>A extensão do arquivo precisa estar em .ttf<br><br>
</div>
<div class="container">
    <ul>
<li>Faça o upload em algum receptor de arquivos (ex: MEGA, 4shared);</li><br>
<li>Forneça os dados requisitados;</li><br>
<li>Clique no botão de cadastro e pronto, sua fonte está cadastrada!</li><br>
</ul>
<div class="col-12 text-center">
    <div class="caixa-login p-3">


          <form>
            <div class="form-group">
               <input type="text" class="form-control" id="exampleInputPassword1" name="nomefonte" placeholder="Nome da Fonte">
            </div>
						<div class="form-group">
						<textarea style="resize: none" class="form-control comentae" name="desc" rows="4" cols="2" placeholder="Descrição"></textarea>
						 </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputPassword1" name="linkfonte" placeholder="Link da Fonte">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"><i>Aceito os<a href="termos.pdf" target="_blank"> <u>termos de serviço</u></a> para uso da fonte "ecsus" fonte sustentável.</i></label>
            </div>

            <div class="btn btn-success borda_quadrada btn-fonte disabled">Cadastrar</div>
          </form>
          </div>
					<h4>Veja as fontes cadastradas por outros usuários!</h4>
					<ul class="list-group list-group-flush">
					                  <li class="list-group-item">
															<div class="row">
																<?php
			 			 	 									foreach($fontefetch as $chave => $valor){

																	echo	'<div class="col-md-4">';
			 			 	 										echo '<div class="card" style="width: 18rem;">';
			 			 	 										echo	'<img class="card-img-top img-fluid" src="img/logo.jpg">';
			 			 	 										echo	'<div class="card-body">';
			 			 	 										echo	'<p class="card-text">Nome da Fonte:<b>' .$valor["nome_font"]. '</b><br>';
																	echo	'<p class="card-text">Upado por:<b>' .$valor["nome"]. '</b><br>';

																	echo  $valor["descricao"].'</p>';
																	echo	'Link da Fonte: <b>'.$valor["link"].'</b><br>';
			 			 	 										echo	'</div>';
			 			 	 										echo	'</div>';
			 			 	 										echo '</div>';


			 			 	 									}
			 			 	 								 ?>
	 			 								 </div>
					                 </li>
													 <a href="verfontes.php"><button class="direitavolver btn btn-success borda-quadrada btn-verfontes">Todas as Fontes</button></a>
					                  </ul>

          </div>

</div>
</div>



		<!-- Contato -->
			<div id="contato" class="offset">
			<footer>

			<div class="narrow text-center">
			<div class="col-md-12">
			<p>contato.ecsus@gmail.com</p><br>
			<p>(47) 91234-5678</p><br>
			<a href="https://www.facebook.com/ecsusequipe/" target="_blank"><i class="fab fa-facebook-square"></i></a>
			<a href="https://twitter.com/ecsussenac" target="_blank"><i class="fab fa-twitter-square"></i></a>
			<a href="https://www.instagram.com/ecsus/" target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
			</div>
			<hr class="hr-footer">
			<div class="text-center">
			&copy; ECSUS
			</div>

			</footer>

			</div>
			<!-- End Contact Section -->



		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
	</body>
</html>
