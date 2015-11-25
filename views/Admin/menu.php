	<nav class="navbar navbar-default">
		        <div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		          </div>
		          <div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		              <li class=""><a href="<?= base_url() ?>admin">Home</a></li>
		              <li class="dropdown ">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artigos <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="<?= base_url() ?>admin/listarartigos"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="<?= base_url() ?>admin/adicionarartigo"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>
						<!--
		              <li class="dropdown hidden-all">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bits & Bites <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="listar-bitsbites.html"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="add-bitsbites.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>

		              <li class="dropdown hidden-all">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Capítulos <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="listar-capitulos.html"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="add-capitulo.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>

		              <li class="dropdown hidden-all">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contos <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="listar-contos.html"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="add-conto.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>

		              <li class="dropdown hidden-all">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crônicas <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="listar-cronicas.html"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="add-cronica.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>

		              <li class="dropdown hidden-all">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Disciplinas <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="listar-disciplinas.html"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="add-disciplina.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>
						-->
		              <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dissertações <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="<?= base_url() ?>admin/listardissertacoes"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="<?= base_url() ?>admin/adicionardissertacao"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>

		              <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teses <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                  <li><a href="<?= base_url() ?>admin/listarteses"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="<?= base_url() ?>admin/adicionartese"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
		                </ul>
		              </li>

		            </ul><!--/. nav -->

		            <ul class="nav navbar-nav navbar-right">
		              <li><a href="<?= base_url() ?>admin/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
	      	</nav>
