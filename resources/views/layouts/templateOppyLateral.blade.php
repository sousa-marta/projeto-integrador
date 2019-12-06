@extends('templateOppy')

@section('content')

<section class="row">
    <div class="col-md-4 col-lg-3">
        @yield('content1')
    </div>
    <div class="col-md-7 col-lg-8">
        @yield('content2')
    </div>
</section>

@endsection