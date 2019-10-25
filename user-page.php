<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página do Usuário</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- CABEÇALHO -->
  <?php include_once('header.php'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Página do Usuário</li>
    </ol>
  </nav>
  
  <main>

    <!-- INFORMAÇÕES -->
    <section class="user-page-background-dark-green">
      <div class="container d-flex justify-content-around p-3 align-items-center">
        <img src="img/foto.png" alt="foto usuário" class="figure-img img-fluid rounded user-page-photo">
        <div>
          <h1 class="user-page-font-white user-page-font-size-30">Alex Watanabe</h1>
          <p class="user-page-font-white"><b>País receptor:</b> Brasil</p>
        </div>
      </div>
    </section>

    <!-- VAGAS -->
    <section class="container pb-4">
      <h1 class=" pl-4 pt-3">Vagas de Emprego</h1>

      <div class="row d-flex justify-content-around">
        <!-- vagas inscritas -->
        <div class="col-4 m-3 user-page-card">
          <h2 class="user-page-background-dark-green user-page-font-white p-2">Vagas Inscritas</h2>
          <!-- vaga 1 -->
          <div class="user-page-background-light-gray m-3 p-2">
            <div class="d-flex justify-content-between">
              <span>Hotelaria</span>
              <span>prazo: 20/11</span>
            </div>
            <h3>Recepcionista</h3>
          </div>
        </div>

        <!-- vagas concluídas -->
        <div class="col-4 m-3 user-page-card">
          <h2 class="user-page-background-dark-green user-page-font-white p-2">Vagas Concluídas</h2>
          <!-- vaga 1 -->
          <div class="user-page-card-item m-3 p-2">
            <span class="badge badge-danger user-page-icon">X</span> <!-- ícone de status -->
            <div class="d-flex justify-content-between">
              <span>Gastronimia</span>
              <span>prazo: 20/08</span>
            </div>
            <h3>Cozinheiro</h3>
          </div>
          <!-- vaga 2 -->
          <div class="user-page-card-item m-3 p-2">
            <span class="badge badge-success user-page-icon">&#10003</span> <!-- ícone de status -->
            <div class="d-flex justify-content-between">
              <span>Serviços Gerais</span>
              <span>prazo: 23/08</span>
            </div>
            <h3>Marceneiro</h3>
          </div>
        </div>

      </div>

    </section>

    <!-- CURSOS -->
    <section class="user-page-background-dark-yellow">
      <div class="container pb-4">
        <h1 class="user-page-font-white pl-4 pt-3">Cursos</h1>

        <div class="row d-flex justify-content-around">
          <!-- cursos inscritas -->
          <div class="col-4 m-3 user-page-card">
            <h2 class="user-page-background-dark-green user-page-font-white p-2">Cursos Inscritos</h2>
            <!-- curso 1 -->
            <div class="user-page-background-light-gray m-3 p-2">
              <div class="d-flex justify-content-between">
                <span>Hotelaria</span>
                <span>prazo: 20/11</span>
              </div>
              <h3>Recepcionista</h3>
            </div>
            <!-- curso 2 -->
            <div class="user-page-background-light-gray m-3 p-2">
              <div class="d-flex justify-content-between">
                <span>Serviços Gerais</span>
                <span>prazo: 20/11</span>
              </div>
              <h3>Atendente</h3>
            </div>
          </div>

          <!-- curso concluído -->
          <div class="col-4 m-3 user-page-card">
            <h2 class="user-page-background-dark-green user-page-font-white p-2">Cursos Concluídos</h2>
            <!-- curso 1 -->
            <div class="user-page-card-item m-3 p-2">
              <span class="badge badge-success user-page-icon">&#10003</span> <!-- ícone de status -->
              <div class="d-flex justify-content-between">
                <span>Gastronimia</span>
                <span>prazo: 20/08</span>
              </div>
              <h3>Cozinheiro</h3>
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