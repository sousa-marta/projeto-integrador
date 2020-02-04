@extends('layouts.mainTemplate')

@section('title')
Editar Empresa
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-3 admin-start-margin">
  <form action="/admin/companies/{{$company->id}}" method="post" class="card p-5 col-md-10" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="row justify-content-between align-items-center">
      <h4>Editar {{$company->name}}</h4>
      <a href="/admin/companies" class="btn btn-primary p-1"><i class="fa">&#xf137;</i> Voltar</a>
    </div>
    <hr>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="companyName">Nome da empresa</label>
        <input type="text" class="form-control" name="companyName" id="companyName" value="{{$company->name}}" required>
      </div>
      <div class="from-group col-md-6">
        <label for="companyLogo">Logo da empresa</label>
        <input class="form-control" type="file" name="companyLogo" id="companyLogo" value="{{$company->logo}}">
      </div>
      <div class="from-group col-md-12">
        <label for="companyDescription">Descrição da empresa</label>
        <textarea class="form-control" name="companyDescription" id="companyDescription">{{$company->description}}</textarea>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="personContact">Pessoa de contato</label>
        <input type="text" class="form-control" name="companyPOC" id="personContact" value="{{$company->POC}}" required>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="companyPhone">Telefone Comercial</label>
        <input type="tel" class="form-control" name="companyPhone" id="companyPhone" value="{{$company->phone}}" pattern="[0-9]{2} [0-9]{5}[0-9]{4}" required>
        <small><strong>Formato:</strong> 11 12345678</small>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="companyEmail">E-mail</label>
        <input type="email" class="form-control" name="companyEmail" id="companyEmail" value="{{$company->email}}" required>
      </div>
      <div class="form-group col-md-6">
        <label for="companyAddress">Endereço</label>
        <input type="text" class="form-control" name="companyAddress" id="companyAddress" value="{{$company->address}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyAddressNo">Número</label>
        <input type="text" class="form-control" name="companyAddressNo" id="companyAddressNo" value="{{$company->address_number}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyAddressComp">Complemento</label>
        <input type="text" class="form-control" name="companyAddressComp" id="companyAddressComp" value="{{$company->complement}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyZip">CEP</label>
        <input type="text" class="form-control" name="companyZip" id="companyZip" value="{{$company->zip}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="city">Cidade</label>
        <input type="text" class="form-control" name="companyCity" id="city" value="{{$company->city}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="state">Estado</label>
        <input type="text" class="form-control" name="companyState" id="state" value="{{$company->state}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="companyCountry">País</label>
        <select class="form-control col-lg-12" name="companyCountry" id="companyCountry" required>
          <option value="" disabled>Escolha um país</option>
          @foreach ($locations as $location)
          <option {{($company->location_id == $location->id)? "selected":""}} value='{{$location->id}}'>{{$location->country}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>

  </form>
</section>
@endsection