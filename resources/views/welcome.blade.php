@extends('layouts.main')

@section('title', 'Lorem')

@section('content')

{{-- Comentário De Teste --}}
<main class="container-fluid p-0">
    <div id="slide-menu" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-evenly align-items-center flex-wrap-reverse p-md-5 p-3 h-100">
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
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-evenly align-items-center flex-wrap-reverse p-md-5 p-3 h-100">
                    <div class="d-flex flex-column align-items-start justify-content-center item-content">
                        <div class="border-start border-5 ps-5">
                            <h1>Lorem, ipsum dolor.</h1>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        </div>
                        <h6 class="ms-5">3.78$</h6>
                        <button class="btn btn-dark ms-5">Lorem.</button>
                    </div>
                    <div class="d-flex flex-column">    
                        <img class="item-img" src="img/keyboard.png">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-evenly align-items-center flex-wrap-reverse p-md-5 p-3 h-100">
                    <div class="d-flex flex-column align-items-start justify-content-center item-content">
                        <div class="border-start border-5 ps-5">
                            <h1>Lorem, ipsum dolor.</h1>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        </div>
                        <h6 class="ms-5">3.78$</h6>
                        <button class="btn btn-dark ms-5">Lorem.</button>
                    </div>
                    <div class="d-flex flex-column">    
                        <img class="item-img" src="img/mouse.png">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slide-menu" data-bs-slide="prev">
            <i class="fa-solid fa-angles-left text-dark border border-5 rounded-circle p-2"  aria-hidden="true"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slide-menu" data-bs-slide="next">
            <i class="fa-solid fa-angles-right text-dark border border-5 rounded-circle p-2"  aria-hidden="true"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>

@endsection
