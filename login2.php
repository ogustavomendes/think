<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN :: Think</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
	      <div style="padding-bottom: 130px;" class="logo">
	      	<a href="index.php"><img width="100" src="./assets/images/logo.jpg"></a>
	      </div>
            <form method="_POST" action="#">
              <div class="form-group">
                <label for="email">Usuário</label>
                <input type="email" name="usuario" id="usuario" class="form-control" placeholder="seu nome">
              </div>
              <div class="form-group mb-4">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="sua senha aqui">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="button" value="Entrar">
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>

  <?php 


  	$user = $_REQUEST['usuario'];
  	$senha = $_REQUEST['password'];

  	if ($user && $senha == 'gustavo' && '123456789') {
  		header(Location('index.php'));
  	}


   ?>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
