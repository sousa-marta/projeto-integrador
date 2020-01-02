@extends('layouts.mainTemplate')

@section('title', __('Oppy'))

@section('content')
<div class="pt-5 mt-3">
<div class="container col-5 card my-5">
  <div class="card-body text-center">
    <h5>Não encontramos o que você procurou.</h5>
    <p>O que pode ter acontecido?</p>
    <ul>
      <li class="ml-3 pt-2">O conteúdo não está mais no ar.</li>
      <li class="ml-3 pt-2">O endereço digitado está errado.</li>
    </ul>
    <button type="button" onclick="location.href='/'" class="btn btn-secondary"><i class='fas fa-home mr-2'></i> Ir para página inicial</button>
  </div>
</div>
</div>
@endsection