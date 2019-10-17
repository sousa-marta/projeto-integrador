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
    <ol class="breadcrumb mb-0">
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
          for ($i = 1; $i < count($subjects); $i++) {
            foreach ($subjects as $subject) {
              echo "<option value='$subject'>$subject</option>";
              $i++;
            }
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
  </main>
</body>
</html>