@extends('layouts.mainTemplate')

@section('title')
Vagas
@endsection

@section('content')
<!-- gerenciamento das vagas -->
<section class="admin-tables-section mt-5 pt-5">
  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>OPORTUNIDADES</h2>
      <button type="button" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-opportunity-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>
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
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col" class="d-none d-sm-table-cell">Categoria</th>
          <th scope="col" class="d-none d-sm-table-cell">Empresa</th>
          <th scope="col" class="d-none d-sm-table-cell">Salário</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vacancies as $vacancy)
        <tr class="text-center">
          <th scope="row">{{ $vacancy->id }}</th>
          <td>{{ $vacancy->name }}</td>
          <td class="d-none d-sm-table-cell">{{ $vacancy->category_name }}</td>
          <td class="d-none d-sm-table-cell">{{ $vacancy->company_name }}</td>
          <td class="d-none d-sm-table-cell">R$ {{ $vacancy->wage }}</td>
          <td>{{ $vacancy->state }}</td>
          <td class="d-flex justify-content-center align-items-center">
            <form action="" method="post">
              @csrf
              <!-- @method('EDIT') -->
              <button class="btn btn-success btn-sm mr-1"><i class='fas fa-pencil-alt'></i></button>
            </form>
            <form action="" method="post" onsubmit="return confirm('Tem certeza de que deseja remover?')">
              @csrf
              <!-- @method('DELETE') -->
              <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar vaga -->
<div class="modal fade" id="admin-add-opportunity-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-opportunity-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-opportunity-modal">Adicionar/Editar Vaga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">
        <form action="/vacancies" method="post" class="row">
          @csrf
          <div class="form-group col-md-6">
            <label for="opportunityName">Nome da vaga</label>
            <input type="text" class="form-control" name="name" id="opportunityName" placeholder="Nome da vaga" required>
          </div>
          <div class="form-group col-md-6">
            <label for="opportunityState">Status da vaga</label>
            <select class="col-lg-12 form-control" name="state" id="opportunityState" required>
              <option value="" selected disabled>Selecione o status da vaga</option>
              <option value="aberta">aberta</option>
              <option value="incompleta">incompleta</option>
              <option value="fechada">fechada</option>
            </select>
          </div>
          <input type="hidden" name="state" value="aberta">
          <div class="form-group col-md-4">
            <label for="opportunityCategory">Categoria</label>
            <select class="col-lg-12 form-control" name="category" id="opportunityCategory" required>
              <option value="" selected disabled>Selecione a categoria</option>
              @foreach ($categories as $category)
              echo "<option value='{{ $category->id }}'>{{ $category->name }}</option>";
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityCompany">Empresa</label>
            <select class="col-lg-12 form-control" name="company" id="opportunityCompany" required>
              <option value="" selected disabled>Selecione a empresa</option>
              @foreach ($companies as $company)
              echo "<option value='{{ $company->id }}'>{{ $company->name }}</option>";
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="opportunityLocation">Cidade</label>
            <select class="col-lg-12 form-control" name="location" id="opportunityLocation" required>
              <option value="" selected disabled>Selecione o local da vaga</option>
              @foreach ($locations as $location)
              echo "<option value='{{ $location->id }}'>{{ $location->city }}</option>";
              @endforeach
            </select>
          </div>
          <div class="form-group col-12">
            <label for="opportunityDescription">Descrição</label>
            <textarea type="text" class="form-control" name="description" id="opportunityDescription" placeholder="Descrição" required></textarea>
          </div>
          <div class="form-group col-md-4">
            <label for="companyEmail">E-mail para envio de CV</label>
            <input type="email" class="form-control" name="email" id="companyEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group col-md-4">
            <label for="companyPhone">Telefone</label>
            <input type="tel" class="form-control" name="phone" id="companyPhone" placeholder="11 12345-1234" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
            <small><strong>Formato:</strong> 11 12345-1234</small>
          </div>
          <div class="form-group col-md-4">
            <label for="wage">Salário</label>
            <input type="number" class="form-control" name="wage" id="wage" placeholder="Salário" required>
          </div>
      </main>
      <footer class="modal-footer modal-footer-bg-color justify-content-center">
        <button type="submit" class="btn btn-primary">Adicionar/Editar</button>
      </footer>
      </form>
    </dialog>
  </div>
</div>
@endsection