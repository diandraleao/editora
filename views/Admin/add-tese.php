<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Adicionar tese | Editora Paralogike</title>

		<!-- Bootstrap core CSS -->
    	<link href="../../static/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    	<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="https://paralogike-disquarepants.c9users.io/static/js/bootstrap.min.js"></script>
	    
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="https://paralogike-disquarepants.c9users.io/static/js/ie10-viewport-bug-workaround.js"></script>

	    <!-- Custom styles for this template -->
	    <link href="https://paralogike-disquarepants.c9users.io/static/css/navbar.css" rel="stylesheet">


	</head>
	<body>
		<div class="container">
			<img src="../../static/img/logo.jpg" alt="logo editora paralogike" class="img-responsive logo center-block ">
			      <!-- Static navbar -->
	      	<?php include("menu.php") ?>

	      	<main>
	      		<h2 class="">Adicionar tese</h2>
	      		<hr>
	      		<!-- form -->
	      		<form method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>admin/adicionartese" class="form-horizontal">
	      			
	      			<input type="hidden" name="tipo" value="tese">
	      			
	      			<div class="form-group">
	      				<label for="titulo" class="col-md-2 control-label">Título:</label>
	      				<div class="col-md-8">
	      					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Digite o título" required>
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="autor" class="col-md-2 control-label">Autor:</label>
	      				<div class="col-md-8">
	      					<input type="text" class="form-control" name="autor" id="autor" placeholder="Digite o autor" required>
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="orientador" class="col-md-2 control-label">Orientador:</label>
	      				<div class="col-md-8">
	      					<input type="text" class="form-control" name="orientador" id="orientador" placeholder="Digite o orientador" required>
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="coorientador" class="col-md-2 control-label">Co-Orientador:</label>
	      				<div class="col-md-8">
	      					<input type="text" class="form-control" name="coorientador" id="coorientador" placeholder="Digite o co-orientador" >
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="data" class="col-md-2 control-label">Data:</label>
	      				<div class="col-md-8">
	      					<input type="date" class="form-control" name="data" id="data" placeholder="dd/mm/aaaa">
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="descricao" class="col-md-2 control-label">Descrição:</label>
	      				<div class="col-md-8">
	      					<textarea class="form-control" name="descricao" rows="3" id="descricao" placeholder="Digite a descrição"></textarea>
	      				</div>
	      			</div>

	      			<div class="form-group">
	      				<label for="arquivo" class="col-md-2 control-label">Arquivo PDF:</label>
	      				<div class="col-md-8">
	      					<input type="file" class="form-control" name="arquivo" id="arquivo" accept="application/pdf">
	      				</div>
	      			</div>

	      			<div class="col-md-10 text-right">
		      			<input type="reset" class="btn btn-danger" value="Cancelar">
		      			<input type="submit" class="btn btn-primary" value="Salvar">
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


	</body>
</html>