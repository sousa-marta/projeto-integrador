@extends('layouts.mainTemplate')

@section('title')
Lista de Usuários
@endsection

@section('content')
@include('partials.alerts')
<!-- botões para adicionar empresa e voluntário -->
<div class="container admin-start-margin py-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Editar {{$user->name}}</div>

        <div class="card-body">
          <form action="{{ route('admin.users.update',['user'=>$user->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            @foreach($roles as $role)
            <div class="form-check">
              <input type="checkbox" name="roles[]" value="{{$role->id}}" {{ $user->hasAnyRole($role->name)?'checked':'' }}>
              <label>{{ $role->name }}</label>
            </div>
            @endforeach
            <button type="submit" class="btn btn-success">Salvar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection