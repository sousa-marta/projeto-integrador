@extends('layouts.mainTemplate')

@section('title')
Cadastrar Empresa
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-4 admin-start-margin">
  <form action="/companies/{{$company->id}}" method="post" class="register-company-main card p-5 col-md-8" enctype="multipart/form-data">
  <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="d-flex justify-content-end"> 
      <a href="/companies" class="btn btn-primary col-lg-3 p-1"><span class='fa'>&#xf1ad;</span> Voltar</a>
    </div>
    <div class="form-group text-center mt-3">
      <h2><strong>Editar Empresa Cadastrada</strong></h2>
    </div>

    <div class="form-group">
      <label for="companyName"><strong>Nome da Empresa</strong></label>
      <input type="text" class="form-control" name="companyName" id="companyName" value="{{$company->name}}" required>
    </div>
    <div class="from-group">
      <label for="companyLogo"><strong>Logo da Empresa</strong></label>
      <input class="form-control" type="file" name="companyLogo" id="companyLogo" value="{{$company->logo}}">
    </div>
    <div class="from-group">
      <label for="companyDescription"><strong>Descrição da empresa</strong></label>
      <textarea class="form-control" type="textarea" name="companyDescription" id="companyDescription">{{$company->description}}</textarea>
    </div>
    <div class="form-group">
      <label for="personContact"><strong>Pessoa de contato</strong></label>
      <input type="text" class="form-control" name="companyPOC" id="personContact" value="{{$company->POC}}" required>
    </div>
    <div class="form-group">
      <label for="companyPhone"><strong>Telefone</strong></label>
      <input type="tel" class="form-control" name="companyPhone" id="companyPhone" value="{{$company->phone}}" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
      <small>Formato: 11 12345-1234</small>
    </div>
    <div class="form-group">
      <label for="companyEmail"><strong>E-mail</strong></label>
      <input type="email" class="form-control" name="companyEmail" id="companyEmail" value="{{$company->email}}" required>
    </div>
    <div class="row">
      <div class="form-group col-8 p-0">
        <label for="companyAddress"><strong>Endereço</strong></label>
        <input type="text" class="form-control" name="companyAddress" id="companyAddress" value="{{$company->address}}" required>
      </div>
      <div class="form-group col-4 p-0 pl-2">
        <label for="companyAddressNo"><strong>Número</strong></label>
        <input type="text" class="form-control" name="companyAddressNo" id="companyAddressNo" value="{{$company->address_number}}" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-6 p-0">
        <label for="companyAddressComp"><strong>Complemento</strong></label>
        <input type="text" class="form-control" name="companyAddressComp" id="companyAddressComp" value="{{$company->complement}}" required>
      </div>
      <div class="form-group col-6 p-0 pl-2">
        <label for="companyZip"><strong>CEP</strong></label>
        <input type="text" class="form-control" name="companyZip" id="companyZip" value="{{$company->zip}}" required>
      </div>
    </div>
    <label for="companyCountry"><strong>País</strong></label>
    <div class="form-group">
      <select class="col-lg-12" name="companyCountry" id="companyCountry" required >
        <option value="" disabled>Escolha um país</option>
          @foreach ($locations as $location)
            <option <?php echo ($company->location_id == $location->id)? "selected":""?> value='{{$location->id}}'>{{$location->country}}</option>;
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="city"><strong>Cidade</strong></label>
      <input type="text" class="form-control" name="companyCity" id="city" value="{{$company->city}}" required>
    </div>
    <div class="form-group">
      <label for="state"><strong>Estado</strong></label>
      <input type="text" class="form-control" name="companyState" id="state" value="{{$company->state}}" required>
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