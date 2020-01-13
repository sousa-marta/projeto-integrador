@extends('layouts.mainTemplate')

@section('title')
Curso de {{ $course->name }}
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/courses">Cursos</a></li>
    {{-- TODO: deixar dinâmico o nome do curso --}}
    <li class="breadcrumb-item active" aria-current="page">{{ $course->name }}</li>
  </ol>
</nav>
@endsection

@section('content')
<!-- INFORMAÇÕES GERAIS -->
<section class="course-detail-main-banner">

  <!-- tudo em um container para deixar uma pequena margem dos lados -->
  <div class="container">

    <!-- nome do curso e ofertante do treinamento -->
    <div class="row pt-3">
      <div class="col-12 col-lg-7">
        <h4>{{ $course->category->name }}</h4>
        <h1>{{ $course->name }}</h1>
      </div>
      <div class="col-12 col-lg-5 text-right course-detail-offered-by">
        <h4>oferecido por:</h4>
        <h3>{{$course->company->name}}</h3>
        <img src="/img/companies/{{$course->company->logo}}" alt="Logo da empresa {{$course->company->name}} de treinamento" class="rounded pb-5 course-detail-logo-img">

      </div>
    </div>

    <div class="row">
      <!-- informações do curso -->
      <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
        <div class="row">
          <!-- inscritos e vagas -->
          <div class="col-12 col-lg-7">
            <p><strong>Inscritos:</strong> 2.341</p>
          </div>
          <div class="col-12 col-lg-7">
            <p><strong>Vagas:</strong> 50</p>
          </div>
        </div>
        <div class="row d-flex text-center mt-3">
          <!-- cronograma-data -->
          <div class="col-4 border course-detail-schedule-past">
            <p class="m-0">{{$course->start}}</p>
          </div>
          <div class="col-4 border course-detail-schedule-past">
            <p class="m-0">{{$course->end}}</p>
          </div>
          <div class="col-4 border course-detail-shedule-soon">
            <p class="m-0">{{$course->duration}} meses</p>
          </div>
        </div>
        <div class="row d-flex text-center">
          <!-- cronograma-legenda -->
          <div class="col-4">
            <p class="course-detail-schedule-legend">Início do Curso</p>
          </div>
          <div class="col-4">
            <p class="course-detail-schedule-legend">Fim do Curso</p>
          </div>
          <div class="col-4">
            <p class="course-detail-schedule-legend">Duração</p>
          </div>
        </div>
        <div class="row pb-5 mt-3">
          <!-- botão de inscrição -->
          <button type="submit" class="col-12 btn   btn-secondary">Inscreva-se</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INFORMAÇÕES DETALHADAS -->
<section class="container mt-4 mb-5 px-4">
  <h2 class="pt-4 pb-2">Informações sobre o curso</h2>
  <p>{{$course->description}}</p>
  <p><strong>Duração:</strong> {{$course->duration}} meses </p>
  <p><strong>Requisitos:</strong></p>
  <ul class="px-4">
    <li>Idade mínima de 16 anos.</li>
    <li>Conhecimentos equivalentes ao Ensino Fundamental completo.</li>
  </ul>
</section>

<!-- CURSOS SEMELHANTES -->
<section>
  <!-- div do fundo amarelo -->
  <div class="course-detail-similar-courses-top">
    <div class="container pt-3 pb-5">
      <h2>Cursos Semelhantes na área de {{$course->category->name}}</h2>
    </div>
  </div>

  <!-- div do fundo cinza -->
  <div class="course-detail-similar-courses-bottom">
    <div class="container">
      <div class="row d-flex container course-detail-div-cards">

        {{-- TODO: Quero que mostre apenas os três primeiros cursos e não mostre o que a página já está exibindo --}}
        {{-- Erro: o take(3) está contando mesmo os casos que não passam no if. --}}
        {{-- @foreach ($courses->take(3) as $courseOne) --}}

        @foreach ($courses as $courseOne)
        @if ($courseOne->id != $course->id && $courseOne->category_id == $course->category_id)
        <div class="col-12 col-md-8 col-lg-4 p-2">
          <div class="course-detail-card">
            <div class="container course-detail-card-title">
              <p>{{$courseOne->category->name}}</p>
              <h5>Curso de {{$courseOne->name}}</h5>
            </div>
            <div class="container d-flex flex-column">
              <img src="/img/companies/{{$courseOne->company->logo}}" alt="Logo da empresa {{$courseOne->company->name}}" class="align-self-center course-detail-logo-img-alike">
              <div class="pb-2">
                <p><strong>Duração:</strong>{{$courseOne->duration}} meses</p>
                <p><strong>Vagas:</strong> 10</p>
                <p><strong>Início:</strong> {{$courseOne->start}}</p>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach

      </div>
    </div>
  </div>
</section>

@endsection