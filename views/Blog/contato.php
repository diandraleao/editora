<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Contato | Editora Paralogike</title>

		<!-- Bootstrap core CSS -->
    	<link href="../../static/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="../../static/css/navbar-static-top.css" rel="stylesheet">
	    <link href="../../static/css/sticky-footer-navbar.css" rel="stylesheet">


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
	            <li><a href="<?= base_url() ?>blog/disciplinas">Disciplinas</a></li>
	            <li><a href="http://ihgs.com.br/"><abbr title="Instituto Histórico e Geográfico de Santos">IHGS</abbr></a></li>
	            <li><a href="#">Vila do Porto</a></li>
	            <li><a href="#">Robo Emmy</a></li>
	            <li class="active"><a href="<?= base_url() ?>blog/contato">Contato</a></li>
	          </ul>
	          
	          <ul class="nav navbar-nav navbar-right">
		      	<li><a href="<?= base_url(); ?>admin">Administrador <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
		      </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	      	
	      <div class="container">
	      	<main>
	      		<h2 class="">Contato</h2>
	      		<hr>
	      		<!-- form -->
	      		<h4 class="text-left">Gostou do trabalho do professor Inácio ou possui alguma dúvida? Entre em contato!</h4>
	      		<br>
	      		<form method="" action="" class="form-horizontal">
	      			<div class="form-group">
	      				<label for="titulo" class="col-md-2 control-label">Nome:</label>
	      				<div class="col-md-8">
	      					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Digite seu nome" pattern="[A-Za-z]" required>
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="data" class="col-md-2 control-label">E-mail:</label>
	      				<div class="col-md-8">
	      					<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" required>
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="arquivo" class="col-md-2 control-label">Mensagem:</label>
	      				<div class="col-md-8">
	      					<textarea class="form-control" rows="3" id="descricao" placeholder="Digite sua mensagem" pattern=".{10,}"></textarea>
	      				</div>
	      			</div>

	      			<div class="col-md-10 text-right">
		      			<input type="reset" class="btn btn-danger" value="Cancelar">
		      			<input type="submit" class="btn btn-primary" value="Enviar">
					</div>
	      		</form>
			</main>
			
			
			<br><br>
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
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>