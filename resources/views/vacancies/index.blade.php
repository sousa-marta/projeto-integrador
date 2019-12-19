@extends('layouts.lateralTemplate')

@section('title')
Oportunidades
@endsection

@section('breadcrumb')
<!-- Breadcrumb  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Oportunidades</li>
  </ol>
</nav>
@endsection

@section('banner')
<!-- Banner -->
<section class="pages-title-bg d-flex justify-content-center align-items-center">
  <h1>Vagas de Emprego</h1>
</section>
@endsection


@section('menu-content')

<!-- Barra de Navegação Lateral -->
<aside class="complete-menu mt-4">
  <button type="button" class="col-lg-12 btn rounded-0 filter-title-bg text-white text-left font-weight-bold m-0 py-3  visible-xs visible-sm collapsed" data-toggle="collapse" data-target="#collapseFilter">Filtros <span class="fa fa-angle-down px-1"></span></button>

  <div id="collapseFilter" class="collapse">
    <!-- Collapse do primeiro tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseLocation">Localização <i class="fa fa-caret-square-o-down px-1"></i></button>

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

    <!-- Collapse do segundo tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseCategories">Área de Atuação <i class="fa fa-caret-square-o-down px-1"></i></button>

    <div id="collapseCategories" class="collapse list-group-item bg-light">
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Alimentação</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck2">
        <label class="form-check-label" for="exampleCheck2">Hotelaria</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck3">
        <label class="form-check-label" for="exampleCheck3">Segurança Patrimonial</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck4">
        <label class="form-check-label" for="exampleCheck4">Jardinagem</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck5">
        <label class="form-check-label" for="exampleCheck5">Comércio</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck6">
        <label class="form-check-label" for="exampleCheck6">Manutenção Predial</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck7">
        <label class="form-check-label" for="exampleCheck7">Construção Civil</label>
      </div>
    </div>

    <!-- Collapse do terceiro tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseOccupations">Cargos <i class="fa fa-caret-square-o-down px-1"></i></button>

    <div id="collapseOccupations" class="collapse list-group-item bg-light">
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck8">
        <label class="form-check-label" for="exampleCheck8">Padeiro</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck9">
        <label class="form-check-label" for="exampleCheck9">Cozinheiro(a)</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck10">
        <label class="form-check-label" for="exampleCheck10">Segurança</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck11">
        <label class="form-check-label" for="exampleCheck11">Costureira(o)</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck12">
        <label class="form-check-label" for="exampleCheck12">Arrumadeira</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck13">
        <label class="form-check-label" for="exampleCheck13">Jardineiro</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck14">
        <label class="form-check-label" for="exampleCheck14">Auxiliar de Limpeza</label>
      </div>
    </div>

    <!-- Campo de busca por palavra -->
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
        <div class="container">
          @foreach ($vacancies as $vacancy)
          <div class="card my-5">
            <div class="row">
              <div class="d-flex align-items-center col-lg-5">
                <img class="card-img-top h-90 " src="/img/panificadora-quadro.jpg" alt="Imagem de capa do card">
              </div>
              <div class="col-lg-7 p-3">
            <h3 class="card-title"> Vaga {{ $vacancy->name }}</h2>
              <h6 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Est modi delectus quos? Commodi eius doloribus ipsam iste autem sequi ad natus nobis,
                quae numquam perspiciatis. Veniam repellendus voluptate recusandae illo. </h6>
              <h6 class="card-text"> cidade: São Paulo </h6>
              <h6 class="card-text"> estado: SP </h6>
              <h6 class="card-text"> salário: R$ 1.500,00</h6>
              <h6 class="card-text"> email: contato@padarialegal.com.br </h6>
              <hr>
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-primary nowrap m-1">enviar curriculo</a>
                <a href="/courses" class="btn btn-secondary nowrap m-1">verificar cursos</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
</div>
@endsection