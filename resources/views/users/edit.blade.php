@extends('layouts.mainTemplate')

@section('title')
Editar Informação do usuário
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/users/{{ $user->id }}">Perfil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edição</li>
  </ol>
</nav>
@include('partials.alerts')
@endsection

@section('content')

<!-- INFORMAÇÕES DO USUÁRIO -->
<section class="d-flex justify-content-center align-items-center p-4 mb-5">
  <form action="{{url('users', [$user->id])}}" method="post" class="user-info-main card p-5 col-lg-5" enctype="multipart/form-data">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}

    <!-- foto -->
    <div class="user-info-top">
      <img src="/img/users/{{ $user->img }}" alt="foto usuário" class="rounded m-1 user-info-photo">
      <p id="user-info-msg-photo-edited" class="bg-danger text-white px-2 my-2" hidden>foto alterada</p>
      <input type="file" name="userImage" id="userImage">
    </div>


    <div class="form-group text-center mt-3">
      <small>Edite suas informações e depois clique em Salvar.<br>* Informações obrigatórias.</small>
    </div>

    <!-- informações obrigatórias -->
    <div class="form-group">
      <label for="userFullName">Nome completo*</label>
      <input type="text" class="form-control" name="userFullName" id="userFullName" value='{{ $user->name }}' required>
    </div>
    <div class="form-group">
      <label for="userEmail">E-mail*</label>
      <input type="email" class="form-control" name="userEmail" id="userEmail" value='{{ $user->email }}' required>
    </div>
    <label for="userCountry">País de origem*</label>
    <div class="form-group">
      <select class="col-lg-12" name="userCountry" id="userCountry" required>
        <option value="" selected disabled>Selecione seu país de origem</option>
          @foreach ($locations as $location)
              <option <?php echo ($user->location_id == $location->id)? "selected":""?> value='{{$location->id}}'>{{$location->country}}</option>;
          @endforeach
      </select>
    </div>

    <!-- informações adicionais -->
    <div class="form-group">
      <label for="userPhone">Celular</label>
      <input type="tel" class="form-control" name="userPhone" id="userPhone" value='{{ $user->phone }}' pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">
      <small><strong>Formato:</strong> 11 12345-6789</small>
    </div>


    <div class="row">
      <div class="form-group col-3 pr-1 pl-0 ">
        <label for="userAddressPC">CEP</label>
        <input type="text" class="form-control" name="userAddressPC" id="userAddressPC" value='{{ $user->zip }}'>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-8 pl-0">
        <label for="userAddressStr">Endereço</label>
        <input type="text" class="form-control" name="userAddressStr" id="userAddressStr" value='{{ $user->address }}'>
      </div>
      <div class="form-group col-2 pl-0">
        <label for="userAddressNo">Número</label>
        <input type="text" class="form-control" name="userAddressNo" id="userAddressNo" value='{{ $user->address_number }}'>
      </div>
      <div class="form-group col-2 p-0">
        <label for="userAddressComp">Complemento</label>
        <input type="text" class="form-control" name="userAddressComp" id="userAddressComp" value='{{ $user->complement }}'>
      </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
      <a class="btn btn-primary align-self-center mt-3 mx-1" href="/users/{{Auth::user()->id}}">Voltar</a>
      <button type="submit" class="btn btn-primary align-self-center mt-3 mx-1">Salvar</button>
    </div>
    
  </form>
</section>

<script>
 
  //função para mostrar aviso de "foto alterada"
  document.getElementById("userImage").addEventListener("change", function(){
    if (this.value) {
      document.getElementById("user-info-msg-photo-edited").hidden = false;
    } else {
      document.getElementById("user-info-msg-photo-edited").hidden = true;
    }
  });

  
</script>

@endsection