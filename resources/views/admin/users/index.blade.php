@extends('layouts.mainTemplate')

@section('title')
Lista de Usuários
@endsection

@include('partials.alerts')
@section('content')
<!-- botões para adicionar empresa e voluntário -->
<div class="container admin-start-margin py-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Lista de Usuários</div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                <td>
                  <a href="{{route('admin.users.edit',$user->id)}}" class="float-left mr-2">
                    <button type="button" class="btn btn-primary">Editar</button>
                  </a>
                  <a href="{{route('admin.impersonate',$user->id)}}" class="float-left mr-2">
                    <button type="button" class="btn btn-secondary">Impersonate</button>
                  </a>
                  <form action="{{ route('admin.users.destroy',$user->id) }}" method="post" class="float-left">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Deletar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$users->links()}}
        </div>
      </div>
    </div>
  </div>
</div>


@endsection