<?php ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Oportunidades | Empregos</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <?php include_once('header.php'); ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Oportunidades</a></li>
      <li class="breadcrumb-item active" aria-current="page">Empregos</li>
    </ol>
  </nav>

  <main>

    <section class="jumbotron jumbotron-fluid text-white" style="background-color:#4FB3BF">
      <!-- arrumar css -->
      <div class="container d-flex justify-content-center">
        <h1 class="display-4">Empregos</h1>
      </div>
    </section>

    <!-- // => dividindo a tela -->

    <section class="container row">
      <!-- coluna esquerda menu / filtros de pesquisa -->
      <div class="list-group  col-lg-3 p-3">
        <div class="list-group-item active row form-group">
          <h3><i class="fa fa-search"></i> Filtros</h3>
          <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <!-- Font Awesome CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        </div>

        <div class="list-group-item row form-group bg-light"></div>

        <div class="list-group-item row form-group bg-secondary text-white">
          <h3>Localização</h3>
        </div>

        <div class="list-group-item row form-group p-3 bg-light">
          <label class="mr-sm-4 sr-only" for="inlineFormCustomSelect">Preferência</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Região</option>
            <option value="1">Norte</option>
            <option value="2">Nordeste</option>
            <option value="3">Centroeste</option>
            <option value="2">Sudeste</option>
            <option value="3">Sul</option>
          </select>
        </div>
        <div class="list-group-item row form-group p-3 bg-light">
          <label class="mr-sm-4 sr-only" for="inlineFormCustomSelect">Preferência</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Estado</option>
            <option value="1">São Paulo</option>
            <option value="2">Rio de Janeiro</option>
            <option value="3">Minas Gerais</option>
            <option value="1">Distrito Federal</option>
            <option value="2">Amazonas</option>
            <option value="3">Tocantisns</option>
            <option value="1">Bahia</option>
            <option value="2">Pernambuco</option>
            <option value="3">Acre</option>
          </select>
        </div>
        <div class="list-group-item row form-group p-3 bg-light">
          <label class="mr-sm-4 sr-only" for="inlineFormCustomSelect">Preferência</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Cidade</option>
            <option value="1">São Paulo</option>
            <option value="2">Rio de Janeiro</option>
            <option value="3">Minas Gerais</option>
            <option value="1">Salvador</option>
            <option value="2">Vitória</option>
            <option value="3">Santos</option>
            <option value="2">Rio de Janeiro</option>
            <option value="3">Minas Gerais</option>
            <option value="1">Salvador</option>
            <option value="2">Vitória</option>
            <option value="3">Santos</option>
          </select>
        </div>
        <div class="list-group-item row form-group bg-secondary text-white">
          <h3>Cargos</h3>
        </div>

        <div class="list-group-item row form-group bg-light">
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Padeiro</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Cozinheiro(a)</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Segurança</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Costureira(o)</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Arrumadeira</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Jardineiro</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Auxiliar de Limpeza</label>
          </div>
        </div>

        <div class="list-group-item row form-group bg-secondary text-white">
          <h3>Área de Atuação</h3>
        </div>

        <div class="list-group-item row form-group bg-light">
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Alimentação</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Hotelaria</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Segurança Patrimonial</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Jardinagem</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Comércio</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Manutenção Predial</label>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Construção Civil</label>
          </div>
        </div>

        <div class="list-group-item row form-group bg-secondary text-white">
          <h3>Faixa Salárial</h3>
        </div>

        <div class="list-group-item row form-group p-3 bg-light">
          <form>
            <div class="form-group">
              <label for="formControlRange">R$ 1.500,00</label>
              <input type="range" class="form-control-range" id="formControlRange">
            </div>
          </form>
        </div>

        <div class="list-group-item row form-group p-3 bg-light border border-primary">
          <div class="form-group">
            <label class="text-primary" for="">Busca por Palavra Chave</label>
            <input type="text" class="form-control"  placeholder="Buscar por...">
          </div>

          <h5 class="btn btn-primary"><i class="fa fa-search"></i> Buscar Oportunidades</h5>
          <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <!-- Font Awesome CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        </div>

      </div>
      <!-- vagas de emprego coluda maior da direita -->
      <div class="col ">
        <div class="container p-3">
          <div class="card">
            <div class="row">
              <div class="col-xl-5">
                <img class="card-img-top h-100" src="img/panificadora.jpg" alt="Imagem de capa do card">
              </div>
              <div class="col-xl-7 p-3">
                <h3 class="card-title"> Vaga Padeiro Jabaquara</h2>
                  <h6 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Est modi delectus quos? Commodi eius doloribus ipsam iste autem sequi ad natus nobis,
                    quae numquam perspiciatis. Veniam repellendus voluptate recusandae illo. </h6>
                  <h6 class="card-text"> cidade: São Paulo </h6>
                  <h6 class="card-text"> estado: SP </h6>
                  <h6 class="card-text"> salário: R$ 1.500,00</h6>
                  <h6 class="card-text"> email: contato@padarialegal.com.br </h6>
                  <a href="#" class="btn btn-primary"><i class="fa fa-search"></i>enviar curriculo</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container p-3">
          <div class="card">
            <div class="row">
              <div class="col-lg-5">
                <img class="card-img-top h-100" src="img/panificadora.jpg" alt="Imagem de capa do card">
              </div>
              <div class="col-lg-7 p-3">
                <h3 class="card-title"> Vaga Padeiro Jabaquara</h2>
                  <h6 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Est modi delectus quos? Commodi eius doloribus ipsam iste autem sequi ad natus nobis,
                    quae numquam perspiciatis. Veniam repellendus voluptate recusandae illo. </h6>
                  <h6 class="card-text"> cidade: São Paulo </h6>
                  <h6 class="card-text"> estado: SP </h6>
                  <h6 class="card-text"> salário: R$ 1.500,00</h6>
                  <h6 class="card-text"> email: contato@padarialegal.com.br </h6>
                  <a href="#" class="btn btn-primary">enviar curriculo</a>
              </div>
            </div>
          </div>
        </div>


        <div class="container p-3">
          <div class="card">
            <div class="row">
              <div class="col-lg-5">
                <img class="card-img-top h-100" src="img/panificadora.jpg" alt="Imagem de capa do card">
              </div>
              <div class="col-lg-7 p-3">
                <h3 class="card-title"> Vaga Padeiro Jabaquara</h2>
                  <h6 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Est modi delectus quos? Commodi eius doloribus ipsam iste autem sequi ad natus nobis,
                    quae numquam perspiciatis. Veniam repellendus voluptate recusandae illo. </h6>
                  <h6 class="card-text"> cidade: São Paulo </h6>
                  <h6 class="card-text"> estado: SP </h6>
                  <h6 class="card-text"> salário: R$ 1.500,00</h6>
                  <h6 class="card-text"> email: contato@padarialegal.com.br </h6>
                  <a href="#" class="btn btn-primary">enviar curriculo</a>
              </div>
            </div>
          </div>
        </div>


        <div class="container p-3">
          <div class="card">
            <div class="row">
              <div class="col-lg-5">
                <img class="card-img-top h-100" src="img/panificadora.jpg" alt="Imagem de capa do card">
              </div>
              <div class="col-lg-7 p-3">
                <h3 class="card-title"> Vaga Padeiro Jabaquara</h2>
                  <h6 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Est modi delectus quos? Commodi eius doloribus ipsam iste autem sequi ad natus nobis,
                    quae numquam perspiciatis. Veniam repellendus voluptate recusandae illo. </h6>
                  <h6 class="card-text"> cidade: São Paulo </h6>
                  <h6 class="card-text"> estado: SP </h6>
                  <h6 class="card-text"> salário: R$ 1.500,00</h6>
                  <h6 class="card-text"> email: contato@padarialegal.com.br </h6>
                  <a href="#" class="btn btn-primary">enviar curriculo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once('footer.php') ?> 
</body>

</html>