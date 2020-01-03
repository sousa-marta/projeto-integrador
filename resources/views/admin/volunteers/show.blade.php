@extends('layouts.mainTemplate')

@section('title')
Voluntárias(os)
@endsection

@section('content')
<div class="pt-3">
  <section class="pages-title-bg d-flex justify-content-center align-items-center mt-5">
    <h1>Perfil da(o) Voluntária(o)</h1>
  </section>
</div>

<div>
  <section>
    <div class="container">
      <div class="d-flex justify-content-end mt-3">
        <a href="/admin/volunteers" class="btn btn-primary col-lg-4 p-1"><i class="fa">&#xf137;</i> Voltar para voluntárias(os)</a>
      </div>
      <div class="card m-5 bg-light">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4 py-2">
            <img class="card-img-top" src="/img/volunteers/{{$volunteer->picture}}" alt="Foto de perfil da pessoa {{$volunteer->name}}">
          </div>
          <div class="col-lg-8">
            <h3 class="card-title align-center">{{$volunteer->name}}</h3>
            <h6 class="card-text"><strong>Endereço:</strong> {{$volunteer->address}}, {{$volunteer->number}} / {{$volunteer->complement}}</h6>
            <div class="row d-flex justify-content-between">
              <h6><strong>CEP:</strong> {{$volunteer->zip}}</h6>
              <h6 class="card-text"><strong>Cidade:</strong> {{$volunteer->city}}</h6>
              <h6 class="card-text"><strong>Estado:</strong> {{$volunteer->state}} </h6>
              <h6 class="card-text"><strong>País:</strong> {{$location->country}}</h6>
            </div>
            <div class="row d-flex justify-content-between">
              <h6 class="card-text"><i class="fa">&#xf095;</i> <strong>Telefone:</strong> <a href="tel://+55{{$volunteer->phone}}"> {{$volunteer->phone}}</a></h6>
              <h6 class="card-text"><i class="fa">&#xf0e0;</i> <strong>E-mail:</strong> <a href="mailto:{{$volunteer->email}}?Subject=Contato%20{{$volunteer->name}}"> {{$volunteer->email}}</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection