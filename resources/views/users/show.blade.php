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
@include('partials.alerts')
@endsection

@section('content')
<!-- INFORMAÇÕES -->
<section class="user-page-main-banner">
  <div class="container d-flex justify-content-around p-3 align-items-center">
    <img src="/img/users/{{ $user->img }}" alt="foto usuário" class="figure-img img-fluid rounded user-page-photo">
    <div>
      <h1>{{ $userName[0] }}</h1>
      <p><b>País de origem:</b> {{ $user->location->country }}</p>
      <button class="mt-3 col-lg-12 btn btn-secondary" onclick='location.href="/users/{{ $user->id }}/edit"'>Editar informações</a>
    </div>
  </div>
</section>



<!-- VAGAS -->
<section class="container pb-4">
  <h2 class="pl-4 pt-3">Vagas de Emprego</h2>

  <div class="row d-flex justify-content-around">
    <!-- vagas inscritas -->
    <div class="col-8 col-md-4 m-3 user-page-card">
      <h3 class="user-page-cards-title">Vagas Aguardando</h3>

      <!-- vagas -->
      @foreach ($vacancies_opened as $vacancy)
        <div>
          <!-- item -->
          <div class="user-page-item-inside-card user-page-item-inside-card-clickable" data-toggle="dropdown">
            <div class="user-page-item-inside-card-top">
              <span class="user-page-text-category">{{ $vacancy->category->name }}</span>
            </div>
            <h4>{{ $vacancy->name }}</h4>
          </div>
          <!-- menu quando clica -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Ver Detalhes</a>
            <a class="dropdown-item" href="#">Desistir</a>
          </div>
        </div>
      @endforeach

    </div>

    <!-- vagas concluídas -->
    <div class="col-8 col-md-4 m-3 user-page-card">
      <h3 class="user-page-cards-title">Vagas Fechadas</h3>
      <!-- vagas -->
      @foreach ($vacancies_closed as $vacancy)
        <div class="user-page-item-inside-card">
          <div class="user-page-item-inside-card-top">
            <span class="user-page-text-category">{{ $vacancy->category->name }}</span>
          </div>
          <h4>{{ $vacancy->name }}</h4>
        </div>
      @endforeach

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
        <!-- cursos -->
        @foreach ($courses_opened as $course)
          <div>
            <!-- item -->
            <div class="user-page-item-inside-card user-page-item-inside-card-clickable" data-toggle="dropdown">
              <div class="user-page-item-inside-card-top">
                <span class="user-page-text-category p-1">{{ $course->category->name }}</span>
              </div>
              <h4>{{ $course->name }}</h4>
            </div>
            <!-- menu quando clica -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Ver Detalhes</a>
              <a class="dropdown-item" href="#">Desistir</a>
            </div>
          </div>
        @endforeach

      </div>

      <!-- curso concluído -->
      <div class="col-8 col-md-4 m-3 user-page-card">
        <h3 class="user-page-cards-title">Cursos Concluídos</h3>
        <!-- cursos -->

        @foreach ($courses_closed as $course)
          <div class="user-page-item-inside-card">
            <div class="user-page-item-inside-card-top">
              <span class="user-page-text-category">{{ $course->category->name }}</span>
            </div>
            <h4>{{ $course->name }}</h4>
          </div>
        @endforeach

      </div>

    </div>

  </div>
</section>

@endsection