@extends('layouts.mainTemplate')

@section('title')
Cadastrar Empresa
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-3 admin-start-margin">
  <form action="/admin/companies" method="post" class="card p-5 col-md-10" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-between align-items-center">
      <h4>Cadastrar Nova Empresa</h4>
      <a href="/admin/companies" class="btn btn-primary p-1"><i class="fa">&#xf137;</i> Voltar</a>
    </div>
    <hr>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="companyName">Nome da empresa</label>
        <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Nome da empresa" required>
      </div>
      <div class="from-group col-md-6">
        <label for="companyLogo">Logo da empresa</label>
        <input class="form-control" type="file" name="companyLogo" id="companyLogo" required>
      </div>
      <div class="from-group col-md-12">
        <label for="companyDescription">Descrição da empresa</label>
        <textarea class="form-control" name="companyDescription" id="companyDescription" required></textarea>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="personContact">Pessoa de contato</label>
        <input type="text" class="form-control" name="companyPOC" id="personContact" placeholder="Nome completo" required>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="companyPhone">Telefone</label>
        <input type="tel" class="form-control" name="companyPhone" id="companyPhone" placeholder="11123451234" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
        <small><strong>Formato:</strong> 11123451234</small>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="companyEmail">E-mail</label>
        <input type="email" class="form-control" name="companyEmail" id="companyEmail" placeholder="E-mail" required>
      </div>
      <div class="form-group col-md-6">
        <label for="companyAddress">Endereço</label>
        <input type="text" class="form-control" name="companyAddress" id="companyAddress" placeholder="Endereço" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyAddressNo">Número</label>
        <input type="text" class="form-control" name="companyAddressNo" id="companyAddressNo" placeholder="Número" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyAddressComp">Complemento</label>
        <input type="text" class="form-control" name="companyAddressComp" id="companyAddressComp" placeholder="Complemento" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyZip">CEP</label>
        <input type="text" class="form-control" name="companyZip" id="companyZip" placeholder="CEP" required>
      </div>
      <div class="form-group col-md-3">
        <label for="city">Cidade</label>
        <input type="text" class="form-control" name="companyCity" id="city" placeholder="Cidade" required>
      </div>
      <div class="form-group col-md-3">
        <label for="state">Estado</label>
        <input type="text" class="form-control" name="companyState" id="state" placeholder="Estado" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyCountry">País</label>
        <select class="form-control col-md-12" name="companyCountry" id="companyCountry" required>
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