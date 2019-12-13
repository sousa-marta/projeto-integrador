@extends('layouts.mainTemplate')

@section('title')
Página Usuário
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Perfil do Usuário</li>
  </ol>
</nav>
@endsection


@section('content')
<!-- INFORMAÇÕES -->
<section class="user-page-main-banner">
  <div class="container d-flex justify-content-around p-3 align-items-center">
    <img src="/img/foto.png" alt="foto usuário" class="figure-img img-fluid rounded user-page-photo">
    <div>
      <h1>Alex Watanabe</h1>
      <p><b>País de origem:</b> Japão</p>
      <!-- TODO: arrumar href de Editar Info após deixar dinâmico com banco de dados -->
      <button class="mt-3 col-lg-12 btn btn-secondary" onclick="location.href='/users/1/edit'">Editar informações</a>
    </div>
  </div>
</section>

<!-- VAGAS -->
<section class="container pb-4">
  <h2 class="pl-4 pt-3">Vagas de Emprego</h2>

  <div class="row d-flex justify-content-around">
    <!-- vagas inscritas -->
    <div class="col-8 col-md-4 m-3 user-page-card">
      <h3 class="user-page-cards-title">Vagas Inscritas</h3>
      <!-- vaga 1 -->
      <div>
        <!-- item -->
        <div class="user-page-item-inside-card user-page-item-inside-card-clickable" data-toggle="dropdown">
          <div class="user-page-item-inside-card-top">
            <span class="user-page-text-category">Hotelaria</span>
            <span>prazo: 20/11</span>
          </div>
          <h4>Recepcionista</h4>
        </div>
        <!-- menu quando clica -->
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Ver Detalhes</a>
          <a class="dropdown-item" href="#">Desistir</a>
        </div>
      </div>

    </div>

    <!-- vagas concluídas -->
    <div class="col-8 col-md-4 m-3 user-page-card">
      <h3 class="user-page-cards-title">Vagas Concluídas</h3>
      <!-- vaga 1 -->
      <div class="user-page-item-inside-card">
        <span class="badge badge-danger user-page-icon">X</span> <!-- ícone de status -->
        <div class="user-page-item-inside-card-top">
          <span class="user-page-text-category">Gastronomia</span>
          <span>prazo: 20/08</span>
        </div>
        <h4>Cozinheiro</h4>
      </div>

      <!-- vaga 2 -->
      <div class="user-page-item-inside-card">
        <span class="badge badge-success user-page-icon">&#10003</span> <!-- ícone de status -->
        <div class="user-page-item-inside-card-top">
          <span class="user-page-text-category">Serviços Gerais</span>
          <span>prazo: 23/08</span>
        </div>
        <h4>Marceneiro</h4>
      </div>
    </div>

  </div>

</section>

<!-- CURSOS -->
<section class="user-page-section-courses">
  <div class="container pb-4">
    <h2 class="user-page-font-gray pl-4 pt-3">Cursos</h2>

    <div class="row d-flex justify-content-around">
      <!-- cursos inscritas -->
      <div class="col-8 col-md-4 m-3 user-page-card">
        <h3 class="user-page-cards-title">Cursos Inscritos</h3>
        <!-- curso 1 -->
        <div>
          <!-- item -->
          <div class="user-page-item-inside-card user-page-item-inside-card-clickable" data-toggle="dropdown">
            <div class="user-page-item-inside-card-top">
              <span class="user-page-text-category p-1">Hotelaria</span>
              <span>prazo: 20/11</span>
            </div>
            <h4>Recepcionista</h4>
          </div>
          <!-- menu quando clica -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Ver Detalhes</a>
            <a class="dropdown-item" href="#">Desistir</a>
          </div>
        </div>

        <!-- curso 2 -->
        <div>
          <!-- item -->
          <div class="user-page-item-inside-card user-page-item-inside-card-clickable" data-toggle="dropdown">
            <div class="user-page-item-inside-card-top">
              <span class="user-page-text-category">Serviços Gerais</span>
              <span>prazo: 20/11</span>
            </div>
            <h4>Atendente</h4>
          </div>
          <!-- menu quando clica -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Ver Detalhes</a>
            <a class="dropdown-item" href="#">Desistir</a>
          </div>
        </div>
      </div>

      <!-- curso concluído -->
      <div class="col-8 col-md-4 m-3 user-page-card">
        <h3 class="user-page-cards-title">Cursos Concluídos</h3>
        <!-- curso 1 -->
        <div class="user-page-item-inside-card">
          <span class="badge badge-success user-page-icon">&#10003</span> <!-- ícone de status -->
          <div class="user-page-item-inside-card-top">
            <span class="user-page-text-category">Gastronomia</span>
            <span>prazo: 20/08</span>
          </div>
          <h4>Cozinheiro</h4>
        </div>
      </div>

    </div>

  </div>
</section>

@endsection