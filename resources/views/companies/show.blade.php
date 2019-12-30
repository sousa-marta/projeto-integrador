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
        <a href="/companies" class="btn btn-primary col-lg-4 p-1"><i style="font-size:18px" class="fa">&#xf137;</i> Voltar para empresas</a>
      </div>
      <div class="card m-5 bg-light">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 pt-2">
            <img class="card-img-top h-90 " src="/img/{{$company->logo}}" alt="Imagem de capa do card">
          </div>
          <div class="col-lg-6 p-3">
              <h3 class="card-title align-center">{{$company->name}}</h3>
              <h6 class="card-text"><strong>Descrição:</strong> {{$company->description}}</h6>
                <h6 class="card-text"><strong>Endereço:</strong> {{$company->address}} {{$company->number}} {{$company->complement}} <strong>CEP: </strong>{{$company->zip}} </h6>
              <div class="row d-flex justify-content-start">
                <h6 class="card-text"><strong>Cidade: </strong> {{$company->city}}</h6>
                <h6 class="card-text"><strong>Estado: </strong> {{$company->state}} </h6>
              </div>
              <h6 class="card-text"><strong>Contato:</strong> {{$company->POC}} </h6>
              <h6 class="card-text"><strong>Telefone:</strong><a href="tel://+55{{$company->phone}}"> <i style="font-size:14px" class="fa">&#xf095;</i> {{$company->phone}}</a></h6>
              <h6 class="card-text"><strong>E-mail: </strong> <a href="mailto:{{$company->email}}?Subject=Contato%20{{$company->name}}"><i style="font-size:14px" class="fa">&#xf0e0;</i> {{$company->email}}</a></h6>
              <hr>
              <div class="d-flex justify-content-around">
                <div>
                  <a href="#" class="btn btn-primary nowrap m-1">Ver vagas</a>
                  <a href="/courses" class="btn btn-secondary nowrap m-1">Ver cursos</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection