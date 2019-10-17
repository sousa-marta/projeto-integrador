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
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cadastra-se</li>
    </ol>
  </nav>
  
  <main class="d-flex justify-content-center align-items-center p-2">
    <form action="" method="post" class="card p-5 col-lg-4">
      <h3>É uma alegria poder ajudar você!</h3>
      <p>Crie uma nova conta informando os dados abaixo</p>
      <div class="form-group">
        <label for="userEmail">Nome completo</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Nome completo" required>
      </div>
      <div class="form-group">
        <label for="userEmail">E-mail</label>
        <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
      </div>
      <button type="submit" class="btn btn-redefine-color align-self-center">Criar conta gratuitamente</button>
    </form>
  </main>
</body>
</html>