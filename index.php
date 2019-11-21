<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Oppy</title>
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
  <?php include_once("header.php") ?>

  <main>
    <!-- Banner -->
    <section class="home-banner">
      <h1>Onde a esperança se reencontra</h1>
      <button type="button" class="btn btn-primary home-btn-big" onclick="location.href='register.php'">Faça parte dessa comunidade</button>
      <button type="button" class="btn btn-primary home-btn-sm" onclick="location.href='register.php'">Faça parte</button>
    </section>

    <!-- Texto Resumo Sobre o Site -->
    <section class="home-summary">
      <div class="justify-content-around align-itens-center d-flex flex-column">
        <p class="indent">A Oppy foi criada em 2019 com o objetivo de dar a oportunidade para pessoas que emigraram obterem as habilidades técnicas e emocionais para entrar no mercado de trabalho no novo país e melhorar suas condições de vida.</p>
        <p class="indent">Contamos com o apoio de empresas e pessoas voluntárias para conectar essa mão-de-obra qualificada e cheia de energia e auxiliar a integração delas.</p>
        <button type="button" aria-label="Saiba mais sobre a Oppy" class="btn btn-primary align-self-center my-2" onclick="location.href='about.php'">Saiba mais</button>
      </div>
    </section>

    <!-- Cards Resumo Conteúdo do Site -->
    <section class="container">
      <div class="row justify-content-around align-itens-center py-1 home-card-section">
        <article class="col-12 col-md-6 col-lg-4 pb-3">
          <div class="home-card d-flex flex-column align-items-center">
            <a href="about.php">
              <img src="img/home-card-whom.png" class="home-card-img" aria-hidden="true" alt="">
            </a>
            <div>
              <a href="about.php"><h4 class="card-title">Para você?</h4></a>
              <p class="card-text indent">Para qualquer pessoa que deseja se integrar à comunidade de um novo país, que busca obter informações dos passos para atingir esse objetivo, que precisa de apoio técnico, psicológico e jurídico.</p>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6 col-lg-4 pb-3">
          <div class="home-card d-flex flex-column align-items-center">
            <a href="courses.php" class="d-flex justify-content-center">  
              <img src="img/home-card-glasses2.png" class="home-card-img home-card-img-sm" aria-hidden="true" alt="">
              <img src="img/home-card-glasses.png" class="home-card-img home-card-img-md" aria-hidden="true" alt="">
            </a>
            <div>
              <a href="courses.php"><h4 class="card-title">Cursos</h4></a>
              <p class="card-text indent">Por meio de nossas parcerias, disponibilizamos cursos gratuitamente para imigrantes em áreas como: idiomas, estética, hotelaria, alimentação, cuidados, entreterimento, dentre outros.</p>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6 col-lg-4 pb-3">
            <div class="home-card d-flex flex-column align-items-center">
              <a href="support.php">
                <img src="img/home-card-help.png" class="home-card-img" alt="bóia de navio">
              </a>
              <div>
                <h4 class="card-title"><a href="support.php">Assistências</a></h4>
                <p class="card-text indent">Mudar de país nunca é simples, por isso, contamos com apoiadores que dão apoio psicológico, jurídico e profissional para encontrar o primeiro emprego no novo país. Buscamos ajudar a fazer essa transição ser a mais suave possível.</p>
              </div>
            </div>
        </article>
      </div>
    </section>

    <!-- Banner Chamada Apoiadores -->
    <section class="home-banner-apoie">
      <div class="row justify-content-center align-items-center py-2">
        <h5 class="col-12 col-lg-3 text-center mt-2">Ajude-nos a ir mais longe!</h5>
        <button type="button" aria-label="Clique para saber mais sobre como ajudar como voluntário" class="btn btn-primary col-10 col-sm-5 col-md-5 col-lg-3" onclick="location.href='contribute.php'">Seja Voluntário</button>
        <button type="button" aria-label="Clique para saber mais sobre como apoiar como empresa" class="btn btn-primary col-10 col-sm-5 col-md-5 col-lg-3" onclick="location.href='contribute.php'">Seja Patrocinador</button>
      </div>
    </section>
  </main>
  
  <!-- Footer -->
  <?php include_once("footer.php") ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>