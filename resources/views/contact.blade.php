@extends('layouts.mainTemplate')

@section('title')
Contato | FAQ
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contato</li>
  </ol>
</nav>
@endsection

@section('content')
<h1 class="pages-title-bg d-flex justify-content-center align-items-center">Contato</h1>
@include('partials.alerts')

<!-- Formulário de Contato -->
<section class="d-flex justify-content-center align-items-center my-2">
  <form method="post" class="card p-4 col-11 col-md-10 contact-form-design">
  @csrf
    <p class="form-group text-center">Caso não encontre a resposta para a sua pergunta abaixo, não hesite em nos contatar usando o formulário ou diretamente pelo e-mail: <a class="contact-email" href="mailto:">contato@oppy.com.br</a></p>
    <div class="row">
      <div class="form-group col-12 col-sm-6">
        <label for="contactName"><strong>Nome</strong></label>
        <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Nome" pattern=".{3,}" required>
      </div>
      <div class="form-group col-12 col-sm-6">
        <label for="contactEmail"><strong>E-mail</strong></label>
        <input type="text" class="form-control" name="contactEmail" id="contactEmail" placeholder="E-mail" required>
      </div>
    </div>
    <div class="form-group col-12">
      <label for="contactSubject"><strong>Assunto</strong></label>
      <select class="col-lg-12 form-control" name="contactSubject" id="contactSubject" required>
        <option value="" selected disabled>Selecione o assunto</option>;
        <option value="apoio">Apoio</option>
        <option value="cadastro">Cadastro</option>
        <option value="cursos">Cursos</option>
        <option value="doacao">Doação</option>
        <option value="login">Login</option>
        <option value="vagas">Vagas</option>
        <option value="voluntariado">Voluntariado</option>
        <option value="outros">Outros</option>
      </select>
    </div>
    <div class="form-group col-12">
      <label for="contactMessage"><strong>Mensagem</strong></label>
      <textarea class="form-control" name="contactMessage" id="contactMessage" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary align-self-center mt-3">Enviar</button>
  </form>
</section>

<!-- Perguntas e Respostas -->
<h1 class="pages-title-bg d-flex justify-content-center align-items-center m-0">FAQ</h1>

<div class="accordion px-5 pb-2 questions-bg" id="questionsTopicOne">
  <h3 class="py-3 questions-subject">Cadastro</h3>
  <div class="card">
    <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionOne">
        <h5 class="m-0 questions-color">O cadastro no site é mesmo gratuito?</h5>
        <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
      </div>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="questionOne" data-parent="#questionsTopicOne">
      <div class="card-body">
        Sim, e sempre será! O nosso propósito é auxiliar você a ter acesso a materiais educacionais gratuitos para que consiga se recolocar no mercado de trabalho.
      </div>
    </div>
  </div>
  <div class="card">
    <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionTwo">
        <h5 class="mb-0 questions-color">O que vocês fazem com os meus dados?</h5>
        <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
      </div>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="questionTwo" data-parent="#questionsTopicOne">
      <div class="card-body">
        Usamos os dados coletados apenas para fins de comunicação com você e envio de cursos e vagas mais relevantes de acordo com o seu perfil. Não vendemos e nem divulgamos seus dados a parceiros ou terceiros.
      </div>
    </div>
  </div>
</div>

<div class="accordion px-5 pb-5 questions-bg" id="questionsTopicTwo">
  <h3 class="py-3 questions-subject">Cursos</h3>
  <div class="card">
    <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <div class="card-header border-0 d-flex justify-content-between align-items-center" id="questionThree">
        <h5 class="mb-0 questions-color">Como eu me inscrevo em um curso?</h5>
        <img src="img/plus-sign-to-add.svg" class="plus-sign" alt="">
      </div>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="questionThree" data-parent="#questionsTopicTwo">
      <div class="card-body">
        Para se inscrever em um curso, basta clicar no link de inscrição que seu interesse será registrado em nosso sistema. Toda a comunicação é feita por e-mail, então fique de olho para ver se a vaga foi confirmada.
      </div>
    </div>
  </div>
</div>
@endsection