@extends('layouts.mainTemplate')

@section('title')
Página do Administrador
@endsection

@section('content')

<!-- botões para adicionar empresa e voluntário -->
<div class="container admin-start-margin py-3">
  <nav class="row d-flex justify-content-center">
    <a class="col-md-5 col-lg-3 btn btn-primary py-3 mx-2 my-2" href="/admin/companies"><i class="fa fa-building" aria-hidden="true"></i> Empresa</a>
    <a class="col-md-5 col-lg-3 btn btn-primary py-3 mx-2 my-2" href="/admin/users"><i class="fa fa-user" aria-hidden="true"></i> Usuários</a>
    <a class="col-md-5 col-lg-3 btn btn-primary py-3 mx-2 my-2" href="/admin/volunteers"><i class="fa fa-user" aria-hidden="true"></i> Voluntário</a>
  </nav>
</div>

<!-- menu para cursos, oportunidades e doações -->
<section class="admin-menu-section d-flex justify-content-center">
  <nav class="container row d-flex justify-content-center">
    <a class="col-md-5 col-lg-3 btn btn-secondary py-3 mx-2 my-3" href="/admin/courses/create"><span class="fa">&#xf19d;</span> Cursos</a>
    <a class="col-md-5 col-lg-3 btn btn-secondary py-3 mx-2 my-3" href="/admin/vacancies/create"><span class="fa">&#xf0b1;</span> Oportunidades</a>
    <a class="col-md-5 col-lg-3 btn btn-secondary py-3 mx-2 my-3" href="/admin/donations/create"><span class="fa">&#xf004;</span> Doações</a>
  </nav>
</section>

<!-- indicadores gerais -->
<section class="container">
  <div class="row justify-content-between my-5">
    <div class="col-md-4">
      <div class="card admin-card">
        <h1 class="admin-card-text">{{ $companies->count() }}</h1>
        <p class="admin-card-text">Empresas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card admin-card">
        <h1 class="admin-card-text">{{ $volunteers->count() }}</h1>
        <p class="admin-card-text">Voluntários</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card admin-card">
        <p class="admin-card-text"><b>{{ $users->count() }}</b> usuários</p>
        <p class="admin-card-text"><b>{{ $vacancies->count() }}</b> oportunidades</p>
        <p class="admin-card-text"><b>{{ $courses->count() }}</b> cursos</p>
      </div>
    </div>
  </div>

</section>


@endsection