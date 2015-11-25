
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login | Editora Paralogike</title>

    <!-- Bootstrap core CSS -->
    <link href="../../static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../static/css/signin.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
    .form-signin {
      margin-top: 5%;
    }
  </style>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="<?= base_url(); ?>login/auth">
        <h2 class="form-signin-heading text-center">Área administrativa</h2>
        <label for="user" class="sr-only">Usuário</label>
        <input type="text" id="user" name="login" class="form-control" placeholder="Nome de usuário" required autofocus>
        <label for="pass" class="sr-only">senha</label>
        <input type="password" id="pass" name="senha" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-default btn-block" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->


  </body>
</html>
