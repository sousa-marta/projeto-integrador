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
@include('partials.alerts')
@endsection

@section('menu-content')

<!-- Barra de Navegação Lateral -->
<aside class="complete-menu mt-5">
  <h5 class="col-lg-12 rounded-0 filter-title-bg text-white text-left font-weight-bold m-0 py-3">Cursos</h5>

  <div>
    <div class=" list-group-item rounded-0 bg-secondary">
      <h6 class="text-white font-weight-bold text-left m-0 py-2" >Área de Atuação</h6>
    </div>

    <div class=" list-group-item bg-light">

      <!-- Collapse de Cada Categoria -->
      @foreach($categories as $category) 
        <div class="my-2 font-weight-bold">
          <a data-toggle="collapse" href=" #collapse{{$category->name}}">{{$category->name}}<i class="fa fa-angle-down px-1"></i></a>
          <ul id="collapse{{$category->name}}" class="collapse multi-collapse list-group">
            @foreach($courses as $course)
              @if ($course->category_id == $category->id)
                <li class="list-group-item"><a href="/courses/{{$course->id}}">{{$course->name}}</li></a>
              @endif
            @endforeach
          </ul>
        </div>
      @endforeach

    </div>

    <!-- Mostrar Todos os Cursos  -->
    <div class="list-group-item d-flex justify-content-center py-4  bg-secondary">
      <button class="text-light btn btn-primary" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false">Mostrar Todos</button>
    </div>

  </div>
</aside>

@endsection

@section('text-content')

<!-- Conteúdo Central da Página -->
<section>

  <!-- Categorias de Cursos Imagens - Flip Cards -->
  <div class="row justify-content-center mb-4">

    @if(isset($vacancy) && $vacancy !== NULL)
    <div class="col-lg-5 col-md-12 col-sm-6 align-items-center d-flex flex-column mt-5 mb-4">
      <div class="courses-bg-cards">
        <div class="flip-card flip-card-front">
          <h5 class="card-title text-center py-2">{{ $courses[0]->category_name }}</h5>
          <img src="{{ $courses[0]->category_img }}" aria-hidden="true" alt="" class="course-img card-img-bottom">
        </div>
        <div class="flip-card flip-card-back">
          <div class="card-back-body">
            <h5 class="card-title text-center py-2">{{ $courses[0]->category_name }}</h5>
            <img src="{{ $courses[0]->category_img }}" aria-hidden="true" alt="" class="course-img card-img-bottom">
            <ul>
              @foreach ($courses as $course)
              <a href="/courses/{{$course->id}}">
                <li>{{ $course->name }}</li>
              </a>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    @else
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
    @endif
  </div>
</section>

@endsection

<script src="/js/courses.js"></script>