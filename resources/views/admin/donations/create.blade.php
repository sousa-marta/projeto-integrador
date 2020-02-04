@extends('layouts.mainTemplate')

@section('title')
Doações
@endsection

@section('content')
<!-- gerenciamento das doações -->
<section class="admin-tables-section admin-start-margin py-5">

  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>DOAÇÕES</h2>
      <button type="button" onclick="setAddDonation()" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-donation-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>

    <!-- mensagens de alerta e de alterações -->
    @include('partials.alerts')

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Valor</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($donations as $donation)
        <tr>
          <th scope="row">{{ $donation->id }}</th>
          <td>{{ $donation->name }}</td>
          <td>R$ {{ $donation->amount }}</td>
          <td>{{ $donation->status }}</td>
          <td class="d-flex justify-content-start align-items-center">
            <!-- botão editar -->
            <a href="/admin/donations/{{ $donation->id }}" class="btn btn-info btn-sm mr-2">
              <i class="fas fa-external-link-alt"></i>
            </a>
            <!-- botão excluir -->
            <form action="/admin/donations/{{ $donation->id }}" method="POST" onsubmit="return confirm('Tem certeza de que deseja remover?')">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar doação -->
<div class="modal fade" id="admin-add-donation-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-donation-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-donation-modal">Adicionar Doação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">

        <form action="/admin/donations" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="donationName">Nome</label>
            <input type="text" class="form-control" name="donationName" id="donationName" placeholder="Nome" required>
          </div>
          <div class="form-group">
            <label for="donationPhone">Celular</label>
            <input type="tel" class="form-control" name="donationPhone" id="donationPhone" placeholder="11 12345-6789" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
            <small><strong>Formato:</strong> 11 12345-6789</small>
          </div>
          <div class="form-group">
            <label for="donationValue">Valor</label>
            <input type="number" class="form-control" name="donationValue" id="donationValue" placeholder="Valor" required>
          </div>
          <div class="form-group">
            <label for="donationStatus">Estado</label>
            <select class="col-lg-12" name="donationStatus" id="donationStatus" required>
              <option value="" selected disabled>Estado</option>
              <option value="Aguardando">Aguardando</option>
              <option value="Recebido">Recebido</option>
            </select>
          </div>
          <div class="modal-footer modal-footer-bg-color">
            <button type="submit" class="btn btn-primary col-lg-12">Adicionar</button>
          </div>

        </form>

      </main>
    </dialog>
  </div>
</div>

@endsection