@extends('layouts.mainTemplate')

@section('title')
Cadastre-se
@endsection 


@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastre-se</li>
  </ol>
</nav>
@endsection

@section('content')
<?php
$countries = ["Afeganistão","África do Sul","Akrotiri","Albânia","Alemanha","Andorra","Angola","Anguila","Antárctida","Antígua e Barbuda","Arábia Saudita","Arctic Ocean","Argélia","Argentina","Arménia","Aruba","Ashmore and Cartier Islands","Atlantic Ocean","Austrália","Áustria","Azerbaijão","Baamas","Bangladeche","Barbados","Barém","Bélgica","Belize","Benim","Bermudas","Bielorrússia","Birmânia","Bolívia","Bósnia e Herzegovina","Botsuana","Brasil","Brunei","Bulgária","Burquina Faso","Burúndi","Butão","Cabo Verde","Camarões","Camboja","Canadá","Catar","Cazaquistão","Chade","Chile","China","Chipre","Clipperton Island","Colômbia","Comores","Congo-Brazzaville","Congo-Kinshasa","Coral Sea Islands","Coreia do Norte","Coreia do Sul","Costa do Marfim","Costa Rica","Croácia","Cuba","Curacao","Dhekelia","Dinamarca","Domínica","Egipto","Emiratos Árabes Unidos","Equador","Eritreia","Eslováquia","Eslovénia","Espanha","Estados Unidos","Estónia","Etiópia","Faroé","Fiji","Filipinas","Finlândia","França","Gabão","Gâmbia","Gana","Gaza Strip","Geórgia","Geórgia do Sul e Sandwich do Sul","Gibraltar","Granada","Grécia","Gronelândia","Guame","Guatemala","Guernsey","Guiana","Guiné","Guiné Equatorial","Guiné-Bissau","Haiti","Honduras","Hong Kong","Hungria","Iémen","Ilha Bouvet","Ilha do Natal","Ilha Norfolk","Ilhas Caimão","Ilhas Cook","Ilhas dos Cocos","Ilhas Falkland","Ilhas Heard e McDonald","Ilhas Marshall","Ilhas Salomão","Ilhas Turcas e Caicos","Ilhas Virgens Americanas","Ilhas Virgens Britânicas","Índia","Indian Ocean","Indonésia","Irão","Iraque","Irlanda","Islândia","Israel","Itália","Jamaica","Jan Mayen","Japão","Jersey","Jibuti","Jordânia","Kosovo","Kuwait","Laos","Lesoto","Letónia","Líbano","Libéria","Líbia","Listenstaine","Lituânia","Luxemburgo","Macau","Macedónia","Madagáscar","Malásia","Malávi","Maldivas","Mali","Malta","Man, Isle of","Marianas do Norte","Marrocos","Maurícia","Mauritânia","México","Micronésia","Moçambique","Moldávia","Mónaco","Mongólia","Monserrate","Montenegro","Mundo","Namíbia","Nauru","Navassa Island","Nepal","Nicarágua","Níger","Nigéria","Niue","Noruega","Nova Caledónia","Nova Zelândia","Omã","Pacific Ocean","Países Baixos","Palau","Panamá","Papua-Nova Guiné","Paquistão","Paracel Islands","Paraguai","Peru","Pitcairn","Polinésia Francesa","Polónia","Porto Rico","Portugal","Quénia","Quirguizistão","Quiribáti","Reino Unido","República Centro-Africana","República Checa","República Dominicana","Roménia","Ruanda","Rússia","Salvador","Samoa","Samoa Americana","Santa Helena","Santa Lúcia","São Bartolomeu","São Cristóvão e Neves","São Marinho","São Martinho","São Pedro e Miquelon","São Tomé e Príncipe","São Vicente e Granadinas","Sara Ocidental","Seicheles","Senegal","Serra Leoa","Sérvia","Singapura","Sint Maarten","Síria","Somália","Southern Ocean","Spratly Islands","Sri Lanca","Suazilândia","Sudão","Sudão do Sul","Suécia","Suíça","Suriname","Svalbard e Jan Mayen","Tailândia","Taiwan","Tajiquistão","Tanzânia","Território Britânico do Oceano Índico","Territórios Austrais Franceses","Timor Leste","Togo","Tokelau","Tonga","Trindade e Tobago","Tunísia","Turquemenistão","Turquia","Tuvalu","Ucrânia","Uganda","União Europeia","Uruguai","Usbequistão","Vanuatu","Vaticano","Venezuela","Vietname","Wake Island","Wallis e Futuna","West Bank","Zâmbia","Zimbabué"]
?>
  
  <section class="d-flex justify-content-center align-items-center m-4">
    <form action="" method="post" class="card p-4 col-11 col-sm-8 col-lg-6 contact-form-design">
      <div class="form-group text-center">
        <h4>Estamos felizes por você querer fazer parte da nossa comunidade</h4>
        <p>Crie uma conta gratuitamente informando os dados abaixo.</p>
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
        <select class="col-lg-12 form-control" name="userCountry" id="userCountry">
          <option value="">Selecione seu país de origem</option>
          <?php
            foreach ($countries as $country) {
              echo "<option value='$country'>$country</option>";
            }
          ?>
        </select>
      </div>
      <!-- <div class="form-group"> -->
      <button type="submit" class="btn btn-primary align-self-center mt-3">Criar conta</button>
      <!-- </div> -->
      <p class="text-center mt-3">Ao criar minha conta, eu aceito os Termos de Uso e a Política de Privacidade da Oppy.</p>
    </form>
  </section>
  
  @endsection

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>