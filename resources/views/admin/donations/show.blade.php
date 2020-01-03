@extends('layouts.mainTemplate')

@section('title')
Doação {{ $donation->name }}
@endsection

@section('content')
<!-- mostra detalhes da doação -->
<section class="pt-5 row justify-content-center">
  <div class="my-5 mx-3 border col-md-4">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if(!empty($message))
      <div class="alert alert-success">
        {{ $message }}
      </div>
    @endif

    <div class="row align-items-center mt-2">
      <div>
        <h5>Doação de {{ $donation->name }}</h5>
      </div>
    </div>
    <div class="my-3 ">
      <p><strong>Nome:</strong> {{ $donation->name }}</p>
      <p><strong>Telefone:</strong> {{ $donation->phone }}</p>
      <p><strong>Valor:</strong>R$ {{ $donation->amount }}</p>
      <p><strong>Estado:</strong> {{ $donation->status }}</p>
    </div>
    <div class="row justify-content-center mb-3">
      <button class="btn btn-dark mr-3" onclick="location.href='/admin/donations/create'">Voltar</button>
      <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#donation-edit-modal" href="#">Editar</button>
    </div>
  </div>
</section>

<!-- modal para adicionar doação -->
<div class="modal fade" id="donation-edit-modal" tabindex="-1" role="dialog" aria-labelledby="donation-edit-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="donation-edit-modal">Adicionar Doação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">

        <form action="{{url('/admin/donations', [$donation->id])}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

          <h5>Editar Doação</h5>
          <div class="form-group">
            <label for="donationName">Nome</label>
            <input type="text" class="form-control" name="donationName" id="donationName" value="{{$donation->name}}" required>
          </div>
          <div class="form-group">
            <label for="donationPhone">Telefone</label>
            <input type="tel" class="form-control" name="donationPhone" id="donationPhone" value="{{$donation->phone}}" required>
            <small>Formato: 11 12345-1234</small>
          </div>
          <div class="form-group">
            <label for="donationValue">Valor</label>
            <input type="number" class="form-control" name="donationValue" id="donationValue" value="{{$donation->amount}}" required>
          </div>
          <div class="form-group">
            <label for="donationStatus">Estado</label>
            <select class="col-lg-12" name="donationStatus" id="donationStatus" required>
                <option value="" disabled>Estado</option>
                <option value="Aguardando" <?php echo ($donation->status=="Aguardando")? "selected":"" ?>>Aguardando</option>
                <option value="Recebido" <?php echo ($donation->status=="Recebido")? "selected":"" ?>>Recebido</option>
            </select>
          </div>
          <div class="modal-footer modal-footer-bg-color">
            <button type="submit" class="btn btn-primary col-lg-12">Salvar</button>
          </div>
          
        </form>

      </main>
    </dialog>
  </div>
</div>

@endsection