@extends('layouts.mainTemplate')

@section('title')
Cadastrar Voluntário
@endsection

@section('content')

<!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
<?php
    $countries = ["Afeganistão","África do Sul","Akrotiri","Albânia","Alemanha","Andorra","Angola","Anguila","Antárctida","Antígua e Barbuda","Arábia Saudita","Arctic Ocean","Argélia","Argentina","Arménia","Aruba","Ashmore and Cartier Islands","Atlantic Ocean","Austrália","Áustria","Azerbaijão","Baamas","Bangladeche","Barbados","Barém","Bélgica","Belize","Benim","Bermudas","Bielorrússia","Birmânia","Bolívia","Bósnia e Herzegovina","Botsuana","Brasil","Brunei","Bulgária","Burquina Faso","Burúndi","Butão","Cabo Verde","Camarões","Camboja","Canadá","Catar","Cazaquistão","Chade","Chile","China","Chipre","Clipperton Island","Colômbia","Comores","Congo-Brazzaville","Congo-Kinshasa","Coral Sea Islands","Coreia do Norte","Coreia do Sul","Costa do Marfim","Costa Rica","Croácia","Cuba","Curacao","Dhekelia","Dinamarca","Domínica","Egipto","Emiratos Árabes Unidos","Equador","Eritreia","Eslováquia","Eslovénia","Espanha","Estados Unidos","Estónia","Etiópia","Faroé","Fiji","Filipinas","Finlândia","França","Gabão","Gâmbia","Gana","Gaza Strip","Geórgia","Geórgia do Sul e Sandwich do Sul","Gibraltar","Granada","Grécia","Gronelândia","Guame","Guatemala","Guernsey","Guiana","Guiné","Guiné Equatorial","Guiné-Bissau","Haiti","Honduras","Hong Kong","Hungria","Iémen","Ilha Bouvet","Ilha do Natal","Ilha Norfolk","Ilhas Caimão","Ilhas Cook","Ilhas dos Cocos","Ilhas Falkland","Ilhas Heard e McDonald","Ilhas Marshall","Ilhas Salomão","Ilhas Turcas e Caicos","Ilhas Virgens Americanas","Ilhas Virgens Britânicas","Índia","Indian Ocean","Indonésia","Irão","Iraque","Irlanda","Islândia","Israel","Itália","Jamaica","Jan Mayen","Japão","Jersey","Jibuti","Jordânia","Kosovo","Kuwait","Laos","Lesoto","Letónia","Líbano","Libéria","Líbia","Listenstaine","Lituânia","Luxemburgo","Macau","Macedónia","Madagáscar","Malásia","Malávi","Maldivas","Mali","Malta","Man, Isle of","Marianas do Norte","Marrocos","Maurícia","Mauritânia","México","Micronésia","Moçambique","Moldávia","Mónaco","Mongólia","Monserrate","Montenegro","Mundo","Namíbia","Nauru","Navassa Island","Nepal","Nicarágua","Níger","Nigéria","Niue","Noruega","Nova Caledónia","Nova Zelândia","Omã","Pacific Ocean","Países Baixos","Palau","Panamá","Papua-Nova Guiné","Paquistão","Paracel Islands","Paraguai","Peru","Pitcairn","Polinésia Francesa","Polónia","Porto Rico","Portugal","Quénia","Quirguizistão","Quiribáti","Reino Unido","República Centro-Africana","República Checa","República Dominicana","Roménia","Ruanda","Rússia","Salvador","Samoa","Samoa Americana","Santa Helena","Santa Lúcia","São Bartolomeu","São Cristóvão e Neves","São Marinho","São Martinho","São Pedro e Miquelon","São Tomé e Príncipe","São Vicente e Granadinas","Sara Ocidental","Seicheles","Senegal","Serra Leoa","Sérvia","Singapura","Sint Maarten","Síria","Somália","Southern Ocean","Spratly Islands","Sri Lanca","Suazilândia","Sudão","Sudão do Sul","Suécia","Suíça","Suriname","Svalbard e Jan Mayen","Tailândia","Taiwan","Tajiquistão","Tanzânia","Território Britânico do Oceano Índico","Territórios Austrais Franceses","Timor Leste","Togo","Tokelau","Tonga","Trindade e Tobago","Tunísia","Turquemenistão","Turquia","Tuvalu","Ucrânia","Uganda","União Europeia","Uruguai","Usbequistão","Vanuatu","Vaticano","Venezuela","Vietname","Wake Island","Wallis e Futuna","West Bank","Zâmbia","Zimbabué"]
?>

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-4 my-5">
  <form action="/admin/cadastro-voluntario" method="post" class="register-volunteer-main card mt-5 p-5 col-lg-5">

    <div class="form-group text-center mt-3">
      <h2>Cadastrar Novo Voluntário</h2>
    </div>  

    <!-- informações obrigatórias -->
    <div class="form-group">
      <label for="volunteerName">Nome Completo</label>
      <input type="text" class="form-control" name="volunteerName" id="volunteerName" placeholder="Nome do voluntário" required>
    </div>
    <div class="form-group">
      <label for="volunteerEmail">E-mail</label>
      <input type="email" class="form-control" name="volunteerEmail" id="volunteerEmail" placeholder="E-mail" required>
    </div>
    <div class="form-group">
      <label for="volunteerPhone">Telefone</label>
      <input type="tel" class="form-control" name="volunteerPhone" id="volunteerPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
      <small>Formato: 11 12345-1234</small>
    </div>
    <div class="row">
      <div class="form-group col-8 p-0">
        <label for="volunteerAddressStr">Endereço</label>
        <input type="text" class="form-control" name="volunteerAddressStr" id="volunteerAddressStr" placeholder="Endereço">
      </div>
      <div class="form-group col-4 p-0 pl-2">
        <label for="volunteerAddressNo">Número</label>
        <input type="text" class="form-control" name="volunteerAddressNo" id="volunteerAddressNo" placeholder="Número">
      </div>
    </div>   
    <div class="row">
      <div class="form-group col-6 p-0">
        <label for="volunteerAddressComp">Complemento</label>
        <input type="text" class="form-control" name="volunteerAddressComp" id="volunteerAddressComp" placeholder="Complemento">
      </div>
      <div class="form-group col-6 p-0 pl-2">
        <label for="volunteerAddressPC">CEP</label>
        <input type="text" class="form-control" name="volunteerAddressPC" id="volunteerAddressPC" placeholder="CEP">
      </div>
    </div>

    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>
  </form>
</section>


@endsection