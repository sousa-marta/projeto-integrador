<header>
  <nav class="navbar navbar-expand-lg navbar-light menu fixed-top">
    <div class="col-2 pr-0 pl-0 logo-header row align-items-center">          
      <a href="index.php"><img class="logo-mato" src="img/a_logo-img_turquesa-dark.png" alt="imagem-logo-oppy"></a>
      <a href="index.php"><img class="logo-logotipo" src="img/b_logo-nome_turquesa-dark-white.png" alt="nome-logo-oppy"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"><span class="fa">&#xf015;</span> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php"><span class="fa">&#xf0c0;</span> Quem Somos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="courses.php"><span class="fa">&#xf19d;</span> Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="opportunities.php"><span class="fa">&#xf0b1;</span> Oportunidades</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="support.php"><span class="fa">&#xf004;</span> Apoio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contribute.php"><span class="fa">&#xf155;</span> Contribua</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><span class="fa">&#xf086;</span> Contato</a>
        </li>
        <li class="nav-item">
          <a id="register-link" class="nav-link" href="register.php"><span class="fa">&#xf2b9;</span> Cadastre-se</a>
        </li>
        <button type="button" class="btn" data-toggle="modal" data-target="#login-modal" href="#">Login</button>
      </ul>
    </div>
</nav>
</header>

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