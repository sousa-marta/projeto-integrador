@if(session('success'))
<div class="container mt-5 pt-5">
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
</div>
@endif

@if(session('warning'))
<div class="container mt-5 pt-5">
  <div class="alert alert-warning" role="alert">
    {{session('warning')}}
  </div>
</div>
@endif

@if(session('wrongLogin'))
<script type='text/javascript'>
  alert('Usuário e/ou senha incorretos')
</script>
@endif

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
<div class="alert alert-success mt-2">
  {{ $message }}
</div>
@endif