<!-- Página com o formulário para edição de curso -->

  @extends('layouts.mainTemplate')

  @section('title')
  Editar Cursos
  @endsection
  
  @section('content')
  
  <!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
  <?php
    $categories = ["Gastronomia", "Serviços Gerais", "Hotelaria"];
    $companies = ["evolke Treinamentos", "Padaria Jabaquara", "Restaurante Árabe"];
    $countries = ["Afeganistão", "África do Sul", "Akrotiri", "Albânia", "Alemanha", "Andorra", "Angola", "Anguila", "Antárctida", "Antígua e Barbuda", "Arábia Saudita", "Arctic Ocean", "Argélia", "Argentina", "Arménia", "Aruba", "Ashmore and Cartier Islands", "Atlantic Ocean", "Austrália", "Áustria", "Azerbaijão", "Baamas", "Bangladeche", "Barbados", "Barém", "Bélgica", "Belize", "Benim", "Bermudas", "Bielorrússia", "Birmânia", "Bolívia", "Bósnia e Herzegovina", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burquina Faso", "Burúndi", "Butão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Catar", "Cazaquistão", "Chade", "Chile", "China", "Chipre", "Clipperton Island", "Colômbia", "Comores", "Congo-Brazzaville", "Congo-Kinshasa", "Coral Sea Islands", "Coreia do Norte", "Coreia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Cuba", "Curacao", "Dhekelia", "Dinamarca", "Domínica", "Egipto", "Emiratos Árabes Unidos", "Equador", "Eritreia", "Eslováquia", "Eslovénia", "Espanha", "Estados Unidos", "Estónia", "Etiópia", "Faroé", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Gaza Strip", "Geórgia", "Geórgia do Sul e Sandwich do Sul", "Gibraltar", "Granada", "Grécia", "Gronelândia", "Guame", "Guatemala", "Guernsey", "Guiana", "Guiné", "Guiné Equatorial", "Guiné-Bissau", "Haiti", "Honduras", "Hong Kong", "Hungria", "Iémen", "Ilha Bouvet", "Ilha do Natal", "Ilha Norfolk", "Ilhas Caimão", "Ilhas Cook", "Ilhas dos Cocos", "Ilhas Falkland", "Ilhas Heard e McDonald", "Ilhas Marshall", "Ilhas Salomão", "Ilhas Turcas e Caicos", "Ilhas Virgens Americanas", "Ilhas Virgens Britânicas", "Índia", "Indian Ocean", "Indonésia", "Irão", "Iraque", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica", "Jan Mayen", "Japão", "Jersey", "Jibuti", "Jordânia", "Kosovo", "Kuwait", "Laos", "Lesoto", "Letónia", "Líbano", "Libéria", "Líbia", "Listenstaine", "Lituânia", "Luxemburgo", "Macau", "Macedónia", "Madagáscar", "Malásia", "Malávi", "Maldivas", "Mali", "Malta", "Man, Isle of", "Marianas do Norte", "Marrocos", "Maurícia", "Mauritânia", "México", "Micronésia", "Moçambique", "Moldávia", "Mónaco", "Mongólia", "Monserrate", "Montenegro", "Mundo", "Namíbia", "Nauru", "Navassa Island", "Nepal", "Nicarágua", "Níger", "Nigéria", "Niue", "Noruega", "Nova Caledónia", "Nova Zelândia", "Omã", "Pacific Ocean", "Países Baixos", "Palau", "Panamá", "Papua-Nova Guiné", "Paquistão", "Paracel Islands", "Paraguai", "Peru", "Pitcairn", "Polinésia Francesa", "Polónia", "Porto Rico", "Portugal", "Quénia", "Quirguizistão", "Quiribáti", "Reino Unido", "República Centro-Africana", "República Checa", "República Dominicana", "Roménia", "Ruanda", "Rússia", "Salvador", "Samoa", "Samoa Americana", "Santa Helena", "Santa Lúcia", "São Bartolomeu", "São Cristóvão e Neves", "São Marinho", "São Martinho", "São Pedro e Miquelon", "São Tomé e Príncipe", "São Vicente e Granadinas", "Sara Ocidental", "Seicheles", "Senegal", "Serra Leoa", "Sérvia", "Singapura", "Sint Maarten", "Síria", "Somália", "Southern Ocean", "Spratly Islands", "Sri Lanca", "Suazilândia", "Sudão", "Sudão do Sul", "Suécia", "Suíça", "Suriname", "Svalbard e Jan Mayen", "Tailândia", "Taiwan", "Tajiquistão", "Tanzânia", "Território Britânico do Oceano Índico", "Territórios Austrais Franceses", "Timor Leste", "Togo", "Tokelau", "Tonga", "Trindade e Tobago", "Tunísia", "Turquemenistão", "Turquia", "Tuvalu", "Ucrânia", "Uganda", "União Europeia", "Uruguai", "Usbequistão", "Vanuatu", "Vaticano", "Venezuela", "Vietname", "Wake Island", "Wallis e Futuna", "West Bank", "Zâmbia", "Zimbabué"];
  ?>
  
  <section class="d-flex justify-content-center align-items-center p-4 my-5">
  
    <form class="bg-light py-2 px-5" action="{{url('courses', [$course->id])}}" method="post">
      @csrf
      @method('PUT')
      <input type="hidden" name="_method" value="PUT">
      <h5>Editar Curso</h5>
      <div class="form-group">
        <label for="courseName">Nome</label>
        <input type="text" class="form-control" name="courseName" id="courseName" placeholder="Nome do curso" required>
      </div>
      <div class="form-group">
        <label for="courseDescription">Descrição</label>
        <textarea class="form-control" name="courseDescription" id="courseDescription" placeholder="Descrição do curso" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="courseDuration">Duração (meses)</label>
        <input type="number" class="form-control" name="courseDuration" id="courseDuration" placeholder="Duração do curso em meses">
      </div>
      <div class="form-group">
        <label for="courseStart">Início</label>
        <input type="date" class="form-control" name="courseStart" id="courseStart" placeholder="Data início do curso">
      </div>
      <div class="form-group">
        <label for="courseEnd">Fim</label>
        <input type="date" class="form-control" name="courseEnd" id="courseEnd" placeholder="Data final do curso">
        {{-- <small>Formato: mm/dd/yyyy </small> --}}
      </div>
      <input type="hidden" name="courseStatus" value="disponível">
      <div class="form-group">
          <label for="courseCategory">Categoria</label>
          <select class="col-lg-12" name="courseCategory" id="courseCategory">
            <option value="" selected disabled>Selecione a categoria</option>
              @foreach ($categories as $category)
                <option value={{ 1 }}> {{ $category }} </option>;
              @endforeach
          </select>
        </div>
      <div class="form-group">
          <label for="courseCompany">Empresa</label>
          <select class="col-lg-12" name="courseCompany" id="courseCompany" >
            <option value="" selected disabled>Selecione a empresa</option>
              @foreach ($companies as $company)
                <option value={{ 1 }}> {{ $company }} </option>;
              @endforeach
          </select>
        </div>
      <div class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Alterar Curso</button>
      </div>
    </form>
  </section>
  @endsection