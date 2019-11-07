<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cursos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
  <!-- Header -->
  <?php include_once("header.php"); ?>
  
  <!-- Navegação Breadcrumb  -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cursos</li>
    </ol>
  </nav>

  <main>
    <div class="row no-gutters">
      <!-- Banner -->
      <section class="pages-title-bg d-flex justify-content-center align-items-center">
        <h1>Cursos</h1>
      </section>
 
      <!-- Conteúdo Central da Página -->
      <div class="col-lg-9 col-md-8 order-2">
      
        <!-- Categorias de Cursos Imagens -->
        <section class="row justify-content-center my-4">
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Idiomas</h5>
              <img src="img/courses-g-languages.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Saúde</h5>
              <img src="img/courses-g-health.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Beleza</h5>
              <img src="img/courses-g-beauty.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Programação</h5>
              <img src="img/courses-g-programming.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Direção</h5>
              <img src="img/courses-g-car.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          
          
        </section>
      </div>

      <!-- Barra de Navegação Lateral -->
      <aside class="col-lg-3 col-md-4 order-1 p-3">

        <div class="list-group-item row form-group list-green text-white">
            <h5><i class="fa fa-search"></i> Filtros</h5>
            <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- Font Awesome CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        </div>

        <div class="list-group-item row form-group bg-light"></div>


        <div class="list-group-item row form-group bg-secondary text-white">
            <h5>Área de Atuação</h5>
        </div>

        <div class="list-group-item row form-group bg-light">
          <div class="container">

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading mt-2">
                <h5 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1"><i class="far fa-caret-square-down"></i>  Idiomas</a>
                  </h5>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="#portugues">Português</a></li>
                    <li class="list-group-item"><a href="#ingles">Inglês</a></li>
                    <li class="list-group-item"><a href="#espanhol">Espanhol</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading mt-2">
                  <h5 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2"><i class="far fa-caret-square-down"></i>  Hotelaria</a>
                  </h5>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="#camareiro">Camareiro</a></li>
                    <li class="list-group-item"><a href="#recepcionista">Recepcionista</a></li>
                    <li class="list-group-item"><a href="#mensageiro">Mensageiro</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading mt-2">
                  <h5 class="panel-title">
                    <a data-toggle="collapse" href="#collapse3"><i class="far fa-caret-square-down"></i>  Programação</a>
                  </h5>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <ul class="list-group">
                    <li class="list-group-item"><a href="#csshtlm">CSS + HTML</a></li>
                    <li class="list-group-item"><a href="#phyton">Phyton</a></li>
                    <li class="list-group-item"><a href="#logica">Lógica de Programação</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-group-item row form-group p-3 bg-secondary">
          <div class="form-group ">
            <label class="font-weight-bold text-light" for="busca">Busca por Palavra Chave</label>
            <input type="text" class="form-control" id="busca" placeholder="Procurar...">
          </div>
          <h5 class="btn btn-primary"><i class="fa fa-search"></i> Procurar Cursos</h5>
        </div>
      </aside>
      
    </div>

  </main>



  <!-- Footer -->
  <?php include_once("footer.php") ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="https://kit.fontawesome.com/e75d4b0fd5.js" crossorigin="anonymous"></script>

</body>
</html>