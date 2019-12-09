@extends('layouts.mainTemplate')

@section('title')
Página do Administrador
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Administrador</li>
  </ol>
</nav>
@endsection

@section('content')

<!-- TODO: depois montarmos a base de dados temos que tirar essa parte -->
<?php
  $categories = ["Gastronomia", "Serviços Gerais", "Hotelaria"];
  $companies = ["evolke Treinamentos", "Padaria Jabaquara", "Restaurante Árabe"];
?>

<!-- botões para adicionar empresa e voluntário -->
<div class="container">
  <nav class="row d-flex justify-content-center m-2">	
    <a class="col-md-5 col-lg-3 btn btn-secondary m-2" href="/admin/cadastro-empresa"><i class="fa fa-building" aria-hidden="true"></i> +Empresa</a>
    <a class="col-md-5 col-lg-3 btn btn-secondary m-2" href="/admin/cadastro-voluntario"><i class="fa fa-user-circle-o" aria-hidden="true"></i> +Voluntário</a>
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
          <th scope="col" class="d-none d-sm-table-cell">Vagas</th>
          <th scope="col" class="d-none d-sm-table-cell">Inscritos</th>
          <th scope="col" class="d-none d-sm-table-cell">Encerramento Inscrições</th>
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
          <td class="d-none d-sm-table-cell">50</td>
          <td class="d-none d-sm-table-cell">46</td>
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
          <td class="d-none d-sm-table-cell">100</td>
          <td class="d-none d-sm-table-cell">12</td>
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
              <option value="">Selecione a categoria</option>
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
              <option value="">Selecione a empresa</option>
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
            <label for="courseDuration">Duração</label>
            <input type="text" class="form-control" name="courseDuration" id="courseDuration" placeholder="Duração" required>
          </div>
          <div class="form-group">
            <label for="courseDescription">Descrição</label>
            <textarea type="text" class="form-control" name="courseDescription" id="courseDescription" placeholder="Descrição" required></textarea>
          </div>
        </form>
      </main>
      <footer class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Adicionar/Editar</button>
      </footer>
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
          <th scope="col" class="d-none d-sm-table-cell">Vagas</th>
          <th scope="col" class="d-none d-sm-table-cell">Inscritos</th>
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
          <td class="d-none d-sm-table-cell">1</td>
          <td class="d-none d-sm-table-cell">30</td>
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
          <td class="d-none d-sm-table-cell">2</td>
          <td class="d-none d-sm-table-cell">12</td>
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
          <td class="d-none d-sm-table-cell">1</td>
          <td class="d-none d-sm-table-cell">22</td>
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
              <option value="">Selecione a categoria</option>
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
              <option value="">Selecione a empresa</option>
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
            <input type="tel" class="form-control" name="companyPhone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
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
          
        </form>
      </main>
      <footer class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Adicionar/Editar</button>
      </footer>
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
          <th scope="col">Empresa</th>
          <th scope="col">Valor</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Digital House</td>
          <td>R$ 10.000,00</td>
          <td>Aguardando</td>
          <td class="d-flex justify-content-start align-items-center">
            <button type="button" class="admin-btn-table">excluir</button>
            <button type="button" class="admin-btn-table">recebido</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Nosso Consultor</td>
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
        <form>
                
          <div class="form-group">
            <label for="donationCompany">Empresa</label>
            <select class="col-lg-12" name="donationCompany" id="donationCompany" required>
              <option value="">Selecione a empresa</option>
              <?php
                foreach ($companies as $company) {
                  echo "<option value='$company'>$company</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="donationValue">Valor</label>
            <input type="number" class="form-control" name="donationValue" id="donationValue" placeholder="Valor" required>
          </div>
          <div class="form-group">
            <label for="donationStatus">Estado</label>
            <select class="col-lg-12" name="donationStatus" id="donationStatus" required>
              <option value="">Estado</option>
              <option value="Aguardando">Aguardando</option>
              <option value="Recebido">Recebido</option>
            </select>
          </div>

        </form>
      </main>
      <footer class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Adicionar</button>
      </footer>
    </dialog>
  </div>
</div>

@endsection