<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalhes do Curso</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- CABEÇALHO -->
  <?php include_once('header.php'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Home</a></li>
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Cursos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Hotelaria</li>
    </ol>
  </nav>
  
  <!-- INFORMAÇÕES GERAIS -->
  <div class="course-detail-background-light-green course-detail-font-white-all">

    <!-- tudo em um container para deixar uma pequena margem dos lados -->
    <div class="container">

      <!-- nome do curso e ofertante do treinamento -->
      <div class="row pt-3">
        <div class="col-6">
          <p class="course-detail-font-size-15">Hotelaria</p>
          <h1 class="course-detail-font-size-30">Curso de Atendente</h1>
        </div>
        <div class="col-6 text-right">
          <p class="course-detail-font-size-15">oferecido por:</p>
          <p class="course-detail-font-size-20">evolke Treinamentos</p>
        </div>
      </div>

      <div class="row">
        <!-- informações do curso -->
        <div class="col-6">
          <div class="row"> <!-- inscritos e vagas -->
            <div class="col-6"><p><b>Inscritos:</b> 2.341</p></div>
            <div class="col-6"><p><b>Vagas:</b> 50</p></div>
          </div>
          <div class="row d-flex text-center"> <!-- cronograma-data -->
            <div class="col-3 border course-detail-background-dark-gray"><p class="m-0">01/10</div>
            <div class="col-3 border course-detail-background-dark-gray"><p class="m-0">31/10</div>
            <div class="col-3 border course-detail-background-dark-yellow"><p class="m-0">10/11</div>
            <div class="col-3 border"><p class="m-0">20/11</div>
          </div>
          <div class="row d-flex text-center"> <!-- cronograma-legenda -->
            <div class="col-3"><p>Abertura</p></div>
            <div class="col-3"><p>Encerramento Inscrições</p></div>
            <div class="col-3"><p>Divulgação Selecionados</p></div>
            <div class="col-3"><p>Início Curso</p></div>
          </div>
          <div class="row pb-3"> <!-- botão escrever -->
            <button type="button" class="col-12 btn btn-dark">Inscrever</button>
          </div>
        </div>
        
        <!-- imagem do ofertante do treinamento -->
        <div class="col-6 d-flex justify-content-end align-items-center">
          <img src="img/evolke.jpg" alt="empresa-treinamento" class="rounded pb-5">
        </div>
      </div>

    </div>

  </div>
  
  

  <!-- INFORMAÇÕES DETALHADAS -->

  <!-- CURSOS SEMELHANTES -->

  <!-- FOOTER -->


</body>
</html>