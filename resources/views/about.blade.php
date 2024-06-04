@extends('layout/main')

@section('container')
    <h1>Halamam about</h1>
    <h3>about me</h3>
    <p>{{ $name }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection