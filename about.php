<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quem Somos</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Quem somos</li>
    </ol>
  </nav>
  
  <main>
    <!-- Banner com citação -->
    <section class="about-banner">
      <blockquote>
        <p class="mb-0 quotation">Para a maioria dos imigrantes, mudar para um país novo é um ato de fé. Mesmo que você tenha ouvido histórias sobre segurança, oportunidade e prosperidade,  ainda assim é um grande salto se afastar de sua língua, de seu povo e de seu país. De suas raízes.</p>
        <p class="mt-0 quotation-author">Nicola Yoon, escritora jamaicana-americana</p>
      </blockquote>
    </section>

    <!-- Dados Estatísticos -->
    <section class="container-fluid text-center border-config p-4">
      <h2 class="text-uppercase pb-3">Dados estatísticos</h2>
      <div class="row">
        <div class="col-lg-4 statistics-block">
          <img src="img/diagram.svg" alt="" class="statistics-images">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?
        </div>
        <div class="col-lg-4 statistics-block">
          <img src="img/portfolio.svg" alt="" class="statistics-images">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?
        </div>
        <div class="col-lg-4 statistics-block">
          <img src="img/collaboration.svg" alt="" class="statistics-images">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium amet soluta assumenda tenetur facere nemo, quod repudiandae excepturi esse quos, veritatis quia illum vero, nostrum ab ipsa totam neque?
        </div>
      </div>
    </section>

    <section class="container-fluid">
      <div class="row oppy-info">
        <img src="img/creativity.svg" alt="" class="col-lg-4">
        <div class="col-lg-6 oppy-text">
          <h2 class="text-uppercase">Como surgiu a oppy?</h2>
          <p>Criada em 2019 com o objetivo de integrar milhões de emigrantes do mundo a seus países receptores, facilitando a aquisição de habilidades técnicas que lhes permitam entrar no mercado de trabalho e melhorar suas condições de vida. Além disso, conta com o apoio de empresas e recrutadores para conectar essa mão-de-obra qualificada de modo a garantir que essas pessoas alcancem seus objetivos.</p>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <?php include_once('footer.php'); ?>
  </footer>
</body>
</html>