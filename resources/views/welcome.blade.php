@extends('layouts.main')

@section('title', 'Lorem')

@section('content')

{{-- Comentário De Teste --}}
<main class="container-fluid p-0">
    <div class="d-flex justify-content-evenly flex-wrap py-2 py-md-5">
        <div class="d-flex flex-column">
            <img class="img-fluid img-content" src="img/lua.png">
        </div>
        <div class="d-flex flex-column align-items-start justify-content-center     img-content">
            <h1>Lorem, ipsum dolor.</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <button class="btn btn-dark">Lorem.</button>
        </div>
    </div>
</main>

@endsection
