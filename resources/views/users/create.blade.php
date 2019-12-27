@extends('layouts.mainTemplate')

@section('title')
Cadastre-se
@endsection


@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastre-se</li>
  </ol>
</nav>
@endsection

@section('content')

<section class="d-flex justify-content-center align-items-center m-4">
  <form action="/users" method="post" class="card p-4 col-11 col-sm-8 col-lg-6 contact-form-design">
    {{ csrf_field() }}
    <div class="form-group text-center">
      <h4>Estamos felizes por você querer fazer parte da nossa comunidade</h4>
      <p>Crie uma conta gratuitamente informando os dados abaixo.</p>
    </div>
    <div class="form-group">
      <label for="userFullName">
        <h5>Nome completo</h5>
      </label>
      <input type="text" class="form-control" name="userFullName" id="userFullName" placeholder="Nome completo" required>
    </div>
    <div class="form-group">
      <label for="userEmail">
        <h5>E-mail</h5>
      </label>
      <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="E-mail" required>
    </div>
    <div class="form-group">
      <label for="userPassword">
        <h5>Senha</h5>
      </label>
      <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Senha" required>
    </div>
    <label for="userCountry">
      <h5>País de origem</h5>
    </label>
    <div class="form-group">
      <select class="col-lg-12 form-control" name="userCountry" id="userCountry">
        <option value="">Selecione seu país de origem</option>
        <?php
        foreach ($locations as $location) {
          echo "<option value='$location->id'>$location->country</option>";
        }
        ?>
      </select>
    </div>
    <!-- <div class="form-group"> -->
    <button type="submit" class="btn btn-primary align-self-center mt-3">Criar conta</button>
    <!-- </div> -->
    <p class="text-center mt-3">Ao criar minha conta, eu aceito os Termos de Uso e a Política de Privacidade da Oppy.</p>
  </form>
</section>

@endsection


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>