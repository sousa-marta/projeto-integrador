@extends('layouts.mainTemplate')

@section('content')
@yield('banner')
<section class="row">
    <div class="col-md-4 col-lg-3">
        @yield('menu-content')
    </div>
    <div class="col-md-7 col-lg-8">
        @yield('text-content')
    </div>
</section>
@endsection