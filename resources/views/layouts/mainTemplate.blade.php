@extends('layouts.templateOppy')

@section('breadcrumb')
<!-- Breadcrumb  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="breadcrumb-item-link" href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>
</nav>
@endsection
