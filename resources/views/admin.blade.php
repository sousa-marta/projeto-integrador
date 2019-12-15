@extends('layouts.mainTemplate')

@section('title')
Página do Administrador
@endsection

@section('content')

<!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
<?php
  $categories = ["Gastronomia", "Serviços Gerais", "Hotelaria"];
  $companies = ["evolke Treinamentos", "Padaria Jabaquara", "Restaurante Árabe"];
  $countries = ["Afeganistão", "África do Sul", "Akrotiri", "Albânia", "Alemanha", "Andorra", "Angola", "Anguila", "Antárctida", "Antígua e Barbuda", "Arábia Saudita", "Arctic Ocean", "Argélia", "Argentina", "Arménia", "Aruba", "Ashmore and Cartier Islands", "Atlantic Ocean", "Austrália", "Áustria", "Azerbaijão", "Baamas", "Bangladeche", "Barbados", "Barém", "Bélgica", "Belize", "Benim", "Bermudas", "Bielorrússia", "Birmânia", "Bolívia", "Bósnia e Herzegovina", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burquina Faso", "Burúndi", "Butão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Catar", "Cazaquistão", "Chade", "Chile", "China", "Chipre", "Clipperton Island", "Colômbia", "Comores", "Congo-Brazzaville", "Congo-Kinshasa", "Coral Sea Islands", "Coreia do Norte", "Coreia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Cuba", "Curacao", "Dhekelia", "Dinamarca", "Domínica", "Egipto", "Emiratos Árabes Unidos", "Equador", "Eritreia", "Eslováquia", "Eslovénia", "Espanha", "Estados Unidos", "Estónia", "Etiópia", "Faroé", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Gaza Strip", "Geórgia", "Geórgia do Sul e Sandwich do Sul", "Gibraltar", "Granada", "Grécia", "Gronelândia", "Guame", "Guatemala", "Guernsey", "Guiana", "Guiné", "Guiné Equatorial", "Guiné-Bissau", "Haiti", "Honduras", "Hong Kong", "Hungria", "Iémen", "Ilha Bouvet", "Ilha do Natal", "Ilha Norfolk", "Ilhas Caimão", "Ilhas Cook", "Ilhas dos Cocos", "Ilhas Falkland", "Ilhas Heard e McDonald", "Ilhas Marshall", "Ilhas Salomão", "Ilhas Turcas e Caicos", "Ilhas Virgens Americanas", "Ilhas Virgens Britânicas", "Índia", "Indian Ocean", "Indonésia", "Irão", "Iraque", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica", "Jan Mayen", "Japão", "Jersey", "Jibuti", "Jordânia", "Kosovo", "Kuwait", "Laos", "Lesoto", "Letónia", "Líbano", "Libéria", "Líbia", "Listenstaine", "Lituânia", "Luxemburgo", "Macau", "Macedónia", "Madagáscar", "Malásia", "Malávi", "Maldivas", "Mali", "Malta", "Man, Isle of", "Marianas do Norte", "Marrocos", "Maurícia", "Mauritânia", "México", "Micronésia", "Moçambique", "Moldávia", "Mónaco", "Mongólia", "Monserrate", "Montenegro", "Mundo", "Namíbia", "Nauru", "Navassa Island", "Nepal", "Nicarágua", "Níger", "Nigéria", "Niue", "Noruega", "Nova Caledónia", "Nova Zelândia", "Omã", "Pacific Ocean", "Países Baixos", "Palau", "Panamá", "Papua-Nova Guiné", "Paquistão", "Paracel Islands", "Paraguai", "Peru", "Pitcairn", "Polinésia Francesa", "Polónia", "Porto Rico", "Portugal", "Quénia", "Quirguizistão", "Quiribáti", "Reino Unido", "República Centro-Africana", "República Checa", "República Dominicana", "Roménia", "Ruanda", "Rússia", "Salvador", "Samoa", "Samoa Americana", "Santa Helena", "Santa Lúcia", "São Bartolomeu", "São Cristóvão e Neves", "São Marinho", "São Martinho", "São Pedro e Miquelon", "São Tomé e Príncipe", "São Vicente e Granadinas", "Sara Ocidental", "Seicheles", "Senegal", "Serra Leoa", "Sérvia", "Singapura", "Sint Maarten", "Síria", "Somália", "Southern Ocean", "Spratly Islands", "Sri Lanca", "Suazilândia", "Sudão", "Sudão do Sul", "Suécia", "Suíça", "Suriname", "Svalbard e Jan Mayen", "Tailândia", "Taiwan", "Tajiquistão", "Tanzânia", "Território Britânico do Oceano Índico", "Territórios Austrais Franceses", "Timor Leste", "Togo", "Tokelau", "Tonga", "Trindade e Tobago", "Tunísia", "Turquemenistão", "Turquia", "Tuvalu", "Ucrânia", "Uganda", "União Europeia", "Uruguai", "Usbequistão", "Vanuatu", "Vaticano", "Venezuela", "Vietname", "Wake Island", "Wallis e Futuna", "West Bank", "Zâmbia", "Zimbabué"]
?>

<!-- botões para adicionar empresa e voluntário -->
<div class="container mt-5 py-5">
  <nav class="row d-flex justify-content-center m-2">
    <a class="col-md-5 col-lg-3 btn btn-secondary m-2" href="/companies/create"><i class="fa fa-building" aria-hidden="true"></i> +Empresa</a>
    <a class="col-md-5 col-lg-3 btn btn-secondary m-2" href="/volunteers/create"><i class="fa fa-user-circle-o" aria-hidden="true"></i> +Voluntário</a>
  </nav>
</div>

<!-- gerenciamento dos cursos -->
<section class="admin-course-section admin-tables-section">

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
          <th scope="col" class="d-none d-sm-table-cell">Categoria</th>
          <th scope="col" class="d-none d-sm-table-cell">Empresa</th>
          <th scope="col" class="d-none d-sm-table-cell">Início</th>
          <th scope="col" class="d-none d-sm-table-cell">Fim</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Curso de Atendente</td>
          <td class="d-none d-sm-table-cell">Hotelaria</td>
          <td class="d-none d-sm-table-cell">evolke Treinamentos</td>
          <td class="d-none d-sm-table-cell">20/12/2019</td>
          <td class="d-none d-sm-table-cell">20/12/2019</td>
          <td>Aberto</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table" data-toggle="modal" data-target="#admin-add-course-modal">editar</button>
            <button type="button" class="admin-btn-table">fechar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Curso de Garçom</td>
          <td class="d-none d-sm-table-cell">Serviços Gerais</td>
          <td class="d-none d-sm-table-cell">Restaurando Cursos</td>
          <td class="d-none d-sm-table-cell">10/12/2019</td>
          <td class="d-none d-sm-table-cell">10/12/2019</td>
          <td>Fechado</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table" data-toggle="modal" data-target="#admin-add-course-modal">editar</button>
            <button type="button" class="admin-btn-table">fechar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar curso -->
<div class="modal fade" id="admin-add-course-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-course-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-course-modal">Adicionar/Editar Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form>

          <div class="form-group">
            <label for="courseName">Nome do curso</label>
            <input type="text" class="form-control" name="courseName" id="courseName" placeholder="Nome do curso" required>
          </div>
          <div class="form-group">
            <label for="courseCategory">Catagoria</label>
            <select class="col-lg-12" name="courseCategory" id="courseCategory" required>
              <option value="" selected disabled>Selecione a categoria</option>
              <?php
              foreach ($categories as $category) {
                echo "<option value='$category'>$category</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="courseCompany">Empresa</label>
            <select class="col-lg-12" name="courseCompany" id="courseCompany" required>
              <option value="" selected disabled>Selecione a empresa</option>
              <?php
              foreach ($companies as $company) {
                echo "<option value='$company'>$company</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="courseStart">Início</label>
            <input type="date" class="form-control" name="courseStart" id="courseStart" placeholder="Nome do curso" required>
          </div>
          <div class="form-group">
            <label for="endStart">Fim</label>
            <input type="date" class="form-control" name="endStart" id="endStart" placeholder="Nome do curso" required>
          </div>
          <div class="form-group">
            <label for="courseDuration">Duração (h)</label>
            <input type="number" class="form-control" name="courseDuration" id="courseDuration" placeholder="Duração" required>
          </div>
          <div class="form-group">
            <label for="courseDescription">Descrição</label>
            <textarea type="text" class="form-control" name="courseDescription" id="courseDescription" placeholder="Descrição" required></textarea>
          </div>
          <div class="modal-footer modal-footer-bg-color">
            <button type="submit" class="btn btn-primary col-lg-12">Adicionar/Editar</button>
          </div>
        </form>
      </main>
    </dialog>
  </div>
</div>

<!-- gerenciamento das vagas -->
<section class="admin-tables-section">
  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>OPORTUNIDADES</h2>
      <button type="button" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-opportunity-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>
    <table class="table">
      <thead>
        <tr>
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
        <tr>
          <th scope="row">1</th>
          <td>Vaga de Atendente</td>
          <td class="d-none d-sm-table-cell">Hotelaria</td>
          <td class="d-none d-sm-table-cell">Hotel Blue Tree</td>
          <td class="d-none d-sm-table-cell">R$ 2.000,00</td>
          <td>Aberta</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table" data-toggle="modal" data-target="#admin-add-opportunity-modal">editar</button>
            <button type="button" class="admin-btn-table">fechar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Vaga de Garçom</td>
          <td class="d-none d-sm-table-cell">Serviços Gerais</td>
          <td class="d-none d-sm-table-cell">Habib's</td>
          <td class="d-none d-sm-table-cell">R$ 1.500,00</td>
          <td>Fechada</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table" data-toggle="modal" data-target="#admin-add-opportunity-modal">editar</button>
            <button type="button" class="admin-btn-table">fechar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Vaga Padeiro Jabaquara</td>
          <td class="d-none d-sm-table-cell">Serviços Gerais</td>
          <td class="d-none d-sm-table-cell">Padaria Jabaquara</td>
          <td class="d-none d-sm-table-cell">R$ 3.200,00</td>
          <td>Aberta</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table" data-toggle="modal" data-target="#admin-add-opportunity-modal">editar</button>
            <button type="button" class="admin-btn-table">fechar</button>
          </td>
        </tr>
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
        <form>

          <div class="form-group">
            <label for="opportunityName">Nome da vaga</label>
            <input type="text" class="form-control" name="opportunityName" id="opportunityName" placeholder="Nome do curso" required>
          </div>
          <div class="form-group">
            <label for="opportunityCategory">Catagoria</label>
            <select class="col-lg-12" name="opportunityCategory" id="opportunityCategory" required>
              <option value="" selected disabled>Selecione a categoria</option>
              <?php
              foreach ($categories as $category) {
                echo "<option value='$category'>$category</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="opportunityCompany">Empresa</label>
            <select class="col-lg-12" name="opportunityCompany" id="opportunityCompany" required>
              <option value="" selected disabled>Selecione a empresa</option>
              <?php
              foreach ($companies as $company) {
                echo "<option value='$company'>$company</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="opportunityDescription">Descrição</label>
            <textarea type="text" class="form-control" name="opportunityDescription" id="opportunityDescription" placeholder="Descrição" required></textarea>
          </div>
          <div class="form-group">
            <label for="companyEmail">E-mail</label>
            <input type="email" class="form-control" name="companyEmail" id="companyEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <label for="companyPhone">Telefone</label>
            <input type="tel" class="form-control" name="companyPhone" id="companyPhone" placeholder="11 12345-1234" required>
            <small>Formato: 11 12345-1234</small>
          </div>
          <div class="form-group">
            <label for="wage">Salário</label>
            <input type="number" class="form-control" name="wage" id="wage" placeholder="Salário" required>
          </div>
          <label for="companyCountry">País</label>
          <div class="form-group">
            <select class="col-lg-12" name="companyCountry" id="companyCountry" required >
              <option value="" selected disabled>Selecione o país da empresa</option>
              <?php
                foreach ($countries as $country) {
                  echo "<option value='$country'>$country</option>";
                }
              ?>
            </select>
          </div>
          <div class="row">
            <div class="form-group col-8 p-0">
              <label for="companyAddressStr">Endereço</label>
              <input type="text" class="form-control" name="companyAddressStr" id="companyAddressStr" placeholder="Endereço">
            </div>
            <div class="form-group col-4 p-0 pl-2">
              <label for="companyAddressNo">Número</label>
              <input type="text" class="form-control" name="companyAddressNo" id="companyAddressNo" placeholder="Número">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6 p-0">
              <label for="companyAddressComp">Complemento</label>
              <input type="text" class="form-control" name="companyAddressComp" id="companyAddressComp" placeholder="Complemento">
            </div>
            <div class="form-group col-6 p-0 pl-2">
              <label for="companyAddressPC">CEP</label>
              <input type="text" class="form-control" name="companyAddressPC" id="companyAddressPC" placeholder="CEP">
            </div>
          </div>
          <div class="modal-footer modal-footer-bg-color">
            <button type="submit" class="btn btn-primary col-lg-12">Adicionar/Editar</button>
          </div>
        </form>
      </main>

    </dialog>
  </div>
</div>

<!-- gerenciamento das doações -->
<section class="admin-donation-section admin-tables-section">

  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>DOAÇÕES</h2>
      <button type="button" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-donation-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Valor</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>João da Silva</td>
          <td>R$ 10.000,00</td>
          <td>Aguardando</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table">excluir</button>
            <button type="button" class="admin-btn-table">recebido</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Frederico Figueiredo</td>
          <td>R$ 500,00</td>
          <td>Recebido</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table">excluir</button>
            <button type="button" class="admin-btn-table">recebido</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar doação -->
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

        <form action="donations" method="post">
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