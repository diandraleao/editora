<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Listar crônicas | Editora Paralogike</title>

		<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    	<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="https://paralogike-disquarepants.c9users.io/static/js/bootstrap.min.js"></script>
	    
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="https://paralogike-disquarepants.c9users.io/static/js/ie10-viewport-bug-workaround.js"></script>

	    <!-- Custom styles for this template -->
	    <link href="https://paralogike-disquarepants.c9users.io/static/css/navbar.css" rel="stylesheet">

	    <style>
	    	.bg-success {
	    		padding: 5px;
	    	}
	    </style>
	</head>
	<body>
		<div class="container">
			      <!-- Static navbar -->
	      <?php include("menu.php") ?>

	      	<main>
	      		<br>
	      		<h2 class="text-success text-center">Cadastro efetuado com sucesso!</h2>
	      		<br>
				<div class="row">
		      		<div class="col-md-12 col-md-offset-4"> 			
			      	<a class="btn btn-default" href="<?= base_url();?>admin/<?= $adicionar;?>">Adicionar outro registro</a>
			      	<a class="btn btn-default" href="<?= base_url();?>admin/<?= $listar;?>">Listar todos registros</a>
		      		</div>
	      		</div>
	      		<br>
	      		<div class="row">
	      			<div class="col-md-12">
	      				<p class="text-center"><a href="<?= base_url(); ?>admin">Voltar à página inicial</a></p>
	      			</div>
	      		</div>
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