<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
</body>
</html>

<header class="container-fluid fixed-top">

  <div class="col-12 menu">
    <div class="row">
      <div class="col-2 logo-header">
        <a href="index.php"><img class="logo-mato" src="img/a_logo-img_turquesa-dark.png" alt="imagem-logo-oppy"></a>
        <a href="index.php"><img class="logo-logotipo" src="img/b_logo-nome_turquesa-dark-white.png" alt="nome-logo-oppy"></a>
      </div>
      <nav class="col-10 d-flex align-items-center justify-content-end">
        <button class="navbar-toggler dropdown-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar">
          &#9776;
        </button>

        <div class="collapse navbar-collapse navbar-toggleable-xs" id="collapseNavbar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php"><i style='font-size:12px' class='fa'>&#xf015;</i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about.php"><i style="font-size:12px" class="fa">&#xf0c0;</i> Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="courses.php"><i style='font-size:12px' class='fa'>&#xf19d;</i> Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="opportunities.php"><i style='font-size:12px' class='fa'>&#xf0b1;</i> Oportunidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="support.php"><i style='font-size:12px' class='fa'>&#xf004;</i> Apoio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contribute.php"><i style='font-size:12px' class='fa'>&#xf155;</i> Contribua</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php"><i style='font-size:12px' class='fa'>&#xf086;</i> Contato</a>
            </li>
            <li class="nav-item">
              <a id="register-link" class="nav-link" href="register.php"><i style='font-size:12px' class='fa'>&#xf2b9;</i> Cadastre-se</a>
            </li>
            <div class="nav-item">
              <button type="button" class="btn btn-nav btn-sm" data-toggle="modal" data-target="#login-modal" href="#">Login</button>
            </div>
          </ul>
        </div>
      </nav>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="login-modal">Faça login na sua conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form>
          <div class="form-group">
            <label for="userEmail">E-mail</label>
            <input type="email" class="form-control"  name="userEmail" id="userEmail" placeholder="Digite o e-mail cadastrado" required>
          </div>
          <div class="form-group">
            <label for="userPass">Senha</label>
            <input type="password" class="form-control" id="userPass" name="userPass" placeholder="Digite a senha cadastrada" required>
          </div>
          <div class="form-group">
            <p class="text-center mt-2"><a href="forgotten-password.php">Esqueceu sua senha?</a></p>
          </div>
        </form>
      </main>
      <footer class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn col-lg-12">Enviar</button>
      </footer>
    </dialog>
  </div>
</div>

</header>