@extends('layouts.mainTemplate')

@section('title')
Editar Doações
@endsection

@section('content')

<section class="d-flex justify-content-center align-items-center p-4 my-5">

  <form class="bg-light py-2 px-5" action="{{url('donations', [$donation->id])}}" method="post">
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
    <button type="submit" class="btn btn-primary col-lg-12">Salvar</button>
      
  </form>

</section>

@endsection