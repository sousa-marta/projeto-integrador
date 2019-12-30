@extends('layouts.lateralTemplate')

@section('title')
Empresas Cadastradas
@endsection

@section('banner')
<div class="pt-3">
  <section class="pages-title-bg d-flex-column justify-content-center align-items-center p-3 mt-5">
    <h1>Empresas Cadastradas</h1>
    <a href="/companies/create" class="btn btn-secondary col-lg-2"><i style="font-size:18px" class="fa">&#xf055;</i> Cadastrar</a>
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


    <div id="collapseLocation" class="collapse list-group-item bg-light">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected disabled>Cidade</option>
        @foreach ($companies as $company)
        <option value="{{$company->city}}" onclick="filterHTML('#id01', '.item', this.value)">{{$company->city}}</option>
        @endforeach
      </select>
      <hr>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected disabled>Estado</option>
        @foreach ($companies as $company)
        <option value="{{$company->state}}" onclick="filterHTML('#id01', '.item', this.value)">{{$company->state}}</option>
        @endforeach
      </select>
    </div>

    <div class="list-group-item row form-group p-3 bg-secondary">
      <!-- TODO: arrumar href do botão buscar -->
      <button type="submit" class="btn btn-secondary col-lg-12"><i class="fa fa-search"></i> Buscar</button>
      <hr>
      <div class="form-group ">
        <label class="font-weight-bold text-light" for="busca">Busca por Palavra Chave</label>
        <input type="text" class="form-control" id="busca" placeholder="Procurar..." oninput="filterHTML('#id01', '.item', this.value)">
      </div>
    </div>
  </div>
</aside>

@endsection

@section('text-content')

<div>
  <section>
    @foreach($companies as $company)
    <div class="container">
      <div class="card m-4 bg-light">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4 pt-2">
            <img class="card-img-top h-90" src="/img/{{$company->logo}}" alt="Imagem de capa do card">
          </div>
          <div class="col-lg-8">
            <h2 class="card-title align-center">{{$company->name}}</h2>
          </div>
        </div>
        <div class="col-lg-12 p-3">
          <h6 class="card-text"><strong>Descrição:</strong> </h6>
          <h6 class="card-text"><strong>Endereço:</strong> {{$company->address}}, {{$company->address_number}} / {{$company->complement}}</h6>
          <div class="row d-flex justify-content-between">
            <h6 class="card-text"><strong>CEP:</strong> {{$company->zip}} </h6>
            <h6 class="card-text"><strong>Cidade: </strong> {{$company->city}}</h6>
            <h6 class="card-text"><strong>Estado: </strong> {{$company->state}} </h6>
            <h6 class="card-text"><strong>País: </strong> {{$company->company_country}} </h6>
          </div>
          <div class="d-flex justify-content-between">
            <h6 class="card-text"><strong>Contato:</strong> {{$company->POC}}</h6>
            <h6 class="card-text"><i class="fa">&#xf095;</i> <strong>Telefone:</strong> <a href="tel://+55{{$company->phone}}"> {{$company->phone}}</a></h6>
            <h6 class="card-text"><i class="fa">&#xf0e0;</i> <strong>E-mail:</strong> <a href="mailto:{{$company->email}}?Subject=Contato%20{{$company->name}}"> {{$company->email}}</a></h6>
          </div>
          <hr>
          <div class="d-flex justify-content-between">
            <div>
              <a href="/companies/{{$company->id}}" class="btn btn-primary nowrap m-1">Ver perfil</a>
            </div>
            <div class="d-flex align-baseline">
              <a href="/companies/{{$company->id}}/edit" class="btn btn-primary nowrap m-1">Editar</a>
              <form class="d-flex align-baseline" action="/companies/{{$company->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{csrf_token() }}">
                <input type="submit" class="btn btn-danger nowrap m-1" value="Delete">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>
</div>
@endsection