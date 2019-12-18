@extends('layouts.mainTemplate')

@section('title')
Vaga {{ $vacancy->name }}
@endsection

@section('content')
Título vaga: {{ $vacancy->name }}
@endsection