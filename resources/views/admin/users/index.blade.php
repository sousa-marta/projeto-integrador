@extends('layouts.mainTemplate')

@section('title')
Lista de Usuários
@endsection

@section('content')
<section class="admin-tables-section mt-5 pt-5">
  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>Lista de Usuários</h2>
    </div>
    @include('partials.alerts')
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col" class="d-none d-sm-table-cell">E-mail</th>
          <th scope="col" class="d-none d-sm-table-cell">Função</th>
          <th scope="col" class="d-none d-sm-table-cell">Status</th>
          <th scope="col" class="d-none d-sm-table-cell">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr class="text-center">
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
          <td class="d-none d-sm-table-cell">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
          <td class="d-none d-sm-table-cell">N/A</td>
          <td class="row justify-content-center align-items-center">
            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary btn-sm float-left mr-2">Editar</a>
            <a href="{{route('admin.impersonate',$user->id)}}" class="btn btn-secondary btn-sm float-left mr-2">Personificar</a>
            <form action="{{ route('admin.users.destroy',$user->id) }}" method="post" class="float-left" onsubmit="return confirm('Tem certeza de que deseja remover?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$users->links()}}
  </div>
</section>
@endsection