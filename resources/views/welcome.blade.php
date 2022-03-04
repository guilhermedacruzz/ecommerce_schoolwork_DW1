@extends('layouts.main')

@section('title', 'Lorem')

@section('content')

{{-- Comentário De Teste --}}
<main class="container-fluid p-0">
    <div class="d-flex justify-content-evenly flex-wrap-reverse p-md-5 p-3">
        <div class="d-flex flex-column align-items-start justify-content-center item-content">
            <div class="border-start border-5 ps-5">
                <h1>Lorem, ipsum dolor.</h1>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
            </div>
            <h6 class="ms-5">3.78$</h6>
            <button class="btn btn-dark ms-5">Lorem.</button>
        </div>
        <div class="d-flex flex-column">    
            <img class="item-img" src="img/controller.png">
        </div>
    </div>
</main>

@endsection
