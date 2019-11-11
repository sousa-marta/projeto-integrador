<?php

$countries = ["Afeganistão","África do Sul","Akrotiri","Albânia","Alemanha","Andorra","Angola","Anguila","Antárctida","Antígua e Barbuda","Arábia Saudita","Arctic Ocean","Argélia","Argentina","Arménia","Aruba","Ashmore and Cartier Islands","Atlantic Ocean","Austrália","Áustria","Azerbaijão","Baamas","Bangladeche","Barbados","Barém","Bélgica","Belize","Benim","Bermudas","Bielorrússia","Birmânia","Bolívia","Bósnia e Herzegovina","Botsuana","Brasil","Brunei","Bulgária","Burquina Faso","Burúndi","Butão","Cabo Verde","Camarões","Camboja","Canadá","Catar","Cazaquistão","Chade","Chile","China","Chipre","Clipperton Island","Colômbia","Comores","Congo-Brazzaville","Congo-Kinshasa","Coral Sea Islands","Coreia do Norte","Coreia do Sul","Costa do Marfim","Costa Rica","Croácia","Cuba","Curacao","Dhekelia","Dinamarca","Domínica","Egipto","Emiratos Árabes Unidos","Equador","Eritreia","Eslováquia","Eslovénia","Espanha","Estados Unidos","Estónia","Etiópia","Faroé","Fiji","Filipinas","Finlândia","França","Gabão","Gâmbia","Gana","Gaza Strip","Geórgia","Geórgia do Sul e Sandwich do Sul","Gibraltar","Granada","Grécia","Gronelândia","Guame","Guatemala","Guernsey","Guiana","Guiné","Guiné Equatorial","Guiné-Bissau","Haiti","Honduras","Hong Kong","Hungria","Iémen","Ilha Bouvet","Ilha do Natal","Ilha Norfolk","Ilhas Caimão","Ilhas Cook","Ilhas dos Cocos","Ilhas Falkland","Ilhas Heard e McDonald","Ilhas Marshall","Ilhas Salomão","Ilhas Turcas e Caicos","Ilhas Virgens Americanas","Ilhas Virgens Britânicas","Índia","Indian Ocean","Indonésia","Irão","Iraque","Irlanda","Islândia","Israel","Itália","Jamaica","Jan Mayen","Japão","Jersey","Jibuti","Jordânia","Kosovo","Kuwait","Laos","Lesoto","Letónia","Líbano","Libéria","Líbia","Listenstaine","Lituânia","Luxemburgo","Macau","Macedónia","Madagáscar","Malásia","Malávi","Maldivas","Mali","Malta","Man, Isle of","Marianas do Norte","Marrocos","Maurícia","Mauritânia","México","Micronésia","Moçambique","Moldávia","Mónaco","Mongólia","Monserrate","Montenegro","Mundo","Namíbia","Nauru","Navassa Island","Nepal","Nicarágua","Níger","Nigéria","Niue","Noruega","Nova Caledónia","Nova Zelândia","Omã","Pacific Ocean","Países Baixos","Palau","Panamá","Papua-Nova Guiné","Paquistão","Paracel Islands","Paraguai","Peru","Pitcairn","Polinésia Francesa","Polónia","Porto Rico","Portugal","Quénia","Quirguizistão","Quiribáti","Reino Unido","República Centro-Africana","República Checa","República Dominicana","Roménia","Ruanda","Rússia","Salvador","Samoa","Samoa Americana","Santa Helena","Santa Lúcia","São Bartolomeu","São Cristóvão e Neves","São Marinho","São Martinho","São Pedro e Miquelon","São Tomé e Príncipe","São Vicente e Granadinas","Sara Ocidental","Seicheles","Senegal","Serra Leoa","Sérvia","Singapura","Sint Maarten","Síria","Somália","Southern Ocean","Spratly Islands","Sri Lanca","Suazilândia","Sudão","Sudão do Sul","Suécia","Suíça","Suriname","Svalbard e Jan Mayen","Tailândia","Taiwan","Tajiquistão","Tanzânia","Território Britânico do Oceano Índico","Territórios Austrais Franceses","Timor Leste","Togo","Tokelau","Tonga","Trindade e Tobago","Tunísia","Turquemenistão","Turquia","Tuvalu","Ucrânia","Uganda","União Europeia","Uruguai","Usbequistão","Vanuatu","Vaticano","Venezuela","Vietname","Wake Island","Wallis e Futuna","West Bank","Zâmbia","Zimbabué"]



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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include_once('header.php'); ?>
  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cadastre-se</li>
    </ol>
  </nav>
  
  <main class="d-flex justify-content-center align-items-center">
    <form action="" method="post" class="card p-5 col-lg-5 contact-form-design">
      <div class="form-group text-center">
        <h4>Estamos felizes por você querer fazer parte da nossa comunidade</h4>
        <p>Crie uma nova conta informando os dados abaixo</p>
      </div>  
      <div class="form-group">
        <label for="userFullName"><h5>Nome completo</h5></label>
        <input type="text" class="form-control" name="userFullName" id="userFullName" placeholder="Nome completo" required>
      </div>
      <div class="form-group">
        <label for="userEmail"><h5>E-mail</h5></label>
        <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <label for="userPassword"><h5>Senha</h5></label>
        <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Senha" required>
      </div>
      <label for="userCountry"><h5>País de origem</h5></label>
      <div class="form-group">
        <select class="col-lg-12" name="userCountry" id="userCountry">
          <option value="">Selecione seu país de origem</option>
          <?php
            foreach ($countries as $country) {
              echo "<option value='$country'>$country</option>";
              $i++;
            }
          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary align-self-center mt-3">Criar conta gratuitamente</button>
      <p class="text-center mt-3">Ao criar minha conta, eu aceito os Termos de Uso e a Política de Privacidade da Oppy.</p>
    </form>
  </main>
  
  <?php include_once('footer.php'); ?>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>