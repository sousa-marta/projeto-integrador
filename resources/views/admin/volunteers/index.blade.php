@extends('layouts.mainTemplate')

@section('title')
Voluntárias(os) Cadastradas(os)
@endsection


@section('content')
<div class="pt-3">
  <section class="pages-title-bg d-flex-column justify-content-center align-items-center p-3 mt-5">
    <h1>Voluntárias(os) Cadastradas(os)</h1>
    <a href="/admin/volunteers/create" class="btn btn-secondary col-lg-2"><i class="fa">&#xf055;</i> Cadastrar</a>
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
          <th scope="col" class="d-none d-sm-table-cell">Cidade</th>
          <th scope="col" class="d-none d-sm-table-cell">Telefone</th>
          <th scope="col" class="d-none d-sm-table-cell">E-mail</th>
          <th scope="col" class="d-none d-sm-table-cell">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($volunteers as $volunteer)
        <tr class="text-center">
          <th scope="row">{{ $volunteer->id }}</th>
          <td>{{ $volunteer->name }}</td>
          <td class="d-none d-sm-table-cell">{{ $volunteer->address }}</td>
          <td class="d-none d-sm-table-cell">{{ $volunteer->city }}</td>
          <td class="d-none d-sm-table-cell">{{ $volunteer->phone }}</td>
          <td class="d-none d-sm-table-cell">{{ $volunteer->email }}</td>
          <td class="row justify-content-center align-items-center">
            <a href="/admin/volunteers/{{ $volunteer->id }}" class="btn btn-info btn-sm mr-2">
              <i class="fas fa-external-link-alt"></i>
            </a>
            <form action="/admin/volunteers/{{ $volunteer->id }}" method="post" onsubmit="return confirm('Tem certeza de que deseja remover {{$volunteer->name}}?')">
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
@endsection