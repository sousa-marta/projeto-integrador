<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalhes do Curso</title>
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
  <?php include_once('header.php'); ?>
  
  <!-- Breadcrumb  -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="courses.php">Cursos</a></li>
      <li class="breadcrumb-item active" aria-current="page">Hotelaria</li>
    </ol>
  </nav>

  <main>
    <!-- INFORMAÇÕES GERAIS -->
    <section class="course-detail-main-banner">

      <!-- tudo em um container para deixar uma pequena margem dos lados -->
      <div class="container">

        <!-- nome do curso e ofertante do treinamento -->
        <div class="row pt-3">
          <div class="col-12 col-lg-6">
            <h4>Hotelaria</h4>
            <h1>Curso de Atendente</h1>
          </div>
          <div class="col-12 col-lg-6 text-right course-detail-offered-by">
            <h4>oferecido por:</h4>
            <h3>evolke Treinamentos</h3>
          </div>
        </div>

        <div class="row">
          <!-- informações do curso -->
          <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
            <div class="row"> 
              <!-- inscritos e vagas -->
              <div class="col-12 col-lg-6">
                <p><strong>Inscritos:</strong> 2.341</p>
              </div>
              <div class="col-12 col-lg-6">
                <p><strong>Vagas:</strong> 50</p>
              </div>
            </div>
              <div class="row d-flex text-center mt-3"> 
                <!-- cronograma-data -->
                <div class="col-3 border course-detail-schedule-past">
                  <p class="m-0">01/10</p>
                </div>
                <div class="col-3 border course-detail-schedule-past">
                  <p class="m-0">31/10</p>
                </div>
                <div class="col-3 border course-detail-shedule-soon">
                  <p class="m-0">10/11</p>
                </div>
                <div class="col-3 border">
                  <p class="m-0">20/11</p>
                </div>
              </div>
              <div class="row d-flex text-center"> 
                <!-- cronograma-legenda -->
                <div class="col-3">
                  <p class="course-detail-schedule-legend">Abertura</p>
                </div>
                <div class="col-3">
                  <p class="course-detail-schedule-legend">Encerramento Inscrições</p>
                </div>
                <div class="col-3">
                  <p class="course-detail-schedule-legend">Divulgação Selecionados</p>
                </div>
                <div class="col-3">
                  <p class="course-detail-schedule-legend">Início Curso</p>
                </div>
              </div>
            <div class="row pb-5 mt-3"> 
              <!-- botão de inscrição -->
              <button type="submit" class="col-12 btn   btn-secondary">Inscreva-se</button>
            </div>
          </div>
          
          <!-- imagem do ofertante do treinamento -->
          <div class="col-12 col-lg-6 course-detail-provider">
            <img src="img/emp-evolke.jpg" alt="Logo da empresa XPTO de treinamento" class="rounded pb-5 course-detail-logo-img">
          </div>
        </div>
      </div>
    </section>
    
    <!-- INFORMAÇÕES DETALHADAS -->
    <section class="container mt-4 mb-5 px-4">
      <h2 class="pt-4 pb-2">Informações sobre o curso</h2>
      <p>Preparar profissionais para confeccionar e reparar móveis e objetos em madeira. Além disso, você aprenderá a interpretar projetos e especificações em todo o seu processo fabril, através de plantas e especificações técnicas, operando equipamentos manuais e elétricos e observando as normas técnicas de segurança.</p>
      <p><strong>Duração:</strong> 2 semanas</p>
      <p><strong>Requisitos:</strong></p>
      <ul class="px-4">
        <li>Idade mínima de 16 anos.</li>
        <li>Conhecimentos equivalentes ao Ensino Fundamental completo.</li>
      </ul>
    </section>

    <!-- CURSOS SEMELHANTES -->
    <section>
      <!-- div do fundo amarelo -->
      <div class="course-detail-similar-courses-top">
        <div class="container pt-3 pb-5">
          <h2>Cursos Semelhantes</h2>
        </div>
      </div>

      <!-- div do fundo cinza -->
      <div class="course-detail-similar-courses-bottom">
        <div class="container">
          <div class="row d-flex container course-detail-div-cards">

            <!-- 1o card -->
            <div class="col-12 col-md-8 col-lg-4 p-2">
              <div class="course-detail-card">
                <div class="container course-detail-card-title">
                  <p>Hotelaria</p>
                  <h2>Curso para Recepção</h2>
                </div>
                <div class="container d-flex flex-column">
                  <img src="img/emp-direan.png" alt="Logo da empresa XPTO de treinamento" class="align-self-center course-detail-logo-img-alike">
                  <div class="pb-2">
                    <p><strong>Inscritos:</strong> 505</p>
                    <p><strong>Vagas:</strong> 10</p>
                    <p><strong>Inscrição até:</strong> 15/11/2019</p>
                    <p><strong>Início:</strong> 01/12/2019</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- 2o card -->
            <div class="col-12 col-md-8 col-lg-4 p-2">
              <div class="course-detail-card">
                <div class="container course-detail-card-title">
                  <p>Gastronomia</p>
                  <h2>Curso de Auxiliar</h2>
                </div>
                <div class="container d-flex flex-column">                
                  <img src="img/emp-cookinglogo.png" alt="Logo da empresa XPTO de treinamento" class="align-self-center course-detail-logo-img-alike">
                  <div class="pb-2">
                    <p><strong>Inscritos:</strong> 505</p>
                    <p><strong>Vagas:</strong> 10</p>
                    <p><strong>Inscrição até:</strong> 15/11/2019</p>
                    <p><strong>Início:</strong> 01/12/2019</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- 3o card -->
            <div class="col-12 col-md-8 col-lg-4 p-2">
              <div class="course-detail-card">
                <div class="container course-detail-card-title">
                  <p>Serviços Gerais</p>
                  <h2>Curso de Marcenaria</h2>
                </div>
                <div class="container d-flex flex-column">
                  <img src="img/emp-marcenaria.jpg" alt="Logo da empresa XPTO de treinamento" class="align-self-center course-detail-logo-img-alike">
                  <div class="pb-2">
                    <p><strong>Inscritos:</strong> 505</p>
                    <p><strong>Vagas:</strong> 10</p>
                    <p><strong>Inscrição até:</strong> 15/11/2019</p>
                    <p><strong>Início:</strong> 01/12/2019</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </main>

  <!-- FOOTER -->
  <?php include_once("footer.php"); ?>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>