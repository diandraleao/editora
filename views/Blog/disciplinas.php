<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>Disciplinas | Editora Paralogike</title>

		<!-- Bootstrap core CSS -->
    	<link href="https://paralogike-disquarepants.c9users.io/static/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="https://paralogike-disquarepants.c9users.io/static/css/navbar-static-top.css" rel="stylesheet">
	    <link href="https://paralogike-disquarepants.c9users.io/static/css/sticky-footer-navbar.css" rel="stylesheet">	    

	    <style>
	    	strong {
	    		font-weight: normal;
	    	}
	    	section .media{
				background-color: #EBEBEB;
				padding: 1em;
			}
			/*ul li {list-style-type: circle;}*/
	    </style>

	</head>

	<body>
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?= base_url() ?>blog/index">Prof. João Inácio</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class=""><a href="<?= base_url() ?>blog/index">Home</a></li>
	            <li class=""><a href="<?= base_url() ?>blog/sobre">Lógica Paraconsistente</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publicações <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	              	<li class="dropdown-header">Acadêmicas</li>
	              	<li><a href="#">Dissertações</a></li>
	              	<li><a href="#">Teses</a></li>
	              	<li role="separator" class="divider"></li>
	              	<li class="dropdown-header">Científicas</li>
	              	<li><a href="#">Artigos</a></li>
	              	<li><a href="#">Capítulos</a></li>
	              	<li role="separator" class="divider"></li>
	              	<li class="dropdown-header">Literárias</li>
	              	<li><a href="#">Contos</a></li>
	              	<li><a href="#">Crônicas</a></li>
	              	<li><a href="#">Bits & Bites</a></li>
	              </ul>
	            </li>
	            <li class="active"><a href="<?= base_url() ?>blog/disciplinas">Disciplinas</a></li>
	            <li><a href="http://ihgs.com.br/"><abbr title="Instituto Histórico e Geográfico de Santos">IHGS</abbr></a></li>
	            <li><a href="#">Vila do Porto</a></li>
	            <li><a href="#">Robo Emmy</a></li>
	            <li class=""><a href="<?= base_url() ?>blog/contato">Contato</a></li>
	          </ul>

	          <ul class="nav navbar-nav navbar-right">
		      	<li><a href="#">Administrador <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
		      </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

		<div class="container">
		    <main>
				<h3>Disciplinas</h3>
				<hr>

				<p>Escolha uma disciplina e clique para ver seu conteúdo disponível</p>
				<!-- Listar Disciplinas-->
				<ul>
					<li class="text-uppercase">Arquitetura de Computadores</li>
						<ul>
							<li><a href="">Aula 1</a></li>
							<li><a href="">Aula 2</a></li>
							<li><a href="">Aula 3</a></li>
							<li><a href="">Leitura Complementar I</a></li>
							<li><a href="">Exercícios - parte 1</a></li>
							<li><a href="">Exercícios - parte 2</a></li>
							<li><a href="">Exercícios - parte 3</a></li>
						</ul>
					<br>
					<li class="text-uppercase">Eletrônica I</li>
						<ul>
							<li><a href="">Exercícios</a></li>
						</ul>
					<br>
					<li class="text-uppercase">Dispositivos e Circuitos Eletrônicos</li>
						<ul>
							<li><a href="">Exercício</a></li>
						</ul>
					<br>
					<li class="text-uppercase">Projetos de graduação I e II (TCC)</li>
						<ul>
							<li><a href="">Modos de Avaliação</a></li>
							<li><a href="">Metodologia para elaboração da versão Final</a></li>
						</ul>

				</ul>
			</main>

			<br>
			<hr>
			<footer class="row">
				<div class="container">
					<p class="text-center text-muted">©2015 Copyright Diandra e Henrique - Todos os direitos reservados.</p>
				</div>
			</footer>
		</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>