@extends('layouts.mainTemplate')

@section('title')
Mude a sua senha
@endsection

@section('content')

<section class="d-flex justify-content-center align-items-center my-5 py-5">
  <form action="" method="post" class="card p-3 col-10 col-sm-7 col-lg-5 contact-form-design text-center">
    <h4>Troque sua senha</h4>
    <p>Informe sua senha original!</p>
    <div class="form-group p-2">
      <input type="text" class="form-control" name="userEmail" id="userEmail" placeholder="Senha Antiga" required>
    </div>
    <p>Informe sua nova senha!</p>
    <div class="form-group p-2">
      <input type="text" class="form-control" name="userEmail" id="userEmail" placeholder="Nova Senha" required>
    </div>
    <button type="submit" class="btn btn-primary align-self-center">Redefinir</button>
  </form>
</section>

@endsection