@extends('layouts.mainTemplate')

@section('title')
Cadastrar Voluntário
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-4 admin-start-margin">
  <form action="/admin/cadastro-voluntario" method="post" class="register-volunteer-main card p-5 col-lg-5">

    <div class="form-group text-center mt-3">
      <h2>Cadastrar Novo Voluntário</h2>
    </div>

    <!-- informações obrigatórias -->
    <div class="form-group">
      <label for="volunteerName">Nome Completo</label>
      <input type="text" class="form-control" name="volunteerName" id="volunteerName" placeholder="Nome do voluntário" required>
    </div>
    <div class="form-group">
      <label for="volunteerEmail">E-mail</label>
      <input type="email" class="form-control" name="volunteerEmail" id="volunteerEmail" placeholder="E-mail" required>
    </div>
    <div class="form-group">
      <label for="volunteerPhone">Telefone</label>
      <input type="tel" class="form-control" name="volunteerPhone" id="volunteerPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
      <small>Formato: 11 12345-1234</small>
    </div>
    <div class="form-group">
      <label for="volunteerBirth">Data de Nascimento</label>
      <input type="date" class="form-control" name="volunteerBirth" id="volunteerBirth" required>
    </div>
    <div class="row">
      <div class="form-group col-8 p-0">
        <label for="volunteerAddressStr">Endereço</label>
        <input type="text" class="form-control" name="volunteerAddressStr" id="volunteerAddressStr" placeholder="Endereço">
      </div>
      <div class="form-group col-4 p-0 pl-2">
        <label for="volunteerAddressNo">Número</label>
        <input type="text" class="form-control" name="volunteerAddressNo" id="volunteerAddressNo" placeholder="Número">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-6 p-0">
        <label for="volunteerAddressComp">Complemento</label>
        <input type="text" class="form-control" name="volunteerAddressComp" id="volunteerAddressComp" placeholder="Complemento">
      </div>
      <div class="form-group col-6 p-0 pl-2">
        <label for="volunteerAddressPC">CEP</label>
        <input type="text" class="form-control" name="volunteerAddressPC" id="volunteerAddressPC" placeholder="CEP">
      </div>
    </div>

    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>
  </form>
</section>


@endsection