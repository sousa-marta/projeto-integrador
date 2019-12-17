<!-- Página com o formulário para criação de novo curso -->

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
      <button type="button"  onclick="setAddDonation()" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-donation-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
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
<div class="modal fade" id="admin-add-donation-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-donation-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-donation-modal">Adicionar Doação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">

        <form action="/donations" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="donationName">Nome</label>
            <input type="text" class="form-control" name="donationName" id="donationName" placeholder="Nome" required>
          </div>
          <div class="form-group">
            <label for="donationPhone">Telefone</label>
            <input type="tel" class="form-control" name="donationPhone" id="donationPhone" placeholder="11 12345-1234" required>
            <small>Formato: 11 12345-1234</small>
          </div>
          <div class="form-group">
            <label for="donationValue">Valor</label>
            <input type="number" class="form-control" name="donationValue" id="donationValue" placeholder="Valor" required>
          </div>
          <div class="form-group">
            <label for="donationStatus">Estado</label>
            <select class="col-lg-12" name="donationStatus" id="donationStatus" required>
              <option value="" selected disabled>Estado</option>
              <option value="Aguardando">Aguardando</option>
              <option value="Recebido">Recebido</option>
            </select>
          </div>
          <div class="modal-footer modal-footer-bg-color">
            <button type="submit" class="btn btn-primary col-lg-12">Adicionar</button>
          </div>
          
        </form>

      </main>
    </dialog>
  </div>
</div>

@endsection