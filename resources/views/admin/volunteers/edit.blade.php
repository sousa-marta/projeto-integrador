@extends('layouts.mainTemplate')

@section('title')
Editar Voluntária(o)
@endsection

@section('content')

<!-- Formulário -->
<section class="d-flex justify-content-center align-items-center p-3 admin-start-margin">
  <form action="/admin/volunteers/{{$volunteer->id}}" method="post" class="card p-5 col-md-10" enctype="multipart/form-data">
  @include('partials.alerts')
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="row justify-content-between align-items-center">
      <h4>Editar {{$volunteer->name}}</h4>
      <a href="/admin/volunteers" class="btn btn-primary p-1"><i class="fa">&#xf137;</i> Voltar</a>
    </div>
    <hr>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="volunteerName">Nome completo</label>
        <input type="text" class="form-control" name="volunteerName" id="volunteerName" value="{{$volunteer->name}}" required>
      </div>
      <div class="from-group col-md-6">
        <label for="volunteerImg">Imagem de perfil</label>
        <input class="form-control" type="file" name="volunteerImg" id="volunteerImg" value="{{$volunteer->img}}">
      </div>
      <div class="form-group col md-4 mt-3">
        <label for="volunteerBirth">Data de nascimento</label>
        <input type="date" class="form-control" name="volunteerBirth" id="volunteerBirth" value="{{$volunteer->birth_date}}" required>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="volunteerPhone">Celular</label>
        <input type="tel" class="form-control" name="volunteerPhone" id="volunteerPhone" value="{{$volunteer->phone}}" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
        <small><strong>Formato:</strong> 11 12345-6789</small>
      </div>
      <div class="form-group col-md-4 mt-3">
        <label for="volunteerEmail">E-mail</label>
        <input type="email" class="form-control" name="volunteerEmail" id="volunteerEmail" value="{{$volunteer->email}}" required>
      </div>
      <div class="form-group col-md-6">
        <label for="volunteerAddress">Endereço</label>
        <input type="text" class="form-control" name="volunteerAddress" id="volunteerAddress" value="{{$volunteer->address}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerAddressNo">Número</label>
        <input type="text" class="form-control" name="volunteerAddressNo" id="volunteerAddressNo" value="{{$volunteer->address_number}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerAddressComp">Complemento</label>
        <input type="text" class="form-control" name="volunteerAddressComp" id="volunteerAddressComp" value="{{$volunteer->complement}}">
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerZip">CEP</label>
        <input type="text" class="form-control" name="volunteerZip" id="volunteerZip" value="{{$volunteer->zip}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="city">Cidade</label>
        <input type="text" class="form-control" name="volunteerCity" id="city" value="{{$volunteer->city}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="state">Estado</label>
        <input type="text" class="form-control" name="volunteerState" id="state" value="{{$volunteer->state}}" required>
      </div>
      <div class="form-group col-md-3">
        <label for="volunteerCountry">País</label>
        <select class="form-control col-lg-12" name="volunteerCountry" id="volunteerCountry">
          <option value="" disabled>Escolha um país</option>
          @foreach ($locations as $location)
          <option {{($volunteer->location_id == $location->id)? "selected":""}} value='{{$location->id}}'>{{$location->country}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary align-self-center mt-3">Salvar</button>
  </form>
</section>
@endsection