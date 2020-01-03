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