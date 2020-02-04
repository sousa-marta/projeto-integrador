@extends('layouts.mainTemplate')

@section('title')
Cadastre-se
@endsection


@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastre-se</li>
  </ol>
</nav>
@endsection

@section('content')
@include('partials.alerts')
<section class="d-flex justify-content-center align-items-center my-2">
  <form novalidate method="POST" id="createNewUserForm" action="/users" class="card p-4 col-11 col-md-10 contact-form-design">
    @csrf
    <div class="form-group text-center">
      <h4>É ótimo ter você em nossa comunidade!</h4>
      <p>Crie uma conta gratuitamente informando os dados abaixo.</p>
    </div>
    <div class="row">
      <div class="form-group col-12 col-sm-6">
        <label for="name"><strong>Nome completo</strong></label>
        <input type="text" class="form-control" name="name" id="newUserFullName" placeholder="Nome completo" minlength="3" required>
        <span class="nameError" aria-live="polite"></span>
      </div>
      <div class="form-group col-12 col-sm-6">
        <label for="location_id"><strong>País de origem</strong></label>
        <select class="col-lg-12 form-control" name="location_id" id="newUserCountry" required>
          <option value="" selected disabled>Selecione um país</option>
          @foreach ($locations as $location)
            <option value='{{$location->id}}'>{{$location->country}}</option>
          @endforeach
        </select>
        <span class="countryError" aria-live="polite"></span>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-12 col-sm-6">
        <label for="email"><strong>E-mail</strong></label>
        <input type="email" class="form-control" name="email" id="newUserEmail" placeholder="E-mail" required>
        <span class="emailError" aria-live="polite"></span>
      </div>
      <div class="form-group col-12 col-sm-6">
        <label for="password"><strong>Senha</strong></label>
        <input type="password" class="form-control" name="password" id="newUserPass" placeholder="Senha" minlength="8" maxlength="20" required>
        <span class="passError" aria-live="polite"></span>
      </div>
    </div>
    <button type="submit" id="createUser" class="btn btn-primary align-self-center mt-3">Criar conta</button>
    <p class="text-center mt-3">Ao criar minha conta, eu aceito os Termos de Uso e a Política de Privacidade da Oppy.</p>
  </form>
</section>
<script type="text/javascript" src="/js/new-user.js"></script>
@endsection