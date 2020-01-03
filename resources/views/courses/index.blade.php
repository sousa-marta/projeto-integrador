@extends('layouts.lateralTemplate')

@section('title')
Cursos
@endsection

@section('breadcrumb')
<!-- Breadcrumb  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
  </ol>
</nav>
@endsection

@section('banner')
<!-- Banner -->
<section class="pages-title-bg d-flex justify-content-center align-items-center">
  <h1>Cursos</h1>
</section>
@endsection


@section('menu-content')

<!-- Barra de Navegação Lateral -->
<aside class="complete-menu mt-5">
  <button type="button" class="col-lg-12 btn rounded-0 filter-title-bg text-white text-left font-weight-bold m-0 py-3 visible-xs visible-sm collapsed" data-toggle="collapse" data-target="#collapseFilter">Filtros <span class="fa fa-angle-down px-1"></span></button>

  <!-- Iníco collapse -->
  <div id="collapseFilter" class="collapse">
    <button type="button" class="col-lg-12 text-white btn rounded-0 collapse-bg font-weight-bold text-left m-0 py-3" data-toggle="collapse" data-target="#collapseCategory">Área de Atuação <i class="fa fa-caret-square-o-down px-1"></i></button>

    <div id="collapseCategory" class="collapse list-group-item bg-light">

      <!-- Collapse do primeiro tópico de busca -->
      <div>
        <a data-toggle="collapse" href="#collapseHotel">Hotelaria<i class="fa fa-angle-down px-1"></i></a>
        <ul id="collapseHotel" class="collapse list-group">
          <li class="list-group-item"><a href="#atendente">Atendente</a></li>
          <li class="list-group-item"><a href="#camareiro">Camareiro</a></li>
          <li class="list-group-item"><a href="#recepcionista">Recepcionista</a></li>
        </ul>
      </div>

      <!-- Collapse do segundo tópico de busca -->
      <div>
        <a data-toggle="collapse" href="#collapseLanguages">Idiomas<i class="fa fa-angle-down px-1"></i></a>
        <ul id="collapseLanguages" class="collapse list-group">
          <li class="list-group-item"><a href="#portugues">Português</a></li>
          <li class="list-group-item"><a href="#ingles">Inglês</a></li>
          <li class="list-group-item"><a href="#espanhol">Espanhol</a></li>
        </ul>
      </div>

      <!-- Collapse do terceiro tópico de busca -->
      <div>
        <a data-toggle="collapse" href="#collapseProgramming">Programação<i class="fa fa-angle-down px-1"></i></a>
        <ul id="collapseProgramming" class="collapse list-group">
          <li class="list-group-item"><a href="#csshtlm">CSS + HTML</a></li>
          <li class="list-group-item"><a href="#phyton">Phyton</a></li>
          <li class="list-group-item"><a href="#logica">Lógica de Programação</a></li>
        </ul>
      </div>
    </div>

    <!-- Campo de busca por palavra -->
    <div class="list-group-item row form-group p-3 bg-secondary">
      <div class="form-group ">
        <label class="font-weight-bold text-light" for="busca">Busca por Palavra Chave</label>
        <input type="text" class="form-control" id="busca" placeholder="Procurar...">
      </div>
      <!-- TODO: arrumar href de buscar após deixar site dinâmico com banco de dados -->
      <button type="button" class="btn btn-secondary col-lg-12" onclick="location.href='/courses/1'"><i class="fa fa-search"></i> Buscar</button>
    </div>
  </div>
</aside>

@endsection

@section('text-content')

<!-- Conteúdo Central da Página -->
<section>

  <!-- Categorias de Cursos Imagens - Flip Cards -->
  <div class="row justify-content-center mb-4">

    @foreach ($categories as $category)
    <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
      <div class="courses-bg-cards">
        <div class="flip-card flip-card-front">
          <h5 class="card-title text-center py-2">{{ $category->name }}</h5>
          <img src="{{ $category->img }}" aria-hidden="true" alt="" class="course-img card-img-bottom">
        </div>
        <div class="flip-card flip-card-back">
          <div class="card-back-body">
            <h5 class="card-title text-center py-2">{{ $category->name }}</h5>
            <img src="{{ $category->img }}" aria-hidden="true" alt="" class="course-img card-img-bottom">
            <ul>
              @foreach ($courses as $course)
              @if ($course->category_id == $category->id)
              <a href="/courses/{{$course->id}}">
                <li>{{ $course->name }}</li>
              </a>
              @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection