<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quem Somos</title>
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
  
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Quem somos</li>
    </ol>
  </nav>
  
  <main>
    <!-- Banner com citação -->
    <section class="about-banner">
      <blockquote class="bg-color">
        <p class="quotation">Para a maioria dos imigrantes, mudar para um país novo é um ato de fé. Mesmo que você tenha ouvido histórias sobre segurança, oportunidade e prosperidade,  ainda assim é um grande salto se afastar de sua língua, de seu povo e de seu país. De suas raízes.</p>
        <p class="quotation-author">Nicola Yoon, escritora jamaicana-americana</p>
      </blockquote>
    </section>

    <!-- Dados Estatísticos -->
    <section class="container-fluid text-center border-config py-3">
      <h2 class="text-uppercase pb-3">Dados estatísticos</h2>
      <div class="row">
        <div class="col-sm-4 statistics-block mt-3">
          <img src="img/diagram.svg" aria-hidden="true" alt="" class="statistics-images">
          Em 10 anos, o número de imigrantes aumentou 160% no Brasil.
        </div>
        <div class="col-sm-4 statistics-block mt-3">
          <img src="img/portfolio.svg" aria-hidden="true" alt="" class="statistics-images">
          Mais de 112 mil imigrantes possuem trabalho formal no Brasil.
        </div>
        <div class="col-sm-4 statistics-block mt-3">
          <img src="img/collaboration.svg" aria-hidden="true" alt="" class="statistics-images">
          Iniciativas ajudam refugiados a ingressarem no mercado de trabalho brasileiro.
        </div>
      </div>
    </section>

    <!-- Como surgiu a Oppy? -->
    <section class="container-fluid">
      <div class="row oppy-info p-4">
        <img src="img/creativity.svg" aria-hidden="true" alt="" class="col-sm-6 col-lg-4">
        <div class="col-sm-6 col-lg-7">
          <h2 class="text-uppercase mt-3">Como surgiu a oppy?</h2>
          <p>Criada em 2019 com o objetivo de integrar milhões de emigrantes do mundo a seus países receptores, facilitando a aquisição de habilidades técnicas que lhes permitam entrar no mercado de trabalho e melhorar suas condições de vida. Além disso, conta com o apoio de empresas e recrutadores para conectar essa mão-de-obra qualificada de modo a garantir que essas pessoas alcancem seus objetivos.</p>
        </div>
      </div>
    </section>

    <!-- Nossa Proposta -->
    <section class="container-fluid">
      <div class="row oppy-proposal p-4">
        <div class="col-sm-6 col-lg-7 mb-3">
          <h2 class="text-uppercase">Nossa Proposta</h2>
          <p>Inserir imigrantes (homens e mulheres) no mercado de trabalho do país destino, gerando valor agregado aos seus currículos, por meio do uso de ferramentas digitais que lhes permitam adquirir habilidades técnicas, e sem desconsiderar suas próprias bagagens pessoais e profissionais.</p>
        </div>
        <img src="img/population-system.svg" aria-hidden="true" alt="" class="col-sm-6 col-lg-4">
      </div>
    </section>

    <!-- Nossos Valores -->
    <section class="container-fluid oppy-values text-center py-4">
      <h2 class="text-uppercase">Nossos Valores</h2>
      <div class="row">
          <div class="col-md-4 statistics-block mt-3">
            <img src="img/hands.svg" aria-hidden="true" alt="" class="statistics-images">
            <h5>Solidariedade</h5>
            <p>Acreditamos que dar oportunidades a essas pessoas auxilia na inserção delas na sociedade e cria um sentido mais amplo de comunidade.</p>
          </div>
          <div class="col-md-4 statistics-block mt-3">
            <img src="img/reliability.svg" aria-hidden="true" alt="" class="statistics-images">
            <h5>Integridade</h5>
            <p>Trabalhamos com responsabilidade e comprometimento para cumprir cada um dos processos que permitem o crescimento de nossos beneficiários.</p>
          </div>
          <div class="col-md-4 statistics-block mt-3">
            <img src="img/discussion.svg" aria-hidden="true" alt="" class="statistics-images">
            <h5>Inovação</h5>
            <p>Sabemos da importância de se manter atualizado nessa era digital e, por isso, buscamos oferecer as melhores ferramentas que auxiliem nessa adaptação e atualização pessoal.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- O time -->
    <section class="container-fluid text-center team-info py-4">
      <h2 class="text-uppercase">As pessoas por trás de tudo isso</h2>
      <div class="row">
        <div class="col-md-4 col-lg-2 statistics-block mt-3">
          <img src="img/boy.svg" alt="" class="statistics-images">
          <h5>Alex</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?</p>
        </div>
        <div class="col-md-4 col-lg-2 statistics-block mt-3">
          <img src="img/girl.svg" alt="" class="statistics-images">
          <h5>Lislaine</h5>
          <p>Dev que pretende trabalhar com Segurança da Informação e acredita que saber programar será o diferencial para entrar na nova área.</p>
        </div>
        <div class="col-md-4 col-lg-2 statistics-block mt-3">
          <img src="img/girl.svg" alt="" class="statistics-images">
          <h5>Marta</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?</p>
        </div>
        <div class="col-md-4 col-lg-2 statistics-block mt-3">
          <img src="img/boy.svg" alt="" class="statistics-images">
          <h5>Ricardo</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?</p>
        </div>
        <div class="col-md-4 col-lg-2 statistics-block mt-3">
          <img src="img/boy.svg" alt="" class="statistics-images">
          <h5>Victor</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?</p>
        </div>
        <div class="col-md-4 col-lg-2 statistics-block mt-3">
          <img src="img/boy.svg" alt="" class="statistics-images">
          <h5>Yuri</h5>
          <p>Dev que acredita que programação se tornará essencial em todas as áreas em um futuro próximo e começa a investir nesse futuro desde agora.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include_once('footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>