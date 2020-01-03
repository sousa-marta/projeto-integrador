@extends('layouts.mainTemplate')

@section('title')
Empresas
@endsection

@section('content')
<div class="pt-3">
  <section class="pages-title-bg d-flex justify-content-center align-items-center mt-5">
    <h1>Perfil da Empresa</h1>
  </section>
</div>

<div>
  <section>
    <div class="container">
      <div class="d-flex justify-content-end mt-3">
        <a href="/admin/companies" class="btn btn-primary col-lg-4 p-1"><i class="fa">&#xf137;</i> Voltar para empresas</a>
      </div>
      <div class="card m-5 bg-light">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4 py-2">
            <img class="card-img-top" src="/img/companies/{{$company->logo}}" alt="Logo da empresa {{$company->name}}">
          </div>
          <div class="col-lg-8 p-3">
            <h3 class="card-title align-center">{{$company->name}}</h3>
            <h6 class="card-text"><strong>Descrição:</strong> {{$company->description}}</h6>
            <h6 class="card-text"><strong>Endereço:</strong> {{$company->address}}, {{$company->address_number}} / {{$company->complement}}</h6>
            <div class="row d-flex justify-content-between">
              <h6 class="card-text"><strong>CEP:</strong> {{$company->zip}}</h6>
              <h6 class="card-text"><strong>Cidade:</strong> {{$company->city}}</h6>
              <h6 class="card-text"><strong>Estado:</strong> {{$company->state}}</h6>
              <h6 class="card-text"><strong>País:</strong> {{$location->country}}</h6>
            </div>
            <div class="d-flex justify-content-between">
              <h6 class="card-text"><strong>Contato:</strong> {{$company->POC}}</h6>
              <h6 class="card-text"><i class="fa">&#xf095;</i> <strong>Telefone:</strong> <a href="tel://+55{{$company->phone}}"> {{$company->phone}}</a></h6>
              <h6 class="card-text"><i class="fa">&#xf0e0;</i> <strong>E-mail:</strong> <a href="mailto:{{$company->email}}?Subject=Contato%20{{$company->name}}"> {{$company->email}}</a></h6>
            </div>
            <hr>
            <div class="d-flex justify-content-around">
              <div>
                <a href="/admin/vacancies" class="btn btn-primary nowrap m-1">Ver vagas</a>
                <a href="/admin/courses" class="btn btn-secondary nowrap m-1">Ver cursos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
@endsection