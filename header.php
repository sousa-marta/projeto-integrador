<header class="container-fluid fixed-top">
  <div class="col-12 menu">
    <div class="row">
      <div class="col-2 logo-header">
        <a href="index.php"><img class="logo-mato" src="img/a_logo-img_turquesa-dark.png" alt="imagem-logo-oppy"></a>
        <a href="index.php"><img class="logo-logotipo" src="img/b_logo-nome_turquesa-dark-white.png" alt="nome-logo-oppy"></a>
      </div>
      <nav class="navbar col-10 d-flex align-items-center justify-content-end">
        <button class="navbar-toggler dropdown-toggler d-none d-md-block" type="button" data-toggle="collapse" data-target="#collapseNavbar">
          &#9776;  
        </button>

        <div class="navbar-toggleable-xs" id="collapseNavbar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about.php">Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="courses.php">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="opportunities.php">Oportunidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="support.php">Apoio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contribute.php">Contribua</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contato</a>
            </li>
            <li class="nav-item">
              <a id="register-link" class="nav-link" href="register.php">Cadastre-se</a>
            </li>
            <button type="button" class="btn" data-toggle="modal" data-target="#login-modal" href="#">Login</button>
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