<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contato</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
  </nav>
  
  <main class="container-fluid remove-padding">
    <h1 class="contact-bg d-flex justify-content-center align-items-center">Contato</h1>
    <div id="remove-margin" class="row align-self-center justify-content-center">
    <form action="" method="post" class="card p-5">
      <div class="form-group">
        <label for="userEmail">E-mail</label>
        <input type="text" class="form-control" name="userEmail" id="userEmail" required>
      </div>
      <div class="form-group">
        <label for="userPassword">Senha</label>
        <input type="password" class="form-control" name="userPassword" id="userPassword" required>
      </div>
      <button type="submit" class="btn btn-color col-12">Entrar</button>
      <p class="text-center mt-2"><a href="#">Esqueceu sua senha?</a></p>
    </form>
    </div>
  </main>
</body>
</html>