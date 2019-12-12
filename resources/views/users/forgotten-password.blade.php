@extends('layouts.mainTemplate')

@section('title')
Esqueceu a senha?
@endsection

@section('breadcrumb')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="login.php">Login</a></li>
    <li class="breadcrumb-item active" aria-current="page">Esqueceu a senha?</li>
  </ol>
</nav>
@endsection

@section('content')

<section class="d-flex justify-content-center align-items-center my-5 py-5">
    <form action="" method="post" class="card p-3 col-10 col-sm-7 col-lg-5 contact-form-design text-center">
      <h4>Esqueceu sua senha?</h4>
      <p>Informe seu e-mail e enviaremos para você as instruções para redefinir sua senha</p>
      <div class="form-group p-2">
        <input type="text" class="form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
      </div>
      <button type="submit" class="btn btn-primary align-self-center">Redefinir</button>
    </form>
  </section>

  @endsection