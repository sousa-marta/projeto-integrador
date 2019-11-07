<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Apoio</title>
</head>
<body>
<?php include_once('header.php') ?>

    <!-- Navegação Breadcrumb  -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Apoio</li>
        </ol>
    </nav>

    <!-- Banner -->

    <section class="container apoio-banner">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 banner-img">
                <img class="img-fluid" src="img/banner-apoio.svg" alt="apoio">
            </div>
            <div class="col-lg-6 col-md-6 banner-img">
                <h1 class="h1-apoio">Ajudando você a começar</h1>
            </div>
        </div>
    </section>

    <!-- Corpo -->

    <section class="background-apoio">
      <div class="row justify-content-around align-itens-center py-5">
        <article class="col-md-3">
            <div class="home-card d-flex flex-column align-items-center">
                <div class="card-img card-juridico"></div>
                <div class="card-body">
                <h4 class="h4-apoio card-title"><a href="support-legal.php">Assistencia Juridica</a></h4>
                <p class="p-apoio card-text justify-content-center">Enim nisi officia incididunt sint qui. Lorem cupidatat voluptate incididunt et cupidatat laboris dolore eiusmod ad et veniam in magna. Labore irure excepteur occaecat labore ut exercitation adipisicing. Duis amet veniam voluptate irure est. Aliquip eu fugiat tempor dolor ut minim adipisicing qui dolor eiusmod anim do proident et. Ut ea sunt esse ea incididunt excepteur exercitation Lorem irure elit. Magna excepteur duis in laborum nulla culpa velit quis.</p>
                </div>
            </div>
        </article>
        <article class="col-md-3">
          <div class="home-card d-flex flex-column align-items-center">
            <div class="card-img card-psicologico"></div>
            <div class="card-body">
              <h4 class="h4-apoio card-title"><a href="support-psychologic.php">Acompanhamento Psicológico</a></h4>
              <p class="p-apoio card-text">Enim nisi officia incididunt sint qui. Lorem cupidatat voluptate incididunt et cupidatat laboris dolore eiusmod ad et veniam in magna. Labore irure excepteur occaecat labore ut exercitation adipisicing. Duis amet veniam voluptate irure est. Aliquip eu fugiat tempor dolor ut minim adipisicing qui dolor eiusmod anim do proident et. Ut ea sunt esse ea incididunt excepteur exercitation Lorem irure elit. Magna excepteur duis in laborum nulla culpa velit quis.</p>
            </div>
          </div>
        </article>
        <article class="col-md-3">
          <div class="home-card d-flex flex-column align-items-center">
            <div class="card-img card-trabalho"></div>
            <div class="card-body">
              <h4 class="h4-apoio card-title"><a href="support-professional.php">Apoio Novo Trabalho</a></h4>
              <p class="p-apoio card-text">Enim nisi officia incididunt sint qui. Lorem cupidatat voluptate incididunt et cupidatat laboris dolore eiusmod ad et veniam in magna. Labore irure excepteur occaecat labore ut exercitation adipisicing. Duis amet veniam voluptate irure est. Aliquip eu fugiat tempor dolor ut minim adipisicing qui dolor eiusmod anim do proident et. Ut ea sunt esse ea incididunt excepteur exercitation Lorem irure elit. Magna excepteur duis in laborum nulla culpa velit quis.</p>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- Texto Exemplo -->
    <section class="texto-apoio">
        <div class="container">
            <h3> Texto Exemplo </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sapiente quae aut ipsum commodi placeat nam? Voluptate neque sit impedit. Similique explicabo excepturi hic pariatur rerum! Adipisci nulla necessitatibus laboriosam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur aspernatur delectus non eos porro, officia natus corporis animi ut cumque velit dolorem quam! Obcaecati quisquam veniam soluta quos accusantium autem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magni pariatur id, totam temporibus fugiat eveniet esse! Quo perferendis, nobis, et, nemo incidunt molestiae nulla fugit voluptas tenetur ab quisquam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus cumque ab tenetur, distinctio sit aliquam facilis quisquam exercitationem ipsam minus animi laudantium veritatis nihil, perspiciatis nesciunt nemo, totam quo ducimus?</p>
        </div>
    </section>

    <!-- Banner que se move -->
<!-- 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/home-card-help.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/home-card-glasses.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/home-card-whom.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->
    
<?php include_once('footer.php') ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>