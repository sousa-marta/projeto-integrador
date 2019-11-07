<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cursos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Header -->
  <?php include_once("header.php"); ?>
  
  <!-- Navegação Breadcrumb  -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cursos</li>
    </ol>
  </nav>

  <main>
    <div class="row no-gutters">
      <!-- Banner -->
      <section class="pages-title-bg d-flex justify-content-center align-items-center">
        <h1>Cursos</h1>
      </section>
 
      <!-- Conteúdo Central da Página -->
      <div class="col-lg-9 col-md-8 order-2">

        <!-- Campo Pesquisa por Curso -->
        <section class="courses-g-search border-bottom">
          <h3 class="my-3">Pesquise por curso</h3>
          <form action="" class="form-inline">
            <div class="form-group mx-3">
              <label for="searchCourse"></label>
              <input class="form-control" type="text" name="" id="searchCourse" placeholder="Pesquise por curso">
            </div>
            <!-- trocar o type de button para submit depois da sprint 2 -->
            <button type="button" class="btn btn-light" onclick="location.href='course-detail.php'">Buscar</button>
          </form>
        </section>
        
        <!-- Categorias de Cursos Imagens -->
        <section class="row justify-content-center my-4">
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Idiomas</h4>
              <img src="img/courses-g-languages.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Saúde</h4>
              <img src="img/courses-g-health.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Beleza</h4>
              <img src="img/courses-g-beauty.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Programação</h4>
              <img src="img/courses-g-programming.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          <div class="col-lg-5 col-md-7 d-flex flex-column align-items-center">
            <div class="courses-g-cards my-4">
              <h4 class="card-title text-center py-2">Direção</h4>
              <img src="img/courses-g-car.jpg" alt="página de livro aberta com poema" class="card-img-bottom">
            </div>
          </div>
          
          
        </section>
      </div>

      <!-- Barra de Navegação Lateral -->
      <aside class="col-lg-3 col-md-4 order-1 p-3">

        <div class="list-group-item row form-group list-green text-white">
            <h5><i class="fa fa-search"></i> Filtros</h5>
            <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- Font Awesome CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        </div>

        <div class="list-group-item row form-group bg-light"></div>

        <div class="list-group-item row form-group bg-secondary text-white">
            <h5>Localização</h5>
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
            <h5>Cargos</h5>
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
            <h5>Área de Atuação</h5>
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
            <h5>Faixa Salárial</h5>
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
                <input type="text" class="form-control" placeholder="Buscar por...">
            </div>

            <h5 class="btn btn-primary"><i class="fa fa-search"></i> Buscar Oportunidades</h5>
            <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- Font Awesome CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        </div>
      </aside>
      
    </div>

  </main>




  



  <!-- Footer -->
  <?php include_once("footer.php") ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>