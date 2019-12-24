<!-- Tela com a lista de empresas cadastradas + botões com as opções de editar e deletar -->
@extends('layouts.lateralTemplate')

@section('title')
Empresas Cadastradas
@endsection

@section('banner')
<!-- Banner -->
<div class="pt-3">
<section class="pages-title-bg d-flex-column justify-content-center align-items-center p-3 mt-5">
  <h1>Empresas Cadastradas</h1>
  <a href="/companies/create" class="btn btn-secondary col-lg-2"><span class='fa'>&#xf1ad;</span> Cadastrar</a>
</section>
</div>
@endsection

@section('menu-content')

<!-- Barra de Navegação Lateral -->
<aside class="complete-menu mt-4">
  <button type="button" class="col-lg-12 btn rounded-0 filter-title-bg text-white text-left font-weight-bold m-0 py-3  visible-xs visible-sm collapsed" data-toggle="collapse" data-target="#collapseFilter">Filtros <span class="fa fa-angle-down px-1"></span></button>

  <div id="collapseFilter" class="collapse">
    <!-- Collapse do primeiro tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseLocation">Localização <i class="fa fa-caret-square-o-down px-1"></i></button>

    <!-- TODO: deixar dinâmico -->
    <div id="collapseLocation" class="collapse list-group-item bg-light">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Cidade</option>
        <option value="1">São Paulo</option>
        <option value="2">Rio de Janeiro</option>
        <option value="3">Minas Gerais</option>
        <option value="1">Salvador</option>
        <option value="2">Vitória</option>
        <option value="3">Santos</option>
        <option value="2">Rio de Janeiro</option>
        <option value="3">Minas Gerais</option>
        <option value="1">Salvador</option>
        <option value="2">Vitória</option>
        <option value="3">Santos</option>
      </select>
      <hr>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Região</option>
        <option value="1">Norte</option>
        <option value="2">Nordeste</option>
        <option value="3">Centroeste</option>
        <option value="2">Sudeste</option>
        <option value="3">Sul</option>
      </select>
    </div>
    <div class="list-group-item row form-group p-3 bg-secondary">
      <div class="form-group ">
        <label class="font-weight-bold text-light" for="busca">Busca por Palavra Chave</label>
        <input type="text" class="form-control" id="busca" placeholder="Procurar...">
      </div>
      <!-- TODO: arrumar href do botão buscar -->
      <button type="button" class="btn btn-secondary col-lg-12" onclick="location.href='/courses/id'"><i class="fa fa-search"></i> Buscar</button>
    </div>
  </div>
</aside>

@endsection

@section('text-content')

<div>
  <!-- Conteúdo Central da Página -->
  <section>
    <!-- <div class="row justify-content-center mb-4">
      <div class="col-md-7 col-lg-8 order-2 my-4"> -->
      @foreach($companies as $company)
    <div class="container">
      <div class="card mt-4">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 pt-2">
            <img class="card-img-top h-90 " src="/img/{{$company->logo}}" alt="Imagem de capa do card">
          </div>
          <h2 class="card-title align-center">{{$company->name}}</h2>
        </div>
          <div class="col-lg-12 p-3">
              <h6 class="card-text"><strong>Descrição:</strong> No Bairro dos Jardins, a um quarteirão da Avenida Paulista, descubra o Tivoli Mofarrej São Paulo Hotel, situado no coração da cidade. Quer esteja numa viagem de negócios ou de lazer, este hotel de cinco estrelas em São Paulo tem tudo para tornar a sua estadia uma experiência inesquecível.</h6>
                <h6 class="card-text">Endereço: <strong>{{$company->address}} {{$company->address_number}} Apto/Ofic: {{$company->complement}}</strong></h6>
                <h6 class="card-text">CEP: <strong>{{$company->zip}} </strong></h6>
              <div class="row d-flex justify-content-start">
                <h6 class="card-text">Cidade: <strong>{{$company->city}}</strong></h6>
                <h6 class="card-text">Estado: <strong>{{$company->state}} </strong></h6>
              </div>
                <h6 class="card-text">Contato: <strong>{{$company->POC}}</strong></h6>
              <h6 class="card-text">Telefone: <strong>{{$company->phone}}</strong> </h6>
              <h6 class="card-text">E-mail: <strong> {{$company->email}} </strong></h6>
              <hr>
              <div class="d-flex justify-content-between">
                <div>
                  <a href="#" class="btn btn-primary nowrap m-1">Ver vagas</a>
                  <a href="/courses" class="btn btn-secondary nowrap m-1">Ver cursos</a>
                </div>
                <div>
                  <a href="/companies/{{$company->id}}" class="btn btn-primary nowrap m-1">Ver perfil</a>
                </div>
              </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>
@endsection