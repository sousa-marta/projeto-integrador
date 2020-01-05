@extends('layouts.mainTemplate')

@section('title')
Contribua
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contribua</li>
  </ol>
</nav>
@endsection

@section('content')

<!-- Banner -->
<section class="pages-title-bg d-flex justify-content-center align-items-center">
  <h1>Contribua</h1>
</section>
@include('partials.alerts')

<!-- Cards Resumo Auxílio Pessoa e Empresa-->
<section class="container text-center">
  <div class="row justify-content-center my-5">
    <div class="col-sm-10 col-md-5 col-lg-5 py-4 px-2 mx-3 mb-2 border">
      <img src="img/contribute-volunteer.png" aria-hidden="true" alt="">
      <h4 class="card-title">Auxílio como Pessoa</h4>
      <p class="card-text px-2">Contribua oferecendo um curso ou doando um valor para ajudar a manter nossa estrutura e nossa equipe.</p>
      <button type="button" aria-label="Saiba mais sobre o auxílio como pessoa" class="btn btn-primary mt-3" onclick="location.href='#contribute-session-people'">Saiba mais</button>
    </div>

    <div class="col-sm-10 col-md-5 col-lg-5 py-4 px-2 mx-3 mb-2 border">
      <img src="img/contribute-enterprise.png" aria-hidden="true" alt="">
      <h4 class="card-title">Auxílio como Empresa</h4>
      <p class="card-text px-2">Patrocine o nosso projeto em eventos, investa diretamente ou desenvolva campanhas para captação de recursos.</p>
      <button type="button" aria-label="Saiba mais sobre o auxílio como empresa" class="btn btn-primary mt-3" onclick="location.href='#contribute-session-company'">Saiba mais</button>
    </div>
  </div>
</section>

<!-- Section Pessoa -->
<section id="contribute-session-people" class="container-fluid">
  <div class="contribute-banner-session">
    <h2 class="col-12">Faça parte do time!</h2>
  </div>
  <div class="contribute-text p-3">
    <div class="text-center">
      <h3 class="mb-5 col-12">Participe de nossos projetos como voluntário</h3>
      <div class="row contribute-volunteer justify-content-center">
        <div class="col-sm-10 col-md-5 col-lg-2 py-1 px-2 mx-3 mb-2 pb-3 bg-light">
          <img src="img/contribute-volunteer-teach.png" aria-hidden="true" alt="">
          <h4>Cursos</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam</p>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-2 py-1 px-2 mx-3 mb-2 p-3 bg-light">
          <img src="img/contribute-volunteer-juridical.png" aria-hidden="true" alt="">
          <h4>Jurídico</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam</p>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-2 py-1 px-2 mx-3 mb-2 p-3 bg-light">
          <img src="img/contribute-volunteer-talk.png" aria-hidden="true" alt="">
          <h4>Psicológico</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam</p>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-2 py-1 px-2 mx-3 mb-2 p-3 bg-light">
          <img src="img/contribute-volunteer-money.png" aria-hidden="true" alt="" class="mb-1">
          <h4>Financeiro</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos ullam</p>
        </div>
      </div>
      <button class="btn btn-primary mt-5" onclick="location.href='/contact'">Contate-nos</button>
    </div>
  </div>
</section>

<!-- Section Empresa -->
<section id="contribute-session-company" class="container-fluid">
  <div class="contribute-banner-session">
    <h2 class="col-12">Apoio Empresarial</h2>
  </div>
  <div class="text-center contribute-enterprise container">
    <div class="row justify-content-center align-items-center mt-4 mb-5">
      <h3>Organizações que nos apoiam</h3>
      <div class="row justify-content-center my-3">
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo1.png" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo2.jpg" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo1.png" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo2.jpg" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo2.jpg" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo1.png" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo2.jpg" alt="">
        </div>
        <div class="col-6 col-md-3">
          <img src="img/contribute-enterprise-logo1.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

@endsection