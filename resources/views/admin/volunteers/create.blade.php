@extends('layouts.mainTemplate')

@section('title')
Cadastrar Voluntária(o)
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-3 admin-start-margin">
  <form action="/admin/volunteers" method="post" class="card p-5 col-md-10" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-between align-items-center">
      <h4>Cadastrar Nova(o) Voluntária(o)</h4>
      <a href="/admin/volunteers" class="btn btn-primary p-1"><i class="fa">&#xf137;</i> Voltar</a>
    </div>
    <hr>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="volunteerName">Nome completo</label>
        <input type="text" class="form-control" name="volunteerName" id="volunteerName" placeholder="Nome do voluntário" required>
      </div>
      <div class="from-group col-md-6">
        <label for="volunteerImg">Imagem de perfil</label>
        <input class="form-control" type="file" name="volunteerImg" id="volunteerImg" required>
      </div>
      <div class="form-group col md-4 mt-3">
        <label for="volunteerBirth">Data de nascimento</label>
        <input type="date" class="form-control" name="volunteerBirth" id="volunteerBirth" required>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="volunteerPhone">Telefone</label>
        <input type="tel" class="form-control" name="volunteerPhone" id="volunteerPhone" placeholder="11123451234" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
        <small><strong>Formato:</strong> 11123451234</small>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="volunteerEmail">E-mail</label>
        <input type="email" class="form-control" name="volunteerEmail" id="volunteerEmail" placeholder="E-mail" required>
      </div>
      <div class="form-group col-md-6">
        <label for="volunteerAddress">Endereço</label>
        <input type="text" class="form-control" name="volunteerAddress" id="volunteerAddress" placeholder="Endereço" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerAddressNo">Número</label>
        <input type="text" class="form-control" name="volunteerAddressNo" id="volunteerAddressNo" placeholder="Número" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerAddressComp">Complemento</label>
        <input type="text" class="form-control" name="volunteerAddressComp" id="volunteerAddressComp" placeholder="Complemento" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerZip">CEP</label>
        <input type="text" class="form-control" name="volunteerZip" id="volunteerZip" placeholder="CEP" required>
      </div>
      <div class="form-group col-md-3">
        <label for="city">Cidade</label>
        <input type="text" class="form-control" name="volunteerCity" id="city" placeholder="Cidade" required>
      </div>
      <div class="form-group col-md-3">
        <label for="state">Estado</label>
        <input type="text" class="form-control" name="volunteerState" id="state" placeholder="Estado" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerCountry">País</label>
        <select class="form-control col-md-12" name="volunteerCountry" id="volunteerCountry" required>
          <option value="" selected disabled>Selecione um país</option>
          @foreach ($locations as $location)
          <option value='{{$location->id}}'>{{$location->country}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>
  </form>
</section>
@endsection