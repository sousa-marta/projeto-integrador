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
      <li class="breadcrumb-item active" aria-current="page">Esqueceu a senha?</li>
    </ol>
  </nav>
  
  <main class="d-flex justify-content-center align-items-center p-2">
    <form action="" method="post" class="card p-5 col-lg-3 text-center">
      <h4>Esqueceu sua senha?</h4>
      <p>Informe seu e-mail e enviaremos para você as instruções para redefinir sua senha</p>
      <div class="form-group">
        <input type="email" class="mt-2 form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
      </div>
      <button type="submit" class="mt-3 btn btn-redefine-color align-self-center">Redefinir</button>
    </form>
  </main>
</body>
</html>