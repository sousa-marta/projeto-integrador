<?php

//Países para dropdown-list no campo de países
$countries = ["Afeganistão","África do Sul","Akrotiri","Albânia","Alemanha","Andorra","Angola","Anguila","Antárctida","Antígua e Barbuda","Arábia Saudita","Arctic Ocean","Argélia","Argentina","Arménia","Aruba","Ashmore and Cartier Islands","Atlantic Ocean","Austrália","Áustria","Azerbaijão","Baamas","Bangladeche","Barbados","Barém","Bélgica","Belize","Benim","Bermudas","Bielorrússia","Birmânia","Bolívia","Bósnia e Herzegovina","Botsuana","Brasil","Brunei","Bulgária","Burquina Faso","Burúndi","Butão","Cabo Verde","Camarões","Camboja","Canadá","Catar","Cazaquistão","Chade","Chile","China","Chipre","Clipperton Island","Colômbia","Comores","Congo-Brazzaville","Congo-Kinshasa","Coral Sea Islands","Coreia do Norte","Coreia do Sul","Costa do Marfim","Costa Rica","Croácia","Cuba","Curacao","Dhekelia","Dinamarca","Domínica","Egipto","Emiratos Árabes Unidos","Equador","Eritreia","Eslováquia","Eslovénia","Espanha","Estados Unidos","Estónia","Etiópia","Faroé","Fiji","Filipinas","Finlândia","França","Gabão","Gâmbia","Gana","Gaza Strip","Geórgia","Geórgia do Sul e Sandwich do Sul","Gibraltar","Granada","Grécia","Gronelândia","Guame","Guatemala","Guernsey","Guiana","Guiné","Guiné Equatorial","Guiné-Bissau","Haiti","Honduras","Hong Kong","Hungria","Iémen","Ilha Bouvet","Ilha do Natal","Ilha Norfolk","Ilhas Caimão","Ilhas Cook","Ilhas dos Cocos","Ilhas Falkland","Ilhas Heard e McDonald","Ilhas Marshall","Ilhas Salomão","Ilhas Turcas e Caicos","Ilhas Virgens Americanas","Ilhas Virgens Britânicas","Índia","Indian Ocean","Indonésia","Irão","Iraque","Irlanda","Islândia","Israel","Itália","Jamaica","Jan Mayen","Japão","Jersey","Jibuti","Jordânia","Kosovo","Kuwait","Laos","Lesoto","Letónia","Líbano","Libéria","Líbia","Listenstaine","Lituânia","Luxemburgo","Macau","Macedónia","Madagáscar","Malásia","Malávi","Maldivas","Mali","Malta","Man, Isle of","Marianas do Norte","Marrocos","Maurícia","Mauritânia","México","Micronésia","Moçambique","Moldávia","Mónaco","Mongólia","Monserrate","Montenegro","Mundo","Namíbia","Nauru","Navassa Island","Nepal","Nicarágua","Níger","Nigéria","Niue","Noruega","Nova Caledónia","Nova Zelândia","Omã","Pacific Ocean","Países Baixos","Palau","Panamá","Papua-Nova Guiné","Paquistão","Paracel Islands","Paraguai","Peru","Pitcairn","Polinésia Francesa","Polónia","Porto Rico","Portugal","Quénia","Quirguizistão","Quiribáti","Reino Unido","República Centro-Africana","República Checa","República Dominicana","Roménia","Ruanda","Rússia","Salvador","Samoa","Samoa Americana","Santa Helena","Santa Lúcia","São Bartolomeu","São Cristóvão e Neves","São Marinho","São Martinho","São Pedro e Miquelon","São Tomé e Príncipe","São Vicente e Granadinas","Sara Ocidental","Seicheles","Senegal","Serra Leoa","Sérvia","Singapura","Sint Maarten","Síria","Somália","Southern Ocean","Spratly Islands","Sri Lanca","Suazilândia","Sudão","Sudão do Sul","Suécia","Suíça","Suriname","Svalbard e Jan Mayen","Tailândia","Taiwan","Tajiquistão","Tanzânia","Território Britânico do Oceano Índico","Territórios Austrais Franceses","Timor Leste","Togo","Tokelau","Tonga","Trindade e Tobago","Tunísia","Turquemenistão","Turquia","Tuvalu","Ucrânia","Uganda","União Europeia","Uruguai","Usbequistão","Vanuatu","Vaticano","Venezuela","Vietname","Wake Island","Wallis e Futuna","West Bank","Zâmbia","Zimbabué"]

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Informações do Usuário</title>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- CABEÇALHO -->
  <?php include_once('header.php'); ?>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Informações do Usuário</li>
    </ol>
  </nav>
  
  <!-- INFORMAÇÕES DO USUÁRIO -->
  <main class="d-flex justify-content-center align-items-center p-4 mb-5">
    <form action="" method="post" class="user-info-main card p-5 col-lg-5">
      
      <!-- foto -->
      <div class="user-info-top">
        <img src="img/foto.png" alt="foto usuário" class="rounded m-1 user-info-photo">
        <button type="button" class="btn btn-secondary m-1">Alterar foto</button>
      </div>


      <div class="form-group text-center mt-3">
        <small>Edite suas informações e depois clique em Salvar.<br>* Informações obrigatórias.</small>
      </div>  

      <!-- informações obrigatórias -->
      <div class="form-group">
        <label for="userFullName">Nome completo*</label>
        <input type="text" class="form-control" name="userFullName" id="userFullName" placeholder="Nome completo" required>
      </div>
      <div class="form-group">
        <label for="userEmail">E-mail*</label>
        <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
      </div>
      <label for="userCountry">País de origem*</label>
      <div class="form-group">
        <select class="col-lg-12" name="userCountry" id="userCountry" required>
          <option value="">Selecione seu país de origem</option>
          <?php
            foreach ($countries as $country) {
              echo "<option value='$country'>$country</option>";
            }
          ?>
        </select>
      </div>

      <!-- informações adicionais -->
      <div class="form-group">
        <label for="userPhone">Telefone</label>
        <input type="tel" class="form-control" name="userPhone" id="userPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">
        <small>Formato: 11 12345-1234</small>
      </div>

      <div class="row">
        <div class="form-group col-8 p-0">
            <label for="userAddressStr">Endereço</label>
            <input type="text" class="form-control" name="userAddressStr" id="userAddressStr" placeholder="Endereço">
        </div>
        <div class="form-group col-4 p-0 pl-2">
            <label for="userAddressNo">Número</label>
            <input type="text" class="form-control" name="userAddressNo" id="userAddressNo" placeholder="Número">
        </div>
      </div>
      
      <div class="row">
        <div class="form-group col-6 p-0">
            <label for="userAddressComp">Complemento</label>
            <input type="text" class="form-control" name="userAddressComp" id="userAddressComp" placeholder="Complemento">
        </div>
        <div class="form-group col-6 p-0 pl-2">
            <label for="userAddressPC">CEP</label>
            <input type="text" class="form-control" name="userAddressPC" id="userAddressPC" placeholder="CEP">
        </div>
      </div>

      <button type="submit" class="btn btn-redefine-color align-self-center mt-3">Salvar</button>
    </form>
  </main>
  
  <!-- FOOTER -->
  <?php include_once('footer.php'); ?>
  
  <!-- JAVA SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>