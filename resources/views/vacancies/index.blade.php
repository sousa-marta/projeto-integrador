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

  <form action="/vacancies">
  <div id="collapseFilter" class="collapse">
    <!-- Collapse do primeiro tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseLocation">Localização <i class="fa fa-caret-square-o-down px-1"></i></button>

    <div id="collapseLocation" class="collapse list-group-item bg-light">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected disabled>Cidade</option>
        @foreach ($vacancies as $vacancy)
        <option value="{{$vacancy->city}}" onclick="filterHTML('#id01', '.item', this.value)">{{$vacancy->city}}</option>
        @endforeach
      </select>
    </div>

    <!-- Collapse do segundo tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseCategories">Área de Atuação <i class="fa fa-caret-square-o-down px-1"></i></button>

    <div id="collapseCategories" class="collapse list-group-item bg-light">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected disabled>Nome da área</option>
        @foreach ($categories as $category)
        <option value="{{$category->name}}" onclick="filterHTML('#id01', '.item', this.value)">{{$category->name}}</option>
        @endforeach
      </select>
    </div>

    <!-- Collapse do terceiro tópico de busca -->
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseOccupations">Cargos <i class="fa fa-caret-square-o-down px-1"></i></button>

    <div id="collapseOccupations" class="collapse list-group-item bg-light">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected disabled>Nome do cargo</option>
        @foreach ($vacancies as $vacancy)
        <option value="{{$vacancy->name}}" onclick="filterHTML('#id01', '.item', this.value)">{{$vacancy->name}}</option>
        @endforeach
      </select>
    </div>

    <!-- Campo de busca por palavra -->
    <div class="list-group-item row form-group p-3 bg-secondary">
      <!-- TODO: arrumar href do botão buscar -->
      <button type="submit" class="btn btn-secondary col-lg-12"><i class="fa fa-search"></i> Buscar</button>
</form>
      <hr>
      <div class="form-group ">
        <label class="font-weight-bold text-light" for="busca">Busca por palavra chave</label>
        <input type="text" class="form-control" id="busca" placeholder="Procurar..." oninput="filterHTML('#id01', '.item', this.value)">
      </div>
    </div>
  </div>
  
</aside>

@endsection

@section('text-content')
<!-- Conteúdo Central da Página -->
<section class="container" id="id01">
  @foreach ($vacancies as $vacancy)
  <div class="card my-5 item">
    <div class="row">
      <div class="d-flex align-items-center justify-content-center col-12 col-lg-4">
        <img class="logo-size" src="/img/{{$vacancy->company_logo}}" alt="Logo da empresa {{ $vacancy->company_name }}">
      </div>
      <div class="col-lg-8 p-3 text-center">
        <h4> Vaga {{ $vacancy->name }}</h4>
        <div class="row justify-content-around">
          <p class="col-6"><strong>Cidade:</strong> {{ $vacancy->city }}</p>
          <p class="col-6"><strong>Salário:</strong> R$ {{ $vacancy->wage }}</p>
          <p class="col-6"><strong>Categoria:</strong> {{ $vacancy->category_name }}</p>
          <p class="col-6"><strong>Empresa:</strong> {{ $vacancy->company_name }}</p>
        </div>
        <p><button type="button" class="btn btn-secondary my-2">Veja cursos relacionados</button></p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#moreInfo{{$vacancy->id}}" aria-expanded="false" aria-controls="moreInfo{{$vacancy->id}}">Leia mais <i class='far fa-plus-square ml-1'></i></button>
        <div class="collapse" id="moreInfo{{$vacancy->id}}">
          <div class="card card-body border-0">
            <p><strong>Descrição:</strong></p>
            <p>{{ $vacancy->description }}</p>
          </div>
          <hr>
          <div class="d-flex justify-content-center">
            <a href="mailto:{{$vacancy->email}}?Subject=Vaga%20{{$vacancy->name}}" class="btn btn-primary m-1">Enviar currículo <i class='fas fa-envelope-square ml-1'></i></a>
            <a href="tel://+55{{$vacancy->phone}}" class="btn btn-secondary m-1">Ligar <i class='fas fa-phone-square-alt ml-1'></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</section>
@endsection
