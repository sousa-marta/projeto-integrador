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
  <title>Contribua</title>
</head>
<body>
  <?php include_once('header.php'); ?>

  <!-- Navegação Breadcrumb  -->
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contribua</li>
      </ol>
  </nav>

  <main>
    <!-- Banner -->
    <section class="pages-title-bg d-flex justify-content-center align-items-center">
      <h1>Contribua</h1>
    </section>

    <!-- Cards Resumo Auxílio Pessoa e Empresa-->
    <section class="container text-center">
      <div class="row justify-content-center my-5">
        <div class="col-5 py-4 px-2 mx-3 border">
        <img src="img/contribute-volunteer.png" alt="aperto de mão">
          <h4 class="card-title">Auxílio como Pessoa</h4>
          <p class="card-text">Você pode contribuir oferecendo um curso ou doando um valor para ajudar a manter nossa estrutura e nossa equipe!</p>   
          <button type="button" class="align-self-end btn mt-3" onclick="location.href='#contribute-session-people'">Saiba mais</button>
        </div>
        <div class="col-5 py-4 px-2 mx-3 border">
          <img src="img/contribute-enterprise.png" alt="aperto de mão">
          <h4 class="card-title">Auxílio como Empresa</h4>
          <p class="card-text">Como empresa, pode nos patrocinar em eventos, investir diretamente ou desenvolver campanhas para captação de recursos.</p>
          <button type="button" class="btn mt-3" onclick="location.href='#contribute-session-company'">Saiba mais</button>
        </div>
      </div>
    </section>

    <!-- Section Pessoa -->
    <section id="contribute-session-people" >
      <div class="container-fluid"> 
        <div class="contribute-banner-session">
          <h2>Seja um de nós!</h2>
        </div>
        <div class="contribute-text py-5">
          <div class="text-center">
            <!-- <h2>Voluntariado</h2> -->
            <h3 class="mb-5">Participe de nossos projetos como <span>voluntário</span></h3>
            <div class="row contribute-volunteer justify-content-center">
              <div class="col-2 py-1 px-2 mx-3 bg-light">
                <img src="img/contribute-volunteer-teach.png" alt="">
                <h4>Cursos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam nisi, blanditiis perferendis.</p>
              </div>
              <div class="col-2 py-1 px-2 mx-3 bg-light">
                <img src="img/contribute-volunteer-juridical.png" alt="">
                <h4>Jurídico</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam 
              </div>
              <div class="col-2 py-1 px-2 mx-3 bg-light">
                <img src="img/contribute-volunteer-talk.png" alt="">
                <h4>Psicológico</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam 
              </div>
              <div class="col-2 py-1 px-2 mx-3 bg-light">
                <img src="img/contribute-volunteer-money.png" alt="">
                <h4>Financeiro</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam 
              </div>
            </div>
            <button class="btn mt-5" onclick="location.href='contact.php'">Contate-nos</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Empresa -->
    <section id="contribute-session-company" >
      <div class="container-fluid"> 
        <div class="contribute-banner-session">
          <h2>Apoio Empresarial</h2>
        </div>
        <div class="text-center contribute-enterprise container">
          <div class="row justify-content-center align-items-center mt-4 mb-5">
            <h2>Organizações que nos apoiam</h2>
            <div class="row my-3">
              <div class="col-3">
                <img src="img/contribute-enterprise-logo1.png" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo2.jpg" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo1.png" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo2.jpg" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo2.jpg" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo1.png" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo2.jpg" alt="">
              </div>
              <div class="col-3">
                <img src="img/contribute-enterprise-logo1.png" alt="">
              </div>         
            </div>
            <button class="btn mt-3" onclick="location.href='contact.php'">Contate-nos</button>
          </div>
        </div>
      </div>
    </section>



  <?php include_once('footer.php'); ?>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>