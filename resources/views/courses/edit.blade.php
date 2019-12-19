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

      <h5>Editar Curso</h5>
      <div class="form-group">
        <label for="courseName">Nome</label>
      <input type="text" class="form-control" name="courseName" id="courseName" value="{{$course->name}}" required>
      </div>
      <div class="form-group">
        <label for="courseDescription">Descrição</label>
        <textarea class="form-control" name="courseDescription" id="courseDescription" rows="3">{{$course->description}}</textarea>
      </div>
      <div class="form-group">
        <label for="courseDuration">Duração (meses)</label>
        <input type="number" class="form-control" name="courseDuration" id="courseDuration" value="{{$course->duration}}">
      </div>
      <div class="form-group">
        <label for="courseStart">Início</label>
        <input type="date" class="form-control" name="courseStart" id="courseStart" value="{{$course->start}}">
      </div>
      <div class="form-group">
        <label for="courseEnd">Fim</label>
        <input type="date" class="form-control" name="courseEnd" id="courseEnd" value="{{$course->end}}">
        {{-- <small>Formato: mm/dd/yyyy </small> --}}
      </div>

      <input type="hidden" name="courseStatus" value="disponível">
      
      <div class="form-group">
          <label for="courseCategory">Categoria</label>
          <select class="col-lg-12" name="courseCategory" id="courseCategory">
            <option value="" selected disabled>Selecione a categoria</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->name }} </option>;
              @endforeach
          </select>
        </div>
      <div class="form-group">
          <label for="courseCompany">Empresa</label>
          <select class="col-lg-12" name="courseCompany" id="courseCompany" >
            <option value="" selected disabled>Selecione a empresa</option>
              @foreach ($companies as $company)
                <option value="{{ $company->id }}"> {{ $company->name }} </option>;
              @endforeach
          </select>
        </div>
      <div class="modal-footer modal-footer-bg-color">
        <button type="submit" class="btn btn-primary col-lg-12">Alterar Curso</button>
      </div>
    </form>
  </section>
  @endsection