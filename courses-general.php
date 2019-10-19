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

  <main class="container-fluid">
    <div class="row">
      <!-- Banner -->
      <section class="courses-g-banner col-md-12 d-flex justify-content-center align-items-center">
        <h1>Cursos</h1>
      </section>
 
      <!-- Conteúdo Central da Página -->
      <div class="col-md-9 order-2">

        <!-- Campo Pesquisa por Curso -->
        <section class="courses-g-search">
          <h2>Pesquise por Curso</h2>
          <form action="" class="form-inline">
            <div class="form-group mx-3">
              <label for="searchCourse"></label>
              <input class="form-control" type="text" name="" id="searchCourse" placeholder="Pesquise por curso">
            </div>
            <button type="submit" class="btn btn-light">Assinar</button>
          </form>
        </section>
        
        <!-- Categorias de Cursos Imagens -->
        <section class="row">
          <div>
    
          </div>
        </section>
      </div>

      <!-- Barra de Navegação Lateral -->
      <div class="col-md-3 order-1 ">
        <aside class=" courses-g-aside ">
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
          <h4>Direção</h3>
          <ul>
            <li>Conhecimentos Teóricos</li>
            <li>Reciclagem de Motorista</li>
          </ul>
        </aside>
      </div>
    </div>

  </main>




  



  <!-- Footer -->
  <?php include_once("footer.php") ?>

</body>
</html>