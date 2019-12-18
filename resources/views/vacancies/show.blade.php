@extends('layouts.mainTemplate')

@section('title')
Vaga {{ $vacancy->name }}
@endsection

@section('content')
<section class="pt-5">
  <div class="my-5 container border">
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
      <img src="/img/boy.svg" alt="" class="img-especial mr-2">
      <div>
        <h5>Vaga de {{ $vacancy->name }}</h5>
        <p><strong>Status da vaga:</strong> {{ $vacancy->status }}</p>
      </div>
    </div>
      <div class="row my-3">
        <p class="col-md-4"><strong>Empresa:</strong> {{ $company->name }}</p>
        <p class="col-md-4"><strong>Cidade:</strong> {{ $vacancy->city }}</p>
        <p class="col-md-4"><strong>Categoria:</strong> {{ $category->name }}</p>
        <p class="col-md-4"><strong>E-mail:</strong> {{ $vacancy->email }}</p>
        <p class="col-md-4"><strong>Telefone:</strong> {{ $vacancy->phone }}</p>
        <p class="col-md-4"><strong>Salário:</strong> {{ $vacancy->wage }}</p>
        <p class="col-md-12"><strong>Descrição:</strong> {{ $vacancy->description }}</p>
      </div>
      <div class="row justify-content-center mb-3">
        <button class="btn btn-dark mr-3" onclick="location.href='/vacancies/create'">Voltar</button>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#vacancy-edit-modal" href="#">Editar</button>
      </div>
  </div>
</section>


<!-- modal para adicionar vaga -->
<div class="modal fade" id="vacancy-edit-modal" tabindex="-1" role="dialog" aria-labelledby="vacancy-edit-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="vacancy-edit-modal">Editar Vaga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form action="/vacancies/{{ $vacancy->id }}" method="post" class="row">
          @csrf
          @method('PUT')
          <div class="form-group col-md-6">
            <label for="opportunityName">Nome da vaga</label>
            <input type="text" class="form-control" name="name" id="opportunityName" placeholder="Nome da vaga" value="{{ $vacancy->name }}" required>
          </div>
          <div class="form-group col-md-6">
            <label for="opportunityStatus">Status da vaga</label>
            <select class="col-lg-12 form-control" name="status" id="opportunityStatus" required>
              <option value="" selected disabled>Selecione o status da vaga</option>
              @if ($vacancy->status == 'aberta')
                <option selected value='{{ $vacancy->status }}'>aberta</option>
                <option value="fechada">fechada</option>
              @else
                <option value="aberta">aberta</option>
                <option selected value='{{ $vacancy->status }}'>fechada</option>
              @endif
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityCategory">Categoria</label>
            <select class="col-lg-12 form-control" name="category" id="opportunityCategory" required>
              <option value="" selected disabled>Selecione a categoria</option>
              @foreach ($categoriesList as $categoryItem)
                @if ($category->id == $categoryItem->id)
                  <option selected value='{{ $categoryItem->id }}'>{{ $categoryItem->name }}</option>
                @else
                  <option value='{{ $categoryItem->id }}'>{{ $categoryItem->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityCompany">Empresa</label>
            <select class="col-lg-12 form-control" name="company" id="opportunityCompany" required>
            <option value="" selected disabled>Selecione a empresa</option>
              @foreach ($companiesList as $companyItem)
                @if ($company->id == $companyItem->id)
                  <option selected value='{{ $companyItem->id }}'>{{ $companyItem->name }}</option>
                @else
                  <option value='{{ $companyItem->id }}'>{{ $companyItem->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityLocation">Cidade</label>
            <input type="text" class="form-control" name="city" id="opportunityLocation" placeholder="Cidade da vaga" value="{{ $vacancy->city }}" required>
          </div>
          <div class="form-group col-12">
            <label for="opportunityDescription">Descrição</label>
            <textarea type="text" class="form-control" name="description" id="opportunityDescription" placeholder="Descrição" required>{{ $vacancy->description }}</textarea>
          </div>
          <div class="form-group col-md-4">
            <label for="companyEmail">E-mail para envio de CV</label>
            <input type="email" class="form-control" name="email" id="companyEmail" placeholder="E-mail" value="{{ $vacancy->email }}" required>
          </div>
          <div class="form-group col-md-4">
            <label for="companyPhone">Telefone</label>
            <input type="tel" class="form-control" name="phone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" value="{{ $vacancy->phone }}" required>
            <small><strong>Formato:</strong> 11 12345-1234</small>
          </div>
          <div class="form-group col-md-4">
            <label for="wage">Salário</label>
            <input type="number" class="form-control" name="wage" id="wage" placeholder="Salário" value="{{ $vacancy->wage }}" required>
          </div>
      </main>
      <footer class="modal-footer modal-footer-bg-color justify-content-center">
        <button type="submit" class="btn btn-primary">Editar</button>
      </footer>
      </form>
    </dialog>
  </div>
</div>
@endsection