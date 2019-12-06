<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="icon" href="img/favicon.ico">
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light menu fixed-top">
            <div class="col-1 col-lg-3 px-0 logo-header row align-items-center">
            <a href="index.php" role="logo"><img class="logo-img" src="img/a_logo-img_turquesa-dark.png" alt="Logo da Oppy: desenho de árvore com pessoa de pé embaixo dos galhos"></a>
            <a href="index.php" role="logo"><img class="logo-name" src="img/b_logo-nome_turquesa-dark-white.png" alt="Oppy"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menu recolhido">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="px-0 collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
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
                <a id="register-link" class="nav-link" href="register.php"><span id="register-link" class="fa">&#xf2b9;</span> Cadastre-se</a>
                </li>
                <button type="button" class="btn btn-primary btn-login" data-toggle="modal" data-target="#login-modal" href="#">Login</button>
            </ul>
            </div>
        </nav>
    </header>

    <!-- Modal do Login -->
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
                <button type="submit" class="btn btn-primary col-lg-12">Enviar</button>
            </footer>
            </dialog>
        </div>
    </div>

    <main>
        <!-- Conteúdo do Site -->
        @yield('content');
    
    </main>

    <!-- Footer -->
    <footer class="container-fluid">
        <section class="row justify-content-center">
            <div class="col-md-5 text-center">
                <img src="img/c_logo-img_white.png" alt="Logo da Oppy: desenho de árvore com pessoa de pé embaixo dos galhos e o nome Oppy embaixo">
                <p>Copyright &#169; Oppy 2019</p>
            </div>
        </section>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>