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
</head>
<body>
  <?php include_once("header.php") ?>

  <main>
    <!-- Banner -->
    <section class="home-banner">
      <h1>Onde a esperança se reencontra</h1>
    </section>

    <!-- Texto Sobre Site -->
    <section class="home-summary">
      <div class="container">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aspernatur illo ipsum natus mollitia quae, labore, consequatur nemo aliquid, molestias tenetur eum consectetur quaerat expedita rerum quia voluptates repellat suscipit!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aspernatur illo ipsum natus mollitia quae, labore, consequatur nemo aliquid, molestias tenetur eum consectetur quaerat expedita rerum quia voluptates repellat suscipit!</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </section>

    <!-- Cards Resumo Site -->
    <section class="container">
      <div class="row justify-content-around align-itens-center py-5">
        <article class="col-md-4">
          <div class="home-card">
            <img src="img/home-card-whom.png" alt="" class="home-card-img">
            <div class="card-body">
              <h4 class="card-title">Para quem é o projeto</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem similique dicta a voluptatem est reprehenderit accusantium, recusandae cupiditate sunt eveniet eum magnam distinctio voluptate ducimus voluptates laudantium tempore temporibus mollitia.</p>
            </div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="home-card">
            <img src="img/home-card-books.png" alt="" class="home-card-img">
            <div class="card-body">
              <h4 class="card-title">Cursos</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem similique dicta a voluptatem est reprehenderit accusantium, recusandae cupiditate sunt eveniet eum magnam distinctio voluptate ducimus voluptates laudantium tempore temporibus mollitia.</p>
            </div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="home-card">
            <img src="img/home-card-help.png" alt="" class="home-card-img">
            <div class="card-body">
              <h4 class="card-title">Apoio Assistencial</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem similique dicta a voluptatem est reprehenderit accusantium, recusandae cupiditate sunt eveniet eum magnam distinctio voluptate ducimus voluptates laudantium tempore temporibus mollitia.</p>
            </div>
          </div>
        </article>
      </div>

      <!-- Banner Chamada Apoiadores -->
      

    </section>
  </main>

  <!-- <?php include_once("footer.php") ?> -->
</body>
</html>