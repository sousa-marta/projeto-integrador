@extends('layouts.mainTemplate')

@section('title')
Sobre Nós
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Quem somos</li>
  </ol>
</nav>
@endsection

@section('content')

<main>
    <!-- Banner com citação -->
    <section class="about-banner">
      <blockquote class="bg-color">
        <p class="quotation">Para a maioria dos imigrantes, mudar para um país novo é um ato de fé. Mesmo que você tenha ouvido histórias sobre segurança, oportunidade e prosperidade,  ainda assim é um grande salto se afastar de sua língua, de seu povo e de seu país. De suas raízes.</p>
        <p class="quotation-author">Nicola Yoon, escritora jamaicana-americana</p>
      </blockquote>
    </section>

    <!-- Dados Estatísticos -->
    <section class="container-fluid text-center border-config py-5">
      <h2 class="text-uppercase pb-3">Dados estatísticos</h2>
      <div class="row">
        <div class="col-sm-4 statistics-block mt-3">
          <img src="img/diagram.svg" aria-hidden="true" alt="" class="statistics-images">
          Em 10 anos, o número de imigrantes aumentou 160% no Brasil.
        </div>
        <div class="col-sm-4 statistics-block mt-3">
          <img src="img/portfolio.svg" aria-hidden="true" alt="" class="statistics-images">
          Mais de 112 mil imigrantes possuem trabalho formal no Brasil.
        </div>
        <div class="col-sm-4 statistics-block mt-3">
          <img src="img/collaboration.svg" aria-hidden="true" alt="" class="statistics-images">
          Iniciativas ajudam refugiados a ingressarem no mercado de trabalho brasileiro.
        </div>
      </div>
    </section>

    <!-- Como surgiu a Oppy? -->
    <section class="container-fluid">
      <div class="row oppy-info p-4 py-5">
        <img src="img/creativity.svg" aria-hidden="true" alt="" class="col-sm-4 col-lg-3">
        <div class="col-sm-7 mt-3">
          <h2 class="text-uppercase">Como surgiu a oppy?</h2>
          <p>Criada em 2019 com o objetivo de integrar milhões de emigrantes do mundo a seus países receptores, facilitando a aquisição de habilidades técnicas que lhes permitam entrar no mercado de trabalho e melhorar suas condições de vida. Além disso, conta com o apoio de empresas e recrutadores para conectar essa mão-de-obra qualificada de modo a garantir que essas pessoas alcancem seus objetivos.</p>
        </div>
      </div>
    </section>

    <!-- Nossa Proposta -->
    <section class="container-fluid">
      <div class="row oppy-proposal p-4 py-5">
        <div class="col-sm-7 mb-3">
          <h2 class="text-uppercase">Nossa Proposta</h2>
          <p>Inserir imigrantes (homens e mulheres) no mercado de trabalho do país destino, gerando valor agregado aos seus currículos, por meio do uso de ferramentas digitais que lhes permitam adquirir habilidades técnicas, e sem desconsiderar suas próprias bagagens pessoais e profissionais.</p>
        </div>
        <img src="img/population-system.svg" aria-hidden="true" alt="" class="col-sm-4 col-lg-3">
      </div>
    </section>

    <!-- Nossos Valores -->
    <section class="container-fluid oppy-values text-center py-5">
      <h2 class="text-uppercase col-12">Nossos Valores</h2>
      <div class="row">
          <div class="col-md-4 statistics-block mt-3">
            <img src="img/hands.svg" aria-hidden="true" alt="" class="statistics-images">
            <h5>Solidariedade</h5>
            <p>Acreditamos que dar oportunidades a essas pessoas auxilia na inserção delas na sociedade e cria um sentido mais amplo de comunidade.</p>
          </div>
          <div class="col-md-4 statistics-block mt-3">
            <img src="img/reliability.svg" aria-hidden="true" alt="" class="statistics-images">
            <h5>Integridade</h5>
            <p>Trabalhamos com responsabilidade e comprometimento para cumprir cada um dos processos que permitem o crescimento de nossos beneficiários.</p>
          </div>
          <div class="col-md-4 statistics-block mt-3">
            <img src="img/discussion.svg" aria-hidden="true" alt="" class="statistics-images">
            <h5>Inovação</h5>
            <p>Sabemos da importância de se manter atualizado nessa era digital e, por isso, buscamos oferecer as melhores ferramentas que auxiliem nessa adaptação e atualização pessoal.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  @endsection