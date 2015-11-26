<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Listar teses | Editora Paralogike</title>

		<!-- Bootstrap core CSS -->
    	<link href="https://paralogike-disquarepants.c9users.io/static/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	    <!-- Custom styles for this template -->
	    <link href="https://paralogike-disquarepants.c9users.io/static/css/navbar.css" rel="stylesheet">
	    
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="https://paralogike-disquarepants.c9users.io/static/js/bootstrap.min.js"></script>
	    
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="https://paralogike-disquarepants.c9users.io/static/js/ie10-viewport-bug-workaround.js"></script>
	    
	   <script type="text/javascript">

		    function send_data(campo){
	
				var xmlhttp = new XMLHttpRequest();
				var url = "<?= base_url(); ?>admin/deletartese/" + $(campo).attr("data-id-excluir");//.getAttribute('data-id-excluir');

				xmlhttp.onreadystatechange = function() {
				    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				        //var js = JSON.parse(xmlhttp.responseText);
				   		//alert(js);
				   		$(campo).parent().parent().fadeOut(1000, function(){
				   			$(this).remove();
				   		});
				   		//$(campo).parent().parent().remove();
				    }
				}

				xmlhttp.open("GET", url, true);
				xmlhttp.send();	

			}

	    </script>
	    <style>

	    	.editar, .excluir {

	    		cursor: pointer;
	    		color: blue;
	    	}

	    	.editar:hover, .excluir:hover {

	    		text-decoration: underline;
	    	}

	    </style>


	</head>
	<body>
		<div class="container">
			<img src="../../static/img/logo.jpg" alt="logo editora paralogike" class="img-responsive logo center-block ">
			      <!-- Static navbar -->
	      <?php include("menu.php") ?>

	      	<main>
	      		<h2 class="">Listar teses</h2>
	      		<hr>
	      		<div class="row">
	      			<div class="col-md-12">
			      		<div class="table-responsive">
				      		<table class="table table-condensed ">
				      			<thead>
				      				<tr>
					      				<th>#</th>
					      				<th>Título</th>
					      				<th>Data</th>
					      				<th>Excluir</th>
				      				</tr>
				      			</thead>
				      			<tbody>
										
								    <?php 
									
										foreach($publicacoes as $publicacao){
												
											echo "<tr> 
												<td>" . $publicacao['id_publicacao'] . "</td> <td>" . $publicacao['ds_titulo_publicacao'] . "</td> <td>" . $publicacao['dt_publicacao'] . "</td> <td><span class='excluir' onclick='send_data(this)' data-id-excluir='" . $publicacao['id_publicacao'] . "'>Excluir</span></td> 
											</tr>";
											
										}
									
									?>
									
				      			</tbody>

				      		</table>
			      		</div>
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