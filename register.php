<?php

$countries = ["Andorra", "Emirados Árabes Unidos", "Afeganistão", "Antígua e Barbuda", "Anguilla", "Albânia", "Armênia", "Angola", "Antártica", "Argentina", "Samoa Americana"]

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastre-se</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cadastre-se</li>
    </ol>
  </nav>
  
  <main class="d-flex justify-content-center align-items-center p-2">
    <form action="" method="post" class="card p-5 col-lg-5">
      <div class="form-group text-center">
        <h3>Estamos felizes por você querer fazer parte da nossa comunidade</h3>
        <p>Crie uma nova conta informando os dados abaixo</p>
      </div>  
      <div class="form-group">
        <label for="userFullName">Nome completo</label>
        <input type="text" class="form-control" name="userFullName" id="userFullName" placeholder="Nome completo" required>
      </div>
      <div class="form-group">
        <label for="userEmail">E-mail</label>
        <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <label for="userPassword">Senha</label>
        <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Senha" required>
      </div>
      <label for="userCountry">País de origem</label>
      <div class="form-group">
        <select class="col-lg-12" name="userCountry" id="userCountry">
          <option value="">Escolha seu país de origem</option>
          <?php
          for ($i = 1; $i < count($countries);$i++) {
            foreach ($countries as $country) {
              echo "<option value='$country'>$country</option>";
            }
          }
          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-redefine-color align-self-center">Criar conta gratuitamente</button>
      <p class="text-center mt-2">Ao criar minha conta, eu aceito os Termos de Uso e a Política de Privacidade da Oppy.</p>
    </form>
  </main>
</body>
</html>