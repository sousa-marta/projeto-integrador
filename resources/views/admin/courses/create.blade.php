@extends('layouts.mainTemplate')

@section('title')
Cursos
@endsection

@section('content')
<!-- Listar cursos já cadastrados -->
<section class="admin-tables-section mt-5 py-5">

  <div class="table-responsive">
    <div class="d-flex justify-content-start align-items-center mb-1">
      <h2>CURSOS</h2>
      <button type="button" class="btn btn-secondary ml-3 p-2" data-toggle="modal" data-target="#admin-add-course-modal" href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></button>
    </div>
    @include('partials.alerts')
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Duração</th>
          <th scope="col">Início</th>
          <th scope="col">Fim</th>
          <th scope="col">Categoria</th>
          <th scope="col">Empresa</th>
          <th scope="col">Status</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $course)
        <tr>
          <th scope="row">{{ $course->id }}</th>
          <td>{{ $course->name }}</td>
          <td>{{ $course->description }}</td>
          <td>{{ $course->duration }}</td>
          <td>{{ $course->start }}</td>
          <td>{{ $course->end }}</td>
          <td>{{ $course->category->name }}</td>
          <td>{{ $course->company->name }}</td>
          <td>{{ $course->status }}</td>
          <td class="d-flex justify-content-start align-items-center">
            {{-- botão editar --}}
            <a href="/admin/courses/{{ $course->id }}/edit" class="btn btn-info btn-sm mr-2">
              <i class="fas fa-edit"></i>
            </a>
            {{-- botão excluir --}}
            <form action="/admin/courses/{{$course->id}}" method="post" onsubmit="return confirm('Tem certeza que quer remover {{ addslashes($course->name) }}?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<!-- modal para adicionar novo curso -->
<div class="modal fade" id="admin-add-course-modal" tabindex="-1" role="dialog" aria-labelledby="admin-add-course-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="admin-add-course-modal">Adicionar Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </header>
      <main class="modal-body">

        <form action="/admin/courses" method="post" class="row">
          @csrf
          <div class="form-group col-md-12">
            <label for="courseName">Nome</label>
            <input type="text" class="form-control" name="courseName" id="courseName" placeholder="Nome do curso" required>
          </div>
          <div class="form-group col-md-12">
            <label for="courseDescription">Descrição</label>
            <textarea class="form-control" name="courseDescription" id="courseDescription" placeholder="Descrição do curso" rows="2"></textarea>
          </div>
          <div class="form-group col-md-4">
            <label for="courseDuration">Duração (meses)</label>
            <input type="number" class="form-control" name="courseDuration" id="courseDuration" placeholder="Duração do curso em meses">
          </div>
          <div class="form-group col-md-4">
            <label for="courseStart">Início</label>
            <input type="date" class="form-control" name="courseStart" id="courseStart" placeholder="Data início do curso">
          </div>
          <div class="form-group col-md-4">
            <label for="courseEnd">Fim</label>
            <input type="date" class="form-control" name="courseEnd" id="courseEnd" placeholder="Data final do curso">
            {{-- <small>Formato: mm/dd/yyyy </small> --}}
          </div>
          <div class="form-group col-md-6">
            <label for="courseCategory">Categoria</label>
            <select class="col-lg-12 form-control" name="courseCategory" id="courseCategory">
              <option selected disabled>Selecione a categoria</option>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}"> {{ $category->name }} </option>;
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="courseCompany">Empresa</label>
            <select class="col-lg-12 form-control" name="courseCompany" id="courseCompany">
              <option selected disabled>Selecione a empresa</option>
              @foreach ($companies as $company)
              <option value="{{ $company->id }}"> {{ $company->name }} </option>;
              @endforeach
            </select>
          </div>
          <input type="hidden" name="courseStatus" value="disponível">
          <div class="modal-footer modal-footer-bg-color col-md-12 justify-content-center">
            <button type="submit" class="btn btn-primary">Salvar Curso</button>
          </div>
        </form>

      </main>
    </dialog>
  </div>
</div>

@endsection