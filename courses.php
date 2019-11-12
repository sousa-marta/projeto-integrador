<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cursos</title>
  <link rel="icon" href="img/favicon.ico">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Header -->
  <?php include_once("header.php"); ?>
  
  <!-- Breadcrumb  -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cursos</li>
    </ol>
  </nav>

  <main>
    <div class="row">
      <!-- Banner -->
      <section class="pages-title-bg d-flex justify-content-center align-items-center">
        <h1>Cursos</h1>
      </section>
 
      <!-- Conteúdo Central da Página -->
      <section class="col-lg-9 order-2">
      
        <!-- Categorias de Cursos Imagens -->
        <div class="row justify-content-center my-4">
          <div class="col-lg-5 col-sm-6 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Idiomas</h5>
              <img src="img/courses-g-languages.jpg" aria-hidden="true" alt="" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Saúde</h5>
              <img src="img/courses-g-health.jpg"aria-hidden="true" alt="" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Beleza</h5>
              <img src="img/courses-g-beauty.jpg" aria-hidden="true" alt="" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Programação</h5>
              <img src="img/courses-g-programming.jpg" aria-hidden="true" alt="" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-sm-6 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h5 class="card-title text-center py-2">Direção</h5>
              <img src="img/courses-g-car.jpg" aria-hidden="true" alt="" class="card-img-bottom">
            </div>
          </div>          
        </div>
      </section>

      <!-- Barra de Navegação Lateral -->      
      <aside class="complete-menu col-md-4 col-lg-3 order-1 p-3">
        <div class="list-group-item row list-green text-white">
          <h5 class="text-center">Filtros</h5>
        </div>

        <div class="list-group-item row form-group bg-secondary text-white border-top">
            <h5>Área de Atuação</h5>
        </div>

        <div class="list-group-item row form-group bg-light">
          <div class="container">

            <!-- Seção com Collapses das Áreas de Cursos -->
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading mt-2">
                  <h5 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1"><i class="fa fa-caret-square-o-down"></i> Idiomas</a>
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
                    <a data-toggle="collapse" href="#collapse2"><i class="fa fa-caret-square-o-down"></i> Hotelaria</a>
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
                    <a data-toggle="collapse" href="#collapse3"><i class="fa fa-caret-square-o-down"></i> Programação</a>
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
          <button type="button" class="btn btn-secondary" onclick="location.href='course-detail.php'"><i class="fa fa-search"></i> Procurar Cursos</button>
        </div>
      </aside>

      <aside class="container keyword-search">
        <div class="list-group-item row form-group col-12 mt-3 p-3 bg-secondary">
          <div class="form-group text-center">
            <label class="font-weight-bold text-light" for="busca">Busca por Palavra Chave</label>
            <input type="text" class="form-control" id="busca" placeholder="Procurar...">
          </div>
          <button type="button" class="btn btn-secondary col-12" onclick="location.href='course-detail.php'"><i class="fa fa-search"></i> Procurar Cursos</button>
        </div>
      </aside>
    </div>
  </main>

  <!-- Footer -->
  <?php include_once("footer.php") ?>

  <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>