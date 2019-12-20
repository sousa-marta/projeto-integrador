@extends('layouts.mainTemplate')

@section('title')
Cadastrar Empresa
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-4 admin-start-margin">
  <form action="/admin/cadastro-empresa" method="post" class="register-company-main card p-5 col-lg-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group text-center mt-3">
      <h2>Cadastrar Nova Empresa</h2>
    </div>

    <div class="form-group">
      <label for="companyName">Nome da empresa</label>
      <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Nome da empresa" required>
    </div>
    <div class="from-group">
      <label for="companyLogo">Logo da Empresa</label>
      <input class="form-control" type="file" name="companyLogo" id="companyLogo">
    </div>
    <div class="form-group">
      <label for="personContact"><strong>Pessoa de contato</strong></label>
      <input type="text" class="form-control" name="companyPOC" id="personContact" placeholder="Nome completo do contato" required>
    </div>
    <div class="form-group">
      <label for="companyPhone">Telefone</label>
      <input type="tel" class="form-control" name="companyPhone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
      <small>Formato: 11 12345-1234</small>
    </div>
    <div class="form-group">
      <label for="companyEmail">E-mail</label>
      <input type="email" class="form-control" name="companyEmail" id="companyEmail" placeholder="E-mail" required>
      <select class="col-lg-12" name="companyCountry" id="companyCountry" required >
        <option value="" selected disabled>Selecione o país da empresa</option>
        <?php
          foreach ($locations as $location) {
            echo "<option value='$location->country'>$location->country</option>";
          }
        ?>
      </select>
    </div>
    <div class="row">
      <div class="form-group col-8 p-0">
        <label for="companyAddress">Endereço</label>
        <input type="text" class="form-control" name="companyAddress" id="companyAddress" placeholder="Endereço" required>
      </div>
      <div class="form-group col-4 p-0 pl-2">
        <label for="companyAddressNo">Número</label>
        <input type="text" class="form-control" name="companyAddressNo" id="companyAddressNo" placeholder="Número" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-6 p-0">
        <label for="companyAddressComp">Complemento</label>
        <input type="text" class="form-control" name="companyAddressComp" id="companyAddressComp" placeholder="Complemento" required>
      </div>
      <div class="form-group col-6 p-0 pl-2">
        <label for="companyZip">CEP</label>
        <input type="text" class="form-control" name="companyZip" id="companyZip" placeholder="CEP" required>
      </div>
    </div>
    <label for="companyCountry">País</label>
    <div class="form-group">
      <select class="col-lg-12" name="companyCountry" id="companyCountry" required >
        <option value="{{$country->id}}" selected disabled>{{$country->name}}</option>
          @foreach ($countries as $country)
            <option value='{{$country->id}}'>{{$country->name}}</option>;
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="city">Cidade</label>
      <input type="text" class="form-control" name="companyCity" id="city" placeholder="Cidade" required>
    </div>
    <div class="form-group">
      <label for="state">Estado</label>
      <input type="text" class="form-control" name="companyState" id="state" placeholder="Estado" required>
    </div>
    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>

  </form>
</section>

<div class="row">
      <div class="col-md-12">
        @if(isset($result))
          @if($result)
            <h1>Deu certo campeao!</h1>
          @else
            <h1>Nao deu certo seu cadastro, e foi sua culpa!</h1>
          @endif
        @endif
      </div>

</div>

@endsection