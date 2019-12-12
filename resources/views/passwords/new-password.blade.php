@extends('layouts.mainTemplate')

@section('content')

<main class="d-flex justify-content-center align-items-center my-5 py-5">
    <form action="" method="post" class="card p-3 col-10 col-sm-7 col-lg-5 contact-form-design text-center">
      <h4>Crie uma nova senha!</h4>
      <p>Insira sua senha!</p>
      <div class="form-group p-2">
        <input type="text" class="form-control" name="userEmail" id="userEmail" placeholder="Criar senha" required>
      </div>
      <p>Insira novamente!</p>
      <div class="form-group p-2">
        <input type="text" class="form-control" name="userEmail" id="userEmail" placeholder="Criar senha" required>
      </div>
      <button type="submit" class="btn btn-primary align-self-center">Redefinir</button>
    </form>
  </main>

  @endsection