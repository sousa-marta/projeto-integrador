@extends('layouts.mainTemplate')

@section('title')
Empresas Cadastradas
@endsection

@section('content')
<div class="pt-3">
  <section class="pages-title-bg d-flex-column justify-content-center align-items-center p-3 mt-5">
    <h1>Empresas Cadastradas</h1>
    <a href="/admin/companies/create" class="btn btn-secondary col-lg-2"><i class="fa">&#xf055;</i> Cadastrar</a>
  </section>
</div>
@include('partials.alerts')

<section class="admin-tables-section mt-5 pt-5">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col" class="d-none d-sm-table-cell">Endereço</th>
          <th scope="col" class="d-none d-sm-table-cell">Contato</th>
          <th scope="col" class="d-none d-sm-table-cell">Telefone</th>
          <th scope="col" class="d-none d-sm-table-cell">E-mail</th>
          <th scope="col" class="d-none d-sm-table-cell">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($companies as $company)
        <tr class="text-center">
          <th scope="row">{{ $company->id }}</th>
          <td>{{ $company->name }}</td>
          <td class="d-none d-sm-table-cell">{{ $company->address }}</td>
          <td class="d-none d-sm-table-cell">{{ $company->POC }}</td>
          <td class="d-none d-sm-table-cell">{{ $company->phone }}</td>
          <td class="d-none d-sm-table-cell">{{ $company->email }}</td>
          <td class="row justify-content-center align-items-center">
            <a href="/admin/companies/{{ $company->id }}" class="btn btn-info btn-sm mr-2">
              <i class="fas fa-external-link-alt"></i>
            </a>
            <form action="/admin/companies/{{ $company->id }}" method="post" onsubmit="return confirm('Tem certeza de que deseja remover {{$company->name}}?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>