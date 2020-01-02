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

<section class="d-flex justify-content-center align-items-center m-4">
  <form method="POST" action="/users" class="card p-4 col-11 col-sm-8 col-lg-6 contact-form-design">
    @csrf
    <div class="form-group text-center">
      <h4>Estamos felizes por você querer fazer parte da nossa comunidade</h4>
      <p>Crie uma conta gratuitamente informando os dados abaixo.</p>
    </div>
    <div class="form-group">
      <label for="name">
        <h5>Nome completo</h5>
      </label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Nome completo" required>
    </div>
    <div class="form-group">
      <label for="email">
        <h5>E-mail</h5>
      </label>
      <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
    </div>
    <div class="form-group">
      <label for="password">
        <h5>Senha</h5>
      </label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
    </div>
    <label for="location_id">
      <h5>País de origem</h5>
    </label>
    <div class="form-group">
      <select class="col-lg-12 form-control" name="location_id" id="location_id">
        <option value="" selected disabled>Selecione um país</option>
        @foreach ($locations as $location)
        <option value='{{$location->id}}'>{{$location->country}}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary align-self-center mt-3">Criar conta</button>
    <p class="text-center mt-3">Ao criar minha conta, eu aceito os Termos de Uso e a Política de Privacidade da Oppy.</p>
  </form>
</section>

@endsection