<!-- Página com o formulário para edição de curso -->

  @extends('layouts.mainTemplate')

  @section('title')
  Editar Cursos
  @endsection
  
  @section('content')
  
  <section class="d-flex justify-content-center align-items-center p-4 my-5">
  
    <form class="bg-light py-2 px-5" action="{{url('courses', [$course->id])}}" method="post">
      @csrf
      @method('PUT')

      <div class="container row">
        <div class="form-group col-md-12 mt-2">
          <h5 class="text-center">Editar Curso</h5>
        </div>
        <div class="form-group col-md-12">
          <label for="courseName">Nome</label>
          <input type="text" class="form-control" name="courseName" id="courseName" value="{{$course->name}}" required>
        </div>
        <div class="form-group col-md-12">
          <label for="courseDescription">Descrição</label>
          <textarea class="form-control" name="courseDescription" id="courseDescription" rows="2">{{$course->description}}</textarea>
        </div>
        <div class="form-group col-md-4">
          <label for="courseDuration">Duração (meses)</label>
          <input type="number" class="form-control" name="courseDuration" id="courseDuration" value="{{$course->duration}}">
        </div>
        <div class="form-group col-md-4">
          <label for="courseStart">Início</label>
          <input type="date" class="form-control" name="courseStart" id="courseStart" value="{{$course->start}}">
        </div>
        <div class="form-group col-md-4">
          <label for="courseEnd">Fim</label>
          <input type="date" class="form-control" name="courseEnd" id="courseEnd" value="{{$course->end}}">
          {{-- <small>Formato: mm/dd/yyyy </small> --}}
        </div>
        <div class="form-group col-md-4">
          <label for="courseCategory">Categoria</label>
          <select class="col-lg-12  form-control" name="courseCategory" id="courseCategory">
            <option value="" selected disabled>Selecione a categoria</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->name }} </option>;
              @endforeach
          </select>
          </div>
        <div class="form-group col-md-4">
          <label for="courseCompany">Empresa</label>
          <select class="col-lg-12  form-control" name="courseCompany" id="courseCompany" >
            <option value="" selected disabled>Selecione a empresa</option>
              @foreach ($companies as $company)
                <option value="{{ $company->id }}"> {{ $company->name }} </option>;
              @endforeach
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="courseStatus">Status do Curso</label>
          <select class="col-lg-12 form-control" name="courseStatus" id="courseStatus" required>
            <option value="" selected disabled>Selecione o status do curso</option>
            <option value="disponível">disponível</option>
            <option value="indisponível">indisponível</option>
          </select>
        </div>
        <div class="modal-footer modal-footer-bg-color col-md-12 justify-content-center">
          <button type="submit" class="btn btn-primary ">Alterar Curso</button>
        </div>
      </div>
    </form>
  </section>
  @endsection