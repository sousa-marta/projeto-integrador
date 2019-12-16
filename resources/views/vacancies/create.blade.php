@extends('layouts.mainTemplate')

@section('title')
Vagas
@endsection

@section('content')

<!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
<?php
  // $categories = ["Gastronomia", "Serviços Gerais", "Hotelaria"];
  // $companies = ["evolke Treinamentos", "Padaria Jabaquara", "Restaurante Árabe"];
  // $countries = ["Afeganistão", "África do Sul", "Akrotiri", "Albânia", "Alemanha", "Andorra", "Angola", "Anguila", "Antárctida", "Antígua e Barbuda", "Arábia Saudita", "Arctic Ocean", "Argélia", "Argentina", "Arménia", "Aruba", "Ashmore and Cartier Islands", "Atlantic Ocean", "Austrália", "Áustria", "Azerbaijão", "Baamas", "Bangladeche", "Barbados", "Barém", "Bélgica", "Belize", "Benim", "Bermudas", "Bielorrússia", "Birmânia", "Bolívia", "Bósnia e Herzegovina", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burquina Faso", "Burúndi", "Butão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Catar", "Cazaquistão", "Chade", "Chile", "China", "Chipre", "Clipperton Island", "Colômbia", "Comores", "Congo-Brazzaville", "Congo-Kinshasa", "Coral Sea Islands", "Coreia do Norte", "Coreia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Cuba", "Curacao", "Dhekelia", "Dinamarca", "Domínica", "Egipto", "Emiratos Árabes Unidos", "Equador", "Eritreia", "Eslováquia", "Eslovénia", "Espanha", "Estados Unidos", "Estónia", "Etiópia", "Faroé", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Gaza Strip", "Geórgia", "Geórgia do Sul e Sandwich do Sul", "Gibraltar", "Granada", "Grécia", "Gronelândia", "Guame", "Guatemala", "Guernsey", "Guiana", "Guiné", "Guiné Equatorial", "Guiné-Bissau", "Haiti", "Honduras", "Hong Kong", "Hungria", "Iémen", "Ilha Bouvet", "Ilha do Natal", "Ilha Norfolk", "Ilhas Caimão", "Ilhas Cook", "Ilhas dos Cocos", "Ilhas Falkland", "Ilhas Heard e McDonald", "Ilhas Marshall", "Ilhas Salomão", "Ilhas Turcas e Caicos", "Ilhas Virgens Americanas", "Ilhas Virgens Britânicas", "Índia", "Indian Ocean", "Indonésia", "Irão", "Iraque", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica", "Jan Mayen", "Japão", "Jersey", "Jibuti", "Jordânia", "Kosovo", "Kuwait", "Laos", "Lesoto", "Letónia", "Líbano", "Libéria", "Líbia", "Listenstaine", "Lituânia", "Luxemburgo", "Macau", "Macedónia", "Madagáscar", "Malásia", "Malávi", "Maldivas", "Mali", "Malta", "Man, Isle of", "Marianas do Norte", "Marrocos", "Maurícia", "Mauritânia", "México", "Micronésia", "Moçambique", "Moldávia", "Mónaco", "Mongólia", "Monserrate", "Montenegro", "Mundo", "Namíbia", "Nauru", "Navassa Island", "Nepal", "Nicarágua", "Níger", "Nigéria", "Niue", "Noruega", "Nova Caledónia", "Nova Zelândia", "Omã", "Pacific Ocean", "Países Baixos", "Palau", "Panamá", "Papua-Nova Guiné", "Paquistão", "Paracel Islands", "Paraguai", "Peru", "Pitcairn", "Polinésia Francesa", "Polónia", "Porto Rico", "Portugal", "Quénia", "Quirguizistão", "Quiribáti", "Reino Unido", "República Centro-Africana", "República Checa", "República Dominicana", "Roménia", "Ruanda", "Rússia", "Salvador", "Samoa", "Samoa Americana", "Santa Helena", "Santa Lúcia", "São Bartolomeu", "São Cristóvão e Neves", "São Marinho", "São Martinho", "São Pedro e Miquelon", "São Tomé e Príncipe", "São Vicente e Granadinas", "Sara Ocidental", "Seicheles", "Senegal", "Serra Leoa", "Sérvia", "Singapura", "Sint Maarten", "Síria", "Somália", "Southern Ocean", "Spratly Islands", "Sri Lanca", "Suazilândia", "Sudão", "Sudão do Sul", "Suécia", "Suíça", "Suriname", "Svalbard e Jan Mayen", "Tailândia", "Taiwan", "Tajiquistão", "Tanzânia", "Território Britânico do Oceano Índico", "Territórios Austrais Franceses", "Timor Leste", "Togo", "Tokelau", "Tonga", "Trindade e Tobago", "Tunísia", "Turquemenistão", "Turquia", "Tuvalu", "Ucrânia", "Uganda", "União Europeia", "Uruguai", "Usbequistão", "Vanuatu", "Vaticano", "Venezuela", "Vietname", "Wake Island", "Wallis e Futuna", "West Bank", "Zâmbia", "Zimbabué"]
?>

@if(!empty($message))
  <div class="alert alert-success">
    {{ $message }}
  </div>
@endif

<!-- gerenciamento das vagas -->
<section class="admin-tables-section mt-5 pt-5">
  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>OPORTUNIDADES</h2>
      <button type="button" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-opportunity-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col" class="d-none d-sm-table-cell">Categoria</th>
          <th scope="col" class="d-none d-sm-table-cell">Empresa</th>
          <th scope="col" class="d-none d-sm-table-cell">Salário</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($vacancies as $vacancy)
        <tr class="text-center">
          <th scope="row">{{ $vacancy->id }}</th>
          <td>{{ $vacancy->name }}</td>
          <td class="d-none d-sm-table-cell">{{ $vacancy->category_name }}</td>
          <td class="d-none d-sm-table-cell">{{ $vacancy->company_name }}</td>
          <td class="d-none d-sm-table-cell">R$ {{ $vacancy->wage }}</td>
          <td>{{ $vacancy->state }}</td>
          <td class="d-flex justify-content-center align-items-center">
          <form action="" method="post">
            @csrf
            <!-- @method('EDIT') -->
            <button class="btn btn-success btn-sm"><i class='fas fa-pencil-alt'></i></button>
          </form>
          <form action="" method="post" onsubmit="return confirm('Tem certeza de que deseja remover?')">
            @csrf
            <!-- @method('DELETE') -->
            <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
          </form> 
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar vaga -->
<div class="modal fade" id="admin-add-opportunity-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-opportunity-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-opportunity-modal">Adicionar/Editar Vaga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
        <form>
        @csrf
          <div class="form-group">
            <label for="opportunityName">Nome da vaga</label>
            <input type="text" class="form-control" name="name" id="opportunityName" placeholder="Nome do curso" required>
          </div>
          <div class="form-group">
            <label for="opportunityCategory">Categoria</label>
            <select class="col-lg-12" name="category" id="opportunityCategory" required>
              <option value="" selected disabled>Selecione a categoria</option>
              <!-- <?php 
              // foreach ($categories as $category) {
                // echo "<option value='$category'>$category</option>";
              // }
              // ?> -->
            </select>
          </div>
          <div class="form-group">
            <label for="opportunityCompany">Empresa</label>
            <select class="col-lg-12" name="company" id="opportunityCompany" required>
              <option value="" selected disabled>Selecione a empresa</option>
              <!-- <?php 
              // foreach ($companies as $company) {
              //  echo "<option value='$company'>$company</option>";
              // }
              ?> -->
            </select>
          </div>
          <div class="form-group">
            <label for="opportunityDescription">Descrição</label>
            <textarea type="text" class="form-control" name="description" id="opportunityDescription" placeholder="Descrição" required></textarea>
          </div>
          <div class="form-group">
            <label for="companyEmail">E-mail</label>
            <input type="email" class="form-control" name="email" id="companyEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <label for="companyPhone">Telefone</label>
            <input type="tel" class="form-control" name="phone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
            <small>Formato: 11 12345-1234</small>
          </div>
          <div class="form-group">
            <label for="wage">Salário</label>
            <input type="number" class="form-control" name="wage" id="wage" placeholder="Salário" required>
          </div>          
        </form>
      </main>
      <footer class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Adicionar/Editar</button>
      </footer>
    </dialog>
  </div>
</div>
@endsection