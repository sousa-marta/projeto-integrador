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
</head>
<body>
  <!-- Header -->
  <?php include_once("header.php"); ?>
  
  <!-- Navegação Breadcrumb  -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cursos</li>
    </ol>
  </nav>

  <main>
    <div class="row no-gutters">
      <!-- Banner -->
      <section class="courses-g-banner col-md-12 d-flex justify-content-center align-items-center">
        <h1>Cursos</h1>
      </section>
 
      <!-- Conteúdo Central da Página -->
      <div class="col-lg-9 col-md-8 order-2">

        <!-- Campo Pesquisa por Curso -->
        <section class="courses-g-search border-bottom">
          <h2 class="my-3">Pesquise por Curso</h2>
          <form action="" class="form-inline">
            <div class="form-group mx-3">
              <label for="searchCourse"></label>
              <input class="form-control" type="text" name="" id="searchCourse" placeholder="Pesquise por curso">
            </div>
            <button type="submit" class="btn btn-light">Assinar</button>
          </form>
        </section>
        
        <!-- Categorias de Cursos Imagens -->
        <section class="row justify-content-center my-4">
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Idiomas</h4>
              <img src="img/courses-g-languages.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Saúde</h4>
              <img src="img/courses-g-health.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Beleza</h4>
              <img src="img/courses-g-beauty.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Programação</h4>
              <img src="img/courses-g-programming.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Direção</h4>
              <img src="img/courses-g-car.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          
          
        </section>
      </div>

      <!-- Barra de Navegação Lateral -->
      <aside class="col-lg-3 col-md-4 order-1 courses-g-aside">
        <div class="d-flex flex-column p-5">
          <h2>Categorias</h2>
          <h4>Idiomas</h3>
          <ul>
            <li>Portugês</li>
            <li>Espanhol</li>
            <li>Inglês</li>
          </ul>
          <h4>Saúde</h3>
          <ul>
            <li>Cuidador de Idoso</li>
            <li>Babá</li>
            <li>Massagista</li>
          </ul>
          <h4>Beleza</h3>
          <ul>
            <li>Manicure</li>
            <li>Cabelereira</li>
            <li>Esteticista</li>
          </ul>
          <h4>Programação</h3>
          <ul>
            <li>Front-end</li>
            <li>Back-end</li>
            <li>Python</li>
          </ul>
          <h4>Direção</h3>
          <ul>
            <li>Conhecimentos Teóricos</li>
            <li>Reciclagem de Motorista</li>
          </ul>
        </div>
      </aside>
      
    </div>

  </main>




  



  <!-- Footer -->
  <?php include_once("footer.php") ?>

</body>
</html>