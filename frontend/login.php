<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>
  </nav>
  
  <main class="d-flex justify-content-center align-items-center p-2 mb-3">
    <form action="" method="post" class="card p-5">
      <div class="row mb-5">
        <p class="login-indicator rounded p-2 mr-2 triangle-isosceles">Faça login na sua conta</p>
        <button type="button" class="btn btn-primary" onclick="location.href='register.php'">Ainda não tem conta? Cadastre-se agora!</button>
      </div>
      <div class="form-group">
        <label for="userEmail">E-mail</label>
        <input type="text" class="form-control" name="userEmail" id="userEmail" required>
      </div>
      <div class="form-group">
        <label for="userPassword">Senha</label>
        <input type="password" class="form-control" name="userPassword" id="userPassword" required>
      </div>
      <!-- Trocar o type para submit após o sprint 2 -->
      <button type="button" class="btn btn-primary col-12" onclick="location.href='user-page.php'">Entrar</button>
      <p class="text-center mt-2"><a href="forgotten-password.php">Esqueceu sua senha?</a></p>
    </form>
  </main>
  
  <?php include_once('footer.php'); ?>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>