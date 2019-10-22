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
</head>
<body>
  <?php include_once("header.php") ?>

  <main>
    <!-- Banner -->
    <section class="home-banner">
      <h1>Onde a esperança se reencontra</h1>
    </section>

    <!-- Texto Resumo Sobre o Site -->
    <section class="home-summary">
      <div class="container">
        <p>A Oppy foi criada em 2019 com o objetivo de dar a oportunidade dos emigrantes saídos de diversas condições de vida obterem as habilidades técnicas e emocionais para entrar no mercado de trabalho de um novo país e melhorar suas condições de vida. 
          
        <p> Contamos com apoio de empresas e recrutadores para conectar essa mão-de-obra qualificada e cheia de energia para aulixiar a integrassão dos novos habitantes do país! </p>
        
        <a href="#" class="btn home-btn-trq">Saiba Mais</a>
      </div>
    </section>

    <!-- Cards Resumo Conteúdo do Site -->
    <section class="container">
      <div class="row justify-content-around align-itens-center py-5">
        <article class="col-md-4">
          <div class="home-card d-flex flex-column align-items-center">
            <div class="card-img card-whom"></div>
            <div class="card-body">
              <h4 class="card-title">Para quem é o projeto</h4>
              <p class="card-text">Para qualquer pessoa que deseja se integrar à comunidade de um novo país. Que busca obter informações dos passos para atingir esse objetivo, que precisa de apoio técnico, psicológico e jurídico para tal.</p>
            </div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="home-card d-flex flex-column align-items-center">
            <div class="card-img card-courses"></div>
            <div class="card-body">
              <h4 class="card-title">Cursos</h4>
              <p class="card-text">Em contato direto com os apoiadores que fornecem os cursos gratuitamente para o imigrantes, são disponibilizados cursos em áreas como: idiomas, estética, hotelaria, alimentação, cuidados, entreterimento, dentre outros.</p>
            </div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="home-card d-flex flex-column align-items-center">
            <div class="card-img card-help"></div>
            <div class="card-body">
              <h4 class="card-title">Apoio Assistencial</h4>
              <p class="card-text">Sabendo que mudar de país é algo que nunca é simples, contamos com apoiadores que dão apoio psicológico, jurídico e para encontrar o primeiro emprego no novo país. Buscamos ajudar essa transição ser a mais suave possível.</p>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- Banner Chamada Apoiadores -->
    <section class="home-banner-apoie d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-around align-items-center">
          <h4 class="col-md-4">Ajude-nos a ir mais longe</h4>
          <a href="#" class="col-md-3 btn home-btn-trq">Seja Patrocinador</a>
          <a href="#" class="col-md-3 btn home-btn-trq">Seja Voluntário</a>
        </div>
      </div>
    </section>
  </main>
  
  <!-- Footer -->
  <?php include_once("footer.php") ?>

</body>
</html>