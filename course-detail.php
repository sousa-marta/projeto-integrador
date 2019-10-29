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
          <div class="col-6">
            <h4>Hotelaria</h4>
            <h1>Curso de Atendente</h1>
          </div>
          <div class="col-6 text-right">
            <h4>oferecido por:</h4>
            <h3>evolke Treinamentos</h3>
          </div>
        </div>

        <div class="row">
          <!-- informações do curso -->
          <div class="col-6 d-flex flex-column justify-content-between">
            <div class="row"> <!-- inscritos e vagas -->
              <div class="col-6"><p><b>Inscritos:</b> 2.341</p></div>
              <div class="col-6"><p><b>Vagas:</b> 50</p></div>
            </div>
            <div>
              <div class="row d-flex text-center mt-3"> <!-- cronograma-data -->
                <div class="col-3 border course-detail-schedule-past"><p class="m-0">01/10</div>
                <div class="col-3 border course-detail-schedule-past"><p class="m-0">31/10</div>
                <div class="col-3 border course-detail-shedule-soon"><p class="m-0">10/11</div>
                <div class="col-3 border"><p class="m-0">20/11</div>
              </div>
              <div class="row d-flex text-center"> <!-- cronograma-legenda -->
                <div class="col-3"><p>Abertura</p></div>
                <div class="col-3"><p>Encerramento Inscrições</p></div>
                <div class="col-3"><p>Divulgação Selecionados</p></div>
                <div class="col-3"><p>Início Curso</p></div>
              </div>
            </div>
            <div class="row pb-5 mt-3"> <!-- botão escrever -->
              <button type="button" class="col-12 btn btn-dark">Inscrever</button>
            </div>
          </div>
          
          <!-- imagem do ofertante do treinamento -->
          <div class="col-6 d-flex justify-content-end">
            <img src="img/emp-evolke.jpg" alt="empresa treinamento" class="rounded pb-5 course-detail-logo-img">
          </div>
        </div>

      </div>

    </section>
    
    <!-- INFORMAÇÕES DETALHADAS -->
    <section class="container mt-4 mb-5">
      <h2 class="pt-4 pb-2">Informações Sobre o Curso</h2>
      <p>Preparar profissionais para confeccionar e reparar móveis e objetos em madeira. Além disso você aprenderá a interpretar projetos e especificações em todo o seu processo fabril, através de plantas e especificações técnicas, operando equipamentos manuais e elétricos e observando as normas técnicas de segurança.</p>
      <p><b>Duração:</b> 2 semanas</p>
      <span><b>Requisitos:</b></span>
      <ul class="pb-2">
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
          <div class="row d-flex container justify-content-between">

            <!-- 1o card -->
            <div class="col-4 p-2">
              <div class="course-detail-card">
                <div class="container course-detail-card-title">
                  <span>Hotelaria</span>
                  <h2>Curso de Recepcionista</h2>
                </div>
                <div class="container d-flex flex-column">
                  <img src="img/emp-direan.png" alt="empresa treinamento" class="align-self-center course-detail-logo-img-alike">
                  <div class="pb-2">
                    <span><b>Inscritos:</b> 505<br></span>
                    <span><b>Vagas:</b> 10<br></span>
                    <span><b>Inscritos:</b> 15/11/2019<br></span>
                    <span><b>Início:</b> 01/12/2019<br></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 2o card -->
            <div class="col-4 p-2">
              <div class="course-detail-card">
                <div class="container course-detail-card-title">
                  <span>Gastronomia</span>
                  <h2>Curso de Cozinheiro</h2>
                </div>
                <div class="container d-flex flex-column">
                  <img src="img/emp-cookinglogo.png" alt="empresa treinamento" class="align-self-center course-detail-logo-img-alike">
                  <div class="pb-2">
                    <span><b>Inscritos:</b> 505<br></span>
                    <span><b>Vagas:</b> 10<br></span>
                    <span><b>Inscritos:</b> 15/11/2019<br></span>
                    <span><b>Início:</b> 01/12/2019<br></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- 3o card -->
            <div class="col-4 p-2">
              <div class="course-detail-card">
                <div class="container course-detail-card-title">
                  <span>Serviços Gerais</span>
                  <h2>Curso de Marceneiro</h2>
                </div>
                <div class="container d-flex flex-column">
                  <img src="img/emp-logoname.png" alt="empresa treinamento" class="align-self-center course-detail-logo-img-alike">
                  <div class="pb-2">
                    <span><b>Inscritos:</b> 505<br></span>
                    <span><b>Vagas:</b> 10<br></span>
                    <span><b>Inscritos:</b> 15/11/2019<br></span>
                    <span><b>Início:</b> 01/12/2019<br></span>
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