<?php 

$subjects = ["Apoio","Cadastro","Cursos","Doação","Voluntariado","Outros"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contato</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contato</li>
    </ol>
  </nav>
  
  <main class="container-fluid remove-padding">
    <h1 class="contact-bg d-flex justify-content-center align-items-center">Contato</h1>
    <div id="remove-margin" class="row align-self-center justify-content-center">
    <form action="" method="post" class="card m-5 p-5 col-lg-6 different-form-border">
      <p class="text-center">Caso não encontre a resposta para a sua pergunta abaixo, não hesite em nos contatar usando o formulário ou diretamente pelo e-mail: <a class="contact-email" href="mailto:">contato@oppy.com.br</a></p>
      <div class="col-lg-8 align-self-center">
      <div class="form-group">
        <label for="contactName">Nome</label>
        <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Nome" required>
      </div>
      <div class="form-group">
        <label for="contactEmail">E-mail</label>
        <input type="text" class="form-control" name="contactEmail" id="contactEmail" placeholder="E-mail" required>
      </div>
      <label for="contactSubject">Assunto</label>
      <div class="form-group">
        <select class="col-lg-12" name="contactSubject" id="contactSubject">
          <option value="">Selecione o assunto</option>
          <?php
          foreach ($subjects as $subject) {
            echo "<option value='$subject'>$subject</option>";
            $i++;
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="userPassword">Mensagem</label>
        <textarea class="form-control" id="contactMessage" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-color">Enviar</button>
      </div>
    </form>
    </div>
  
    <h1 class="questions-title-bg d-flex justify-content-center align-items-center m-0">FAQ</h1>
    
    <div class="accordion pl-3 pr-3 pb-5 questions-bg" id="questionsTopicOne">
      <h2 class="pt-5 questions-subject">Tópico 1</h2>
    <div class="card">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionOne">
        <h4 class="m-0 questions-color">Pergunta 1</h4>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
        </button>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="questionOne" data-parent="#questionsTopicOne">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga temporibus ducimus sequi reprehenderit dignissimos facere asperiores commodi ut magnam ex exercitationem a similique nostrum culpa fugiat, iusto maxime ipsa.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionTwo">
        <h4 class="mb-0 questions-color">Pergunta 2</h4>
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
        </button>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="questionTwo" data-parent="#questionsTopicOne">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga temporibus ducimus sequi reprehenderit dignissimos facere asperiores commodi ut magnam ex exercitationem a similique nostrum culpa fugiat, iusto maxime ipsa.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionThree">
        <h4 class="mb-0 questions-color">Pergunta 3</h4>
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
        </button>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="questionThree" data-parent="#questionsTopicOne">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga temporibus ducimus sequi reprehenderit dignissimos facere asperiores commodi ut magnam ex exercitationem a similique nostrum culpa fugiat, iusto maxime ipsa.
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php include_once('footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>