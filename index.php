<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include_once("header.php") ?>

  <main>
    <!-- Banner -->
    <section class="home-banner">
      <h1>Onde a esperança se reencontra</h1>
      <button class="btn home-btn-big" onclick="location.href='register.php'">Faça Parte Dessa Comunidade</button>
      <button class="btn home-btn-sm" onclick="location.href='register.php'">Faça Parte </button>
    </section>

    <!-- Texto Resumo Sobre o Site -->
    <section class="home-summary">
      <div class="container d-flex flex-column">
        <p class="indent">A Oppy foi criada em 2019 com o objetivo de dar a oportunidade dos emigrantes saídos de diversas condições de vida obterem as habilidades técnicas e emocionais para entrar no mercado de trabalho de um novo país e melhorar suas condições de vida. 
          
        <p class="indent"> Contamos com apoio de empresas e recrutadores para conectar essa mão-de-obra qualificada e cheia de energia para aulixiar a integração dos novos habitantes do país! </p>
        
        <button class="btn align-self-center my-2" onclick="location.href='about.php'">Saiba Mais</button>
      </div>
    </section>

    <!-- Cards Resumo Conteúdo do Site -->
    <section class="container">
      <div class="row justify-content-around align-itens-center py-1 home-card-section">
        <article class="col-12 col-md-6 col-lg-4 pb-3">
          <div class="home-card d-flex flex-column align-items-center">
            <a href="about.php">
              <img src="img/home-card-whom.png" class="home-card-img" alt="mãos se dando às mãos">
            </a>
            <div>
              <h4 class="card-title"><a href="about.php">Para você?</a></h4>
              <p class="card-text indent">Para qualquer pessoa que deseja se integrar à comunidade de um novo país. Que busca obter informações dos passos para atingir esse objetivo, que precisa de apoio técnico, psicológico e jurídico para tal.</p>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6 col-lg-4 pb-3">
          <div class="home-card d-flex flex-column align-items-center">
            <a href="courses.php" class="d-flex justify-content-center">  
              <img src="img/home-card-glasses2.png" class="home-card-img home-card-img-sm" alt="óculos">
              <img src="img/home-card-glasses.png" class="home-card-img home-card-img-md" alt="óculos">
            </a>
            <div>
              <h4 class="card-title"><a href="courses.php">Cursos</a></h4>
              <p class="card-text indent">Em contato direto com os apoiadores que fornecem os cursos gratuitamente para o imigrantes, são disponibilizados cursos em áreas como: idiomas, estética, hotelaria, alimentação, cuidados, entreterimento, dentre outros.</p>
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
                <p class="card-text indent">Sabendo que mudar de país é algo que nunca é simples, contamos com apoiadores que dão apoio psicológico, jurídico e para encontrar o primeiro emprego no novo país. Buscamos ajudar essa transição ser a mais suave possível.</p>
              </div>
            </div>
        </article>
      </div>
    </section>

    <!-- Banner Chamada Apoiadores -->
    <section class="home-banner-apoie">
      <div class="row justify-content-center align-items-center py-2">
        <h5 class="col-12 col-lg-4 text-center mt-2">Ajude-nos a ir mais longe!</h5>
        <button class="btn col-10 col-sm-5 col-md-5 col-lg-3" onclick="location.href='contribute-enterprise.php'">Seja Patrocinador</button>
        <button class="btn col-10 col-sm-5 col-md-5 col-lg-3" onclick="location.href='contribute-people.php'">Seja Voluntário</button>
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