<!-- Tela opcional: se quisermos ver as infos de empresa individualmente -->
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
  <!-- Conteúdo Central da Página -->
  <section>
    <!-- <div class="row justify-content-center mb-4">
      <div class="col-md-7 col-lg-8 order-2 my-4"> -->
    <div class="container">
      <div class="d-flex justify-content-end mt-3"> 
        <a href="/companies" class="btn btn-primary col-lg-4 p-1"><span class='fa'>&#xf1ad;</span> Voltar para empresas</a>
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
              <h6 class="card-text"><strong>Telefone:</strong> {{$company->phone}} </h6>
              <h6 class="card-text"><strong>E-mail:</strong> {{$company->email}} </h6>
              <hr>
              <div class="d-flex justify-content-end">
                <div>
                  <a href="#" class="btn btn-primary nowrap m-1">Ver vagas</a>
                  <a href="/courses" class="btn btn-secondary nowrap m-1">Ver cursos</a>
                </div>
              </div>
        </div>
          
              <div class="d-flex justify-content-between">
            </div>
        </div>
      </div>
    </div>

@endsection