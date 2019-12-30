@extends('layouts.mainTemplate')

@section('title')
Empresas
@endsection

@section('content')
<div class="pt-3">
<section class="pages-title-bg d-flex justify-content-center align-items-center mt-5">
  <h1>Perfil do Voluntário</h1>
</section>
</div>

<div>
  <section>
    <div class="container">
      <div class="d-flex justify-content-end mt-3"> 
        <a href="/volunteers" class="btn btn-primary col-lg-4 p-1"><i style="font-size:18px" class="fa">&#xf137;</i> Voltar para empresas</a>
      </div>
      <div class="card m-5 bg-light">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 pt-2">
            <img class="card-img-top h-90 " src="/img/{{$volunteer->img}}" alt="Imagem de capa do card">
          </div>
          <div class="col-lg-6 p-3">
            <h3 class="card-title align-center">{{$volunteer->name}}</h3>
            <h6 class="card-text"><strong>Endereço:</strong> {{$volunteer->address}} {{$volunteer->number}} {{$volunteer->complement}} <strong>CEP: </strong>{{$volunteer->zip}} </h6>
            <div class="row d-flex justify-content-start">
              <h6 class="card-text"><strong>Cidade: </strong> {{$volunteer->city}}</h6>
              <h6 class="card-text"><strong>Estado: </strong> {{$volunteer->state}} </h6>
            </div>
              <h6 class="card-text"><strong>Contato:</strong> {{$volunteer->POC}} </h6>
            <h6 class="card-text"><strong>Telefone:</strong><a href="tel://+55{{$volunteer->phone}}"> <i style="font-size:14px" class="fa">&#xf095;</i> {{$volunteer->phone}}</a></h6>
            <h6 class="card-text"><strong>E-mail: </strong> <a href="mailto:{{$volunteer->email}}?Subject=Contato%20{{$volunteer->name}}"><i style="font-size:14px" class="fa">&#xf0e0;</i> {{$volunteer->email}}</a></h6>
          </div>
        </div>
      </div>
    </div>

@endsection