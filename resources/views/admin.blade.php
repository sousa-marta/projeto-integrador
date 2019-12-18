@extends('layouts.mainTemplate')

@section('title')
Página do Administrador
@endsection

@section('content')
<!-- botões para adicionar empresa e voluntário -->
<div class="container admin-start-margin py-3">
  <nav class="row d-flex justify-content-center m-2">
    <a class="col-md-5 col-lg-3 btn btn-primary m-2" href="/companies/create"><i class="fa fa-building" aria-hidden="true"></i> +Empresa</a>
    <a class="col-md-5 col-lg-3 btn btn-primary m-2" href="/volunteers/create"><i class="fa fa-user-circle-o" aria-hidden="true"></i> +Voluntário</a>
  </nav>
</div>

<!-- menu para cursos, oportunidades e doações -->
<section class="admin-menu-section d-flex justify-content-center">
  <nav class="container row d-flex justify-content-center">
    <a class="col-md-5 col-lg-3 btn btn-secondary py-3 mx-2 my-5" href="/courses/create"><span class="fa">&#xf19d;</span> Cursos</a>
    <a class="col-md-5 col-lg-3 btn btn-secondary py-3 mx-2 my-5" href="/vacancies/create"><span class="fa">&#xf0b1;</span> Oportunidades</a>
    <a class="col-md-5 col-lg-3 btn btn-secondary py-3 mx-2 my-5" href="/donations/create"><span class="fa">&#xf004;</span> Doações</a>
  </nav>
</section>

<!-- indicadores gerais -->
<section class="container">
  <div class="row justify-content-between my-5">
    <div class="col-md-4">
      <div class="card admin-card">
        <h1 class="admin-card-text">10.000</h1>
        <p class="admin-card-text">Empresas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card admin-card">
        <h1 class="admin-card-text">10.000</h1>
        <p class="admin-card-text">Voluntários</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card admin-card">
        <p class="admin-card-text"><b>10.000</b> usuários</p>
        <p class="admin-card-text"><b>10.000</b> oportunidades</p>
        <p class="admin-card-text"><b>10.000</b> cursos</p>
      </div>
    </div>
  </div>
  
</section>


@endsection