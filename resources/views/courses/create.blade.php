{{-- TODO: 
  - categorias e empresas no form dinâmicas
  Acrescentar required nos forms --}}

@extends('layouts.mainTemplate')

@section('title')
Cursos
@endsection

@section('content')

<!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
<?php
  $categories = ["Gastronomia", "Serviços Gerais", "Hotelaria"];
  $companies = ["evolke Treinamentos", "Padaria Jabaquara", "Restaurante Árabe"];
  $countries = ["Afeganistão", "África do Sul", "Akrotiri", "Albânia", "Alemanha", "Andorra", "Angola", "Anguila", "Antárctida", "Antígua e Barbuda", "Arábia Saudita", "Arctic Ocean", "Argélia", "Argentina", "Arménia", "Aruba", "Ashmore and Cartier Islands", "Atlantic Ocean", "Austrália", "Áustria", "Azerbaijão", "Baamas", "Bangladeche", "Barbados", "Barém", "Bélgica", "Belize", "Benim", "Bermudas", "Bielorrússia", "Birmânia", "Bolívia", "Bósnia e Herzegovina", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burquina Faso", "Burúndi", "Butão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Catar", "Cazaquistão", "Chade", "Chile", "China", "Chipre", "Clipperton Island", "Colômbia", "Comores", "Congo-Brazzaville", "Congo-Kinshasa", "Coral Sea Islands", "Coreia do Norte", "Coreia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Cuba", "Curacao", "Dhekelia", "Dinamarca", "Domínica", "Egipto", "Emiratos Árabes Unidos", "Equador", "Eritreia", "Eslováquia", "Eslovénia", "Espanha", "Estados Unidos", "Estónia", "Etiópia", "Faroé", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Gaza Strip", "Geórgia", "Geórgia do Sul e Sandwich do Sul", "Gibraltar", "Granada", "Grécia", "Gronelândia", "Guame", "Guatemala", "Guernsey", "Guiana", "Guiné", "Guiné Equatorial", "Guiné-Bissau", "Haiti", "Honduras", "Hong Kong", "Hungria", "Iémen", "Ilha Bouvet", "Ilha do Natal", "Ilha Norfolk", "Ilhas Caimão", "Ilhas Cook", "Ilhas dos Cocos", "Ilhas Falkland", "Ilhas Heard e McDonald", "Ilhas Marshall", "Ilhas Salomão", "Ilhas Turcas e Caicos", "Ilhas Virgens Americanas", "Ilhas Virgens Britânicas", "Índia", "Indian Ocean", "Indonésia", "Irão", "Iraque", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica", "Jan Mayen", "Japão", "Jersey", "Jibuti", "Jordânia", "Kosovo", "Kuwait", "Laos", "Lesoto", "Letónia", "Líbano", "Libéria", "Líbia", "Listenstaine", "Lituânia", "Luxemburgo", "Macau", "Macedónia", "Madagáscar", "Malásia", "Malávi", "Maldivas", "Mali", "Malta", "Man, Isle of", "Marianas do Norte", "Marrocos", "Maurícia", "Mauritânia", "México", "Micronésia", "Moçambique", "Moldávia", "Mónaco", "Mongólia", "Monserrate", "Montenegro", "Mundo", "Namíbia", "Nauru", "Navassa Island", "Nepal", "Nicarágua", "Níger", "Nigéria", "Niue", "Noruega", "Nova Caledónia", "Nova Zelândia", "Omã", "Pacific Ocean", "Países Baixos", "Palau", "Panamá", "Papua-Nova Guiné", "Paquistão", "Paracel Islands", "Paraguai", "Peru", "Pitcairn", "Polinésia Francesa", "Polónia", "Porto Rico", "Portugal", "Quénia", "Quirguizistão", "Quiribáti", "Reino Unido", "República Centro-Africana", "República Checa", "República Dominicana", "Roménia", "Ruanda", "Rússia", "Salvador", "Samoa", "Samoa Americana", "Santa Helena", "Santa Lúcia", "São Bartolomeu", "São Cristóvão e Neves", "São Marinho", "São Martinho", "São Pedro e Miquelon", "São Tomé e Príncipe", "São Vicente e Granadinas", "Sara Ocidental", "Seicheles", "Senegal", "Serra Leoa", "Sérvia", "Singapura", "Sint Maarten", "Síria", "Somália", "Southern Ocean", "Spratly Islands", "Sri Lanca", "Suazilândia", "Sudão", "Sudão do Sul", "Suécia", "Suíça", "Suriname", "Svalbard e Jan Mayen", "Tailândia", "Taiwan", "Tajiquistão", "Tanzânia", "Território Britânico do Oceano Índico", "Territórios Austrais Franceses", "Timor Leste", "Togo", "Tokelau", "Tonga", "Trindade e Tobago", "Tunísia", "Turquemenistão", "Turquia", "Tuvalu", "Ucrânia", "Uganda", "União Europeia", "Uruguai", "Usbequistão", "Vanuatu", "Vaticano", "Venezuela", "Vietname", "Wake Island", "Wallis e Futuna", "West Bank", "Zâmbia", "Zimbabué"];
?>

{{-- Usar após definir uma mensagem de sucesso no cadastramento --}}
{{-- @if(!empty($message))
  <div class="alert alert-success">
    {{ $message }}
  </div>
@endif --}}


<!-- Listar cursos já cadastrados -->
<section class="admin-tables-section mt-5 py-5">

  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>CURSOS</h2>
      <button type="button" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-course-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Duração</th>
          <th scope="col">Início</th>
          <th scope="col">Fim</th>
          <th scope="col">Categoria</th>
          <th scope="col">Empresa</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $course)
          <tr>
            <th scope="row">{{ $course->id }}</th>
            <td>{{ $course->name }}</td>
            <td>{{ $course->description }}</td>
            <td>{{ $course->duration }}</td>
            <td>{{ $course->start }}</td>
            <td>{{ $course->end }}</td>
            <td>{{ $course->category_id }}</td>
            <td>{{ $course->company_id }}</td>
            <td class="d-flex justify-content-start align-items-center">

              {{-- botão editar --}}
              <form action="" method="post">
                @csrf
                @method('EDIT')
                <button class="btn btn-success btn-sm mr-1"><i class='fas fa-pencil-alt'></i></button>
              </form>

              {{-- botão excluir --}}
              <form action="" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>                
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar novo curso -->
<div class="modal fade" id="admin-add-course-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-course-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-course-modal">Adicionar Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">

        <form action="/courses" method="post">
          @csrf
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
            {{-- <small>Formato: mm/dd/yyyy </small> --}}
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
                    <option value='{{ $category->id }}'> {{ $category->name }} </option>;
                  @endforeach
              </select>
            </div>
          <div class="form-group">
              <label for="courseCompany">Empresa</label>
              <select class="col-lg-12" name="category" id="courseCompany" required>
                <option value="" selected disabled>Selecione a empresa</option>
                  @foreach ($companies as $company)
                    <option value='{{ $company->id }}'> {{ $company->name }} </option>;
                  @endforeach
              </select>
            </div>
          <div class="modal-footer modal-footer-bg-color">
            <button type="submit" class="btn btn-primary col-lg-12">Salvar Curso</button>
          </div>
        </form>

      </main>
    </dialog>
  </div>
</div>

@endsection